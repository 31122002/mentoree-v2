<?php
session_start();
require_once '../dbfiles/config.php'; // Database configuration

// Database connection with error handling
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    die("We're experiencing technical difficulties. Please try again later.");
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details securely with prepared statement
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT id, name, email, role, profile_picture FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // User not found in database - possible session hijacking
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$user = $result->fetch_assoc();
$stmt->close();
$conn->close();

// Sanitize user data for output
$name = htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8');
$profile_pic = $user['profile_picture'] ? htmlspecialchars($user['profile_picture']) : 'assets/images/avatar/default.png';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mentoree - Dashboard</title>

    <!-- CSS Assets -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/small_logo.png">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="assets/datatable_assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatable_assets/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/summernote/summernote-bs4.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .hero-section {
            height: 700px;
            background-image: url('assets/images/banner.jpg');
            background-position: center;
            background-size: cover;
            position: relative;
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 600px;
            }
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .client-logo {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }

        .client-logo:hover {
            filter: grayscale(0%);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Mentoree Logo" style="width: 150px;">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main Navigation -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown">
                            Courses
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="courses.php">Browse Courses</a></li>
                            <li><a class="dropdown-item" href="my-courses.php">My Courses</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="mentorsDropdown" role="button" data-bs-toggle="dropdown">
                            Mentors
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="mentors.php">Find a Mentor</a></li>
                            <li><a class="dropdown-item" href="become-mentor.php">Become a Mentor</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="resources.php">Resources</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="community.php">Community</a>
                    </li>
                </ul>

                <!-- Search and Profile -->
                <div class="d-flex">
                    <!-- Search -->
                    <div class="nav-search me-3">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search...">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </form>
                    </div>

                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="<?php echo $profile_pic; ?>" class="rounded-circle" width="40" height="40" alt="Profile">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-header">
                                <h6><?php echo $name; ?></h6>
                                <small><?php echo $email; ?></small>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="profile.php"><i class="mdi mdi-account me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php"><i class="mdi mdi-cog me-2"></i>Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section rounded-top-4 mx-2 mx-md-4">
        <div class="bg-overlay"></div>
        <div class="container position-relative z-index-1 h-100 d-flex align-items-center justify-content-center text-center" style="min-height: 500px;">
            <div class="col-lg-10 text-white">
                <div class="py-5">
                    <div class="d-inline-block bg-white px-3 py-2 rounded-pill mb-3">
                        <p class="mb-0 text-dark">
                            <span class="badge bg-success rounded-pill me-1">New</span>
                            One-to-one video mentoring
                        </p>
                    </div>

                    <h1 class="display-4 fw-bold mb-3">Start learning from <span class="text-warning">top mentors</span></h1>
                    <p class="lead mb-4">Empowering future leaders through wisdom, experience, and guidance</p>

                    <div class="d-flex gap-3 justify-content-center">
                        <a href="mentors.php" class="btn btn-primary btn-lg px-4">Find a Mentor</a>
                        <a href="courses.php" class="btn btn-outline-light btn-lg px-4">Browse Courses</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Decoration -->
        <svg class="position-absolute bottom-0 start-0 w-100" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z" fill="#fff"></path>
        </svg>
    </section>


    <!-- Client Logos Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h5 class="text-center text-muted mb-4">Trusted by leading organizations</h5>

                    <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                        <img src="assets/images/client/google.svg" class="client-logo" height="40" alt="Google">
                        <img src="assets/images/client/microsoft.svg" class="client-logo" height="40" alt="Microsoft">
                        <img src="assets/images/client/linkedin.svg" class="client-logo" height="40" alt="LinkedIn">
                        <img src="assets/images/client/netflix.svg" class="client-logo" height="40" alt="Netflix">
                        <img src="assets/images/client/coca-cola.svg" class="client-logo" height="40" alt="Coca-Cola">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="fw-bold">Featured Courses</h2>
                    <p class="text-muted">Start learning from our most popular courses</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Course Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="assets/images/courses/leadership.jpg" class="card-img-top" alt="Leadership">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Business</span>
                            <h5 class="card-title">Leadership Mastery</h5>
                            <p class="card-text text-muted">Develop essential leadership skills for the modern workplace.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="course-detail.php" class="btn btn-sm btn-primary">View Course</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="assets/images/courses/coding.jpg" class="card-img-top" alt="Coding">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Technology</span>
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text text-muted">Learn full-stack web development from industry experts.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="course-detail.php" class="btn btn-sm btn-primary">View Course</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="assets/images/courses/design.jpg" class="card-img-top" alt="Design">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Design</span>
                            <h5 class="card-title">UX/UI Design</h5>
                            <p class="card-text text-muted">Master user experience and interface design principles.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="course-detail.php" class="btn btn-sm btn-primary">View Course</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <img src="assets/images/courses/marketing.jpg" class="card-img-top" alt="Marketing">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">Marketing</span>
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text text-muted">Learn strategies for effective online marketing campaigns.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="course-detail.php" class="btn btn-sm btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="courses.php" class="btn btn-outline-primary">View All Courses</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Mentors Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="fw-bold">Top Mentors</h2>
                    <p class="text-muted">Learn from experienced professionals</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Mentor Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="assets/images/mentors/mentor1.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Mentor">
                            <h5 class="card-title">Sarah Johnson</h5>
                            <p class="text-muted">Leadership Coach</p>
                            <p class="card-text">15+ years experience in executive leadership training</p>
                            <a href="mentor-profile.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Mentor Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="assets/images/mentors/mentor2.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Mentor">
                            <h5 class="card-title">Michael Chen</h5>
                            <p class="text-muted">Tech Lead</p>
                            <p class="card-text">Senior developer at a Fortune 500 company</p>
                            <a href="mentor-profile.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Mentor Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="assets/images/mentors/mentor3.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Mentor">
                            <h5 class="card-title">Emma Rodriguez</h5>
                            <p class="text-muted">Design Director</p>
                            <p class="card-text">Award-winning UX/UI designer with 10+ years experience</p>
                            <a href="mentor-profile.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Mentor Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="assets/images/mentors/mentor4.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Mentor">
                            <h5 class="card-title">David Wilson</h5>
                            <p class="text-muted">Marketing Expert</p>
                            <p class="card-text">Specializes in growth hacking and digital marketing</p>
                            <a href="mentor-profile.php" class="btn btn-sm btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="mentors.php" class="btn btn-outline-primary">Browse All Mentors</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Ready to start your learning journey?</h2>
                    <p class="lead mb-0">Join thousands of students who have transformed their careers with Mentoree.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="signup.php" class="btn btn-light btn-lg px-4 me-2">Sign Up Free</a>
                    <a href="courses.php" class="btn btn-outline-light btn-lg px-4">Browse Courses</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="assets/images/logo-white.png" alt="Mentoree" width="150" class="mb-3">
                    <p>Empowering learners through mentorship and high-quality education.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="mdi mdi-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="mdi mdi-linkedin"></i></a>
                        <a href="#" class="text-white me-2"><i class="mdi mdi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white-50">Home</a></li>
                        <li class="mb-2"><a href="about.php" class="text-white-50">About Us</a></li>
                        <li class="mb-2"><a href="courses.php" class="text-white-50">Courses</a></li>
                        <li class="mb-2"><a href="mentors.php" class="text-white-50">Mentors</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white-50">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-3">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="faq.php" class="text-white-50">FAQ</a></li>
                        <li class="mb-2"><a href="help.php" class="text-white-50">Help Center</a></li>
                        <li class="mb-2"><a href="terms.php" class="text-white-50">Terms</a></li>
                        <li class="mb-2"><a href="privacy.php" class="text-white-50">Privacy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h5 class="mb-3">Newsletter</h5>
                    <p>Subscribe to get updates on new courses and features</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="my-4 bg-secondary">

            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Mentoree. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Made with <i class="mdi mdi-heart text-danger"></i> by Mentoree Team</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

    <!-- DataTables JS -->
    <script src="assets/datatable_assets/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/datatable_assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Summernote JS -->
    <script src="assets/summernote/summernote-bs4.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
</body>

</html>