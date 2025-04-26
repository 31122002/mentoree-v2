<head>
    <?php include 'layouts/header.php'; ?>
    <style>
        body {
            padding-top: 56px;
        }

        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Hero section improvements */
        .page-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 4rem 0;
            color: white;
        }

        .breadcrumb {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-flex;
        }

        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: white;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.5);
        }

        /* Search and filter section */
        .search-filter {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        .search-filter .form-control,
        .search-filter .form-select {
            border: 1px solid #e9ecef;
            padding: 0.75rem 1rem;
            height: auto;
        }

        .search-filter .btn-primary {
            padding: 0.75rem 1.5rem;
            font-weight: 500;
        }

        /* Instructor cards */
        .instructor-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 0.75rem;
            overflow: hidden;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .instructor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .instructor-card .card-img {
            height: 100%;
            object-fit: cover;
        }

        .instructor-card .card-body {
            padding: 1.5rem;
        }

        .instructor-card .card-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .instructor-card .instructor-position {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }

        .instructor-card .rating {
            color: #ffc107;
            font-weight: 600;
        }

        .instructor-card .specialty {
            color: #fd7e14;
            font-weight: 500;
        }

        .instructor-card .social-links a {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: #495057;
            margin-right: 0.5rem;
            transition: all 0.3s;
        }

        .instructor-card .social-links a:hover {
            transform: translateY(-2px);
            text-decoration: none;
        }

        /* Pagination */
        .pagination {
            margin-top: 2rem;
        }

        .pagination .page-item .page-link {
            border: none;
            color: #495057;
            margin: 0 0.25rem;
            border-radius: 50% !important;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #667eea;
            color: white;
        }

        .pagination .page-item.disabled .page-link {
            color: #adb5bd;
        }
    </style>
</head>

<body>
    <?php include 'layouts/nav.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Meet Our Expert Mentors</h1>
                    <p class="lead mb-4">Learn from industry professionals with real-world experience</p>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Instructors</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <!-- Search and Filter Section -->
            <div class="search-filter">
                <div class="row g-3 align-items-center">
                    <!-- Search Bar -->
                    <div class="col-md-5">
                        <form class="position-relative">
                            <input class="form-control ps-5" type="search" placeholder="Search instructors...">
                            <button type="submit" class="btn btn-link position-absolute top-50 start-0 translate-middle-y ps-3">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Category Filter -->
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>All Categories</option>
                            <option>Digital Marketing</option>
                            <option>Graphic Design</option>
                            <option>Web Development</option>
                            <option>Data Science</option>
                            <option>Business</option>
                        </select>
                    </div>

                    <!-- Sort By -->
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>Sort By</option>
                            <option>Most Popular</option>
                            <option>Highest Rated</option>
                            <option>Newest</option>
                        </select>
                    </div>

                    <!-- Filter Button -->
                    <div class="col-md-1">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-filter me-1"></i> Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Instructor List -->
            <div class="row">
                <!-- Instructor Card 1 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <!-- Instructor Image -->
                            <div class="col-md-4">
                                <img src="assets/images/instructor/01.jpg" class="card-img h-100" alt="Dennis Barrett">
                            </div>
                            <!-- Instructor Info -->
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <!-- Name and Rating -->
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Dennis Barrett</h5>
                                            <p class="instructor-position mb-0">Professor at Sigma College</p>
                                        </div>
                                        <div class="rating">
                                            4.3 <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <!-- Bio -->
                                    <p class="card-text flex-grow-1">Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among.</p>

                                    <!-- Specialty and Social -->
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Digital Marketing</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 2 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/02.jpg" class="card-img h-100" alt="Jacqueline Miller">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Jacqueline Miller</h5>
                                            <p class="instructor-position mb-0">Professor at Eastbay College</p>
                                        </div>
                                        <div class="rating">
                                            4.0 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Graphic Design</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 3 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/03.jpg" class="card-img h-100" alt="Louis Ferguson">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Louis Ferguson</h5>
                                            <p class="instructor-position mb-0">Professor at Cambridge College</p>
                                        </div>
                                        <div class="rating">
                                            3.8 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Engineering Physics</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 4 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/04.jpg" class="card-img h-100" alt="Frances Guerrero">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Frances Guerrero</h5>
                                            <p class="instructor-position mb-0">Professor at LPU College</p>
                                        </div>
                                        <div class="rating">
                                            4.5 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">As it so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Graphic Design</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 5 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/06.jpg" class="card-img h-100" alt="Amanda Reed">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Amanda Reed</h5>
                                            <p class="instructor-position mb-0">Professor at NIT College</p>
                                        </div>
                                        <div class="rating">
                                            4.8 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">Contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Web Design</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 6 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/07.jpg" class="card-img h-100" alt="Lori Stevens">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Lori Stevens</h5>
                                            <p class="instructor-position mb-0">Professor at Oxford University</p>
                                        </div>
                                        <div class="rating">
                                            4.2 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Medical Science</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 7 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/08.jpg" class="card-img h-100" alt="Samuel Bishop">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Samuel Bishop</h5>
                                            <p class="instructor-position mb-0">Professor at VNSGU College</p>
                                        </div>
                                        <div class="rating">
                                            4.5 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">As it so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Digital Marketing</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card 8 -->
                <div class="col-lg-6 mb-4">
                    <div class="instructor-card card h-100">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="assets/images/instructor/09.jpg" class="card-img h-100" alt="Joan Wallace">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h5 class="card-title mb-0">Joan Wallace</h5>
                                            <p class="instructor-position mb-0">Professor at LPU College</p>
                                        </div>
                                        <div class="rating">
                                            4.6 <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="card-text flex-grow-1">Tt so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant the expense</p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <h6 class="specialty mb-0">Graphic Design</h6>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <?php include 'layouts/footer.php'; ?>
</body>