<?php
// config.php - Configuration file for Mentoree platform

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session Configuration - MUST come before any output or session start
define('SESSION_NAME', 'MENTOREE_SESS');
define('SESSION_LIFETIME', 86400); // 24 hours
define('SESSION_SECURE', false); // Set to true if using HTTPS
define('SESSION_HTTPONLY', true);

// Start session with secure settings if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_name(SESSION_NAME);
    session_set_cookie_params([
        'lifetime' => SESSION_LIFETIME,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => SESSION_SECURE,
        'httponly' => SESSION_HTTPONLY,
        'samesite' => 'Lax'
    ]);
    session_start();

    // Regenerate session ID periodically to prevent fixation
    if (!isset($_SESSION['created'])) {
        $_SESSION['created'] = time();
    } elseif (time() - $_SESSION['created'] > 1800) { // 30 minutes
        session_regenerate_id(true);
        $_SESSION['created'] = time();
    }
}

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mentoree');

// Site Configuration
define('SITE_NAME', 'Mentoree');
define('SITE_URL', 'http://localhost/mentoree'); // Change this to your domain
define('SITE_EMAIL', 'support@mentoree.com');
define('ADMIN_EMAIL', 'admin@mentoree.com');

// File Paths
define('UPLOAD_DIR', __DIR__ . '/uploads/');
define('ASSETS_PATH', '/public/assets/');

// Security Settings
define('PEPPER', 'your-random-pepper-string-here'); // Change this to a random string
define('CSRF_TOKEN_NAME', 'csrf_token');

// Timezone
date_default_timezone_set('UTC');

// Autoload Classes
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/classes/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Database Connection Function
function getDBConnection()
{
    static $conn = null;

    if ($conn === null) {
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($conn->connect_error) {
                throw new Exception("Database connection failed: " . $conn->connect_error);
            }

            $conn->set_charset("utf8mb4");
        } catch (Exception $e) {
            error_log($e->getMessage());
            die("We're experiencing technical difficulties. Please try again later.");
        }
    }

    return $conn;
}

// CSRF Protection Functions
function generateCSRFToken()
{
    if (empty($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

function validateCSRFToken($token)
{
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

// Password Hashing Functions
function hashPassword($password)
{
    return password_hash($password . PEPPER, PASSWORD_BCRYPT, ['cost' => 12]);
}

function verifyPassword($password, $hash)
{
    return password_verify($password . PEPPER, $hash);
}

// Sanitization Functions
function sanitizeInput($data)
{
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Redirect Function
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    exit();
}

// Error Handling Function
function handleError($error, $redirectUrl = null)
{
    error_log($error);
    if ($redirectUrl) {
        $_SESSION['error_message'] = $error;
        redirect($redirectUrl);
    } else {
        die("An error occurred: " . $error);
    }
}

// Generate CSRF token for forms
$csrf_token = generateCSRFToken();
