<?php
session_start();
require_once 'dbfiles/config.php'; // Database configuration

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
    <?php include 'layouts/header.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include 'layouts/nav.php' ?>

    <!-- Add padding to the top of the body to account for fixed navbar -->
    <style>
        body {
            padding-top: 56px;
            /* Adjust this value based on your navbar height */
        }

        /* Optional: Add shadow when scrolling */
        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!-- Optional: Add shadow effect when scrolling -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>

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
            <path d="M0,800 L0,60 Q250,180 500,60 L580,800 Z" fill="#fff"></path>
        </svg>

    </section>


    <!-- Client Logos Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h5 class="text-center text-muted mb-4">Trusted by leading organizations</h5>

                    <!-- Swiper Container -->
                    <div class="swiper clientLogoSlider">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide d-flex justify-content-center">
                                <img src="assets/images/client/google.svg" class="client-logo" height="40" alt="Google">
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <img src="assets/images/client/microsoft.svg" class="client-logo" height="40" alt="Microsoft">
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <img src="assets/images/client/linkedin.svg" class="client-logo" height="40" alt="LinkedIn">
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <img src="assets/images/client/netflix.svg" class="client-logo" height="40" alt="Netflix">
                            </div>
                            <div class="swiper-slide d-flex justify-content-center">
                                <img src="assets/images/client/coca-cola.svg" class="client-logo" height="40" alt="Coca-Cola">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <!-- Title -->
                    <h2>Find Out More About us, <span class="text-warning">Eduport</span> insides.</h2>
                    <!-- Image -->
                    <img src="public/assets/images/img-1.jpg" class="rounded-2 w-100 h-100" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2"><i class="fas fa-user-tie fs-5"></i></div>
                            <h5 class="mt-2">Learn with Experts</h5>
                            <p class="mb-0">In no impression assistance contrasted Manners she wishing justice hastily new anxious At discovery objection we</p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-2"><i class="fas fa-book fs-5"></i></div>
                            <h5 class="mt-2">Learn Anything</h5>
                            <p class="mb-0">Smile spoke total few great had never their too Amongst moments do in arrived at my replied Fat weddings believed prospect</p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-success bg-opacity-10 text-success rounded-2"><i class="bi bi-alarm-fill fs-5"></i></div>
                            <h5 class="mt-2">Flexible Learning</h5>
                            <p class="mb-0">Denote simple fat denied add worthy little use As some he so high down am week Conduct denied add worthy little use As</p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-purple bg-opacity-10 text-purple rounded-2"><i class="fas fa-university fs-5"></i></div>
                            <h5 class="mt-2">Industrial Standards</h5>
                            <p class="mb-0">Pleasure and so read the was hope entire first decided the so must have as on was want up of to traveling so all</p>
                        </div>
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

    <section class="py-0 py-xl-5">
        <div class="container">
            <div class="row g-4">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                        <span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">10</h5>
                                <span class="mb-0 h5">K</span>
                            </div>
                            <p class="mb-0">Online Courses</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200" data-purecounter-duration="0">200</h5>
                                <span class="mb-0 h5">+</span>
                            </div>
                            <p class="mb-0">Expert Tutors</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60" data-purecounter-delay="200" data-purecounter-duration="0">60</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Online Students</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300" data-purecounter-duration="0">6</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Certified Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Mentors Section -->
    <section class="py-5 bg-light">
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
                    <a href="register.php" class="btn btn-light btn-lg px-4 me-2">Sign Up Free</a>
                    <a href="courses.php" class="btn btn-outline-light btn-lg px-4">Browse Courses</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'layouts/footer.php' ?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <style>
        .clientLogoSlider {
            padding: 20px 0;
        }

        .client-logo {
            transition: all 0.3s ease;
            filter: grayscale(100%);
            opacity: 0.7;
        }

        .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
            transform: scale(1.1);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.clientLogoSlider', {
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: true,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    992: {
                        slidesPerView: 5,
                    }
                }
            });
        });
    </script>
</body>

</html>