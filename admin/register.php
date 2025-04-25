<?php
require_once '../dbfiles/config.php'; // Database configuration

// Initialize variables
$name = $email = $role = '';
$errors = [];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $role = sanitizeInput($_POST['role'] ?? 'user');
    $profile_picture = $_FILES['profile_picture'] ?? null;

    // Validate inputs
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters';
    }

    // Validate profile picture if uploaded
    if ($profile_picture && $profile_picture['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($profile_picture['type'], $allowed_types)) {
            $errors['profile_picture'] = 'Only JPG, PNG, and GIF images are allowed';
        } elseif ($profile_picture['size'] > $max_size) {
            $errors['profile_picture'] = 'Image size must be less than 2MB';
        }
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        try {
            $conn = getDBConnection();

            // Check if email already exists
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $errors['email'] = 'Email already registered';
            } else {
                // Hash password
                $hashedPassword = hashPassword($password);
                $profile_picture_path = null;

                // Handle file upload
                if ($profile_picture && $profile_picture['error'] === UPLOAD_ERR_OK) {
                    $upload_dir = '../uploads/profile_pictures/';
                    if (!is_dir($upload_dir)) {
                        mkdir($upload_dir, 0755, true);
                    }

                    $file_extension = pathinfo($profile_picture['name'], PATHINFO_EXTENSION);
                    $filename = uniqid() . '.' . $file_extension;
                    $target_path = $upload_dir . $filename;

                    if (move_uploaded_file($profile_picture['tmp_name'], $target_path)) {
                        $profile_picture_path = $filename;
                    }
                }

                // Insert new user
                $stmt = $conn->prepare("INSERT INTO users (name, email, password, profile_picture, role) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $name, $email, $hashedPassword, $profile_picture_path, $role);

                if ($stmt->execute()) {
                    $_SESSION['success_message'] = 'Registration successful! Please login.';
                    redirect('login.php');
                } else {
                    $errors['general'] = 'Registration failed. Please try again.';
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            $errors['general'] = 'An error occurred. Please try again later.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .profile-picture-preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            display: none;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register-container bg-white">
            <h2 class="text-center mb-4">Create Your Account</h2>

            <?php if (!empty($errors['general'])): ?>
                <div class="alert alert-danger"><?php echo $errors['general']; ?></div>
            <?php endif; ?>

            <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control <?php echo isset($errors['name']) ? 'is-invalid' : ''; ?>"
                        id="name" name="name" placeholder="Enter your name"
                        value="<?php echo htmlspecialchars($name); ?>" required>
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>"
                        id="email" name="email" placeholder="Enter your email"
                        value="<?php echo htmlspecialchars($email); ?>" required>
                    <?php if (isset($errors['email'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>"
                        id="password" name="password" placeholder="Enter password" required>
                    <?php if (isset($errors['password'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Minimum 8 characters</small>
                </div>

                <div class="mb-3">
                    <label for="profile_picture" class="form-label">Profile Picture (Optional)</label>
                    <img id="profilePicturePreview" class="profile-picture-preview" src="#" alt="Preview">
                    <input type="file" class="form-control <?php echo isset($errors['profile_picture']) ? 'is-invalid' : ''; ?>"
                        id="profile_picture" name="profile_picture" accept="image/*">
                    <?php if (isset($errors['profile_picture'])): ?>
                        <div class="invalid-feedback"><?php echo $errors['profile_picture']; ?></div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Max 2MB (JPG, PNG, GIF)</small>
                </div>

                <div class="mb-4">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option value="user" <?php echo ($role === 'user') ? 'selected' : ''; ?>>admin</option>
                        <option value="admin" <?php echo ($role === 'admin') ? 'selected' : ''; ?>>mentor</option>
                        <option value="moderator" <?php echo ($role === 'moderator') ? 'selected' : ''; ?>>student</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
            </form>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Profile picture preview
        document.getElementById('profile_picture').addEventListener('change', function(event) {
            const preview = document.getElementById('profilePicturePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        });
    </script>
</body>

</html>