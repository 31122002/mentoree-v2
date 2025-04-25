<head>
    <?php include 'layouts/header.php'; ?>
</head>

<body>
    <?php include 'layouts/nav.php'; ?>
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
    <section class="bg-light position-relative">

        <!-- SVG decoration -->
        <figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
            <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                <path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
            </svg>
        </figure>

        <div class="container position-relative" style="margin-top: 100px;">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">

                        <!-- Image -->
                        <div class="col-6 col-md-3 text-center order-1">
                            <img class="mb-5 mt-5" src="public/assets/images/category-1.svg" alt="Educational category illustration">
                        </div>

                        <!-- Content -->
                        <div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 start-0">
                                <svg width="22px" height="22px" viewBox="0 0 22 22">
                                    <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                                </svg>
                            </figure>

                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 start-50 translate-middle mt-n6 d-none d-md-block">
                                <svg width="27px" height="27px">
                                    <path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
                                </svg>
                            </figure>

                            <!-- Title -->
                            <h1 class="mb-3">What do you want to learn?</h1>
                            <p class="mb-3">Grow your skill with the most reliable online courses and certifications</p>

                            <!-- Search -->
                            <form class="bg-body rounded p-2" action="#" method="get">
                                <div class="input-group">
                                    <input class="form-control border-0 me-1" type="search" name="search" placeholder="Search course" aria-label="Search courses">
                                    <button type="submit" class="btn btn-dark mb-0 rounded">Search</button>
                                </div>
                            </form>
                        </div>

                        <!-- Image -->
                        <div class="col-6 col-md-3 text-center order-3">
                            <img class="mt-5 mb-5" src="public/assets/images/category-2.svg" alt="Educational category illustration">
                        </div>

                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fs-1">Most Popular Courses</h2>
                    <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
                </div>
            </div>

            <!-- Tabs START -->
            <div class="row justify-content-center mb-4">
                <div class="col-12">
                    <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
                        <!-- Tab items -->
                        <li class="nav-item me-2 me-sm-5" role="presentation">
                            <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="true">Web Design</button>
                        </li>
                        <li class="nav-item me-2 me-sm-5" role="presentation">
                            <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2" aria-selected="false">Development</button>
                        </li>
                        <li class="nav-item me-2 me-sm-5" role="presentation">
                            <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-3" type="button" role="tab" aria-controls="course-pills-tabs-3" aria-selected="false">Graphic Design</button>
                        </li>
                        <li class="nav-item me-2 me-sm-5" role="presentation">
                            <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-4" type="button" role="tab" aria-controls="course-pills-tabs-4" aria-selected="false">Marketing</button>
                        </li>
                        <li class="nav-item me-2 me-sm-5" role="presentation">
                            <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-5" type="button" role="tab" aria-controls="course-pills-tabs-5" aria-selected="false">Finance</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content" id="course-pills-tabContent">
                <!-- Web Design Tab Content -->
                <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row g-4">
                        <!-- Course card example for Web Design -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Development Tab Content -->
                <div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="row g-4">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphic Design Tab Content -->
                <div class="tab-pane fade" id="course-pills-tabs-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                    <div class="row g-4">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing Tab Content -->
                <div class="tab-pane fade" id="course-pills-tabs-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
                    <div class="row g-4">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Finance Tab Content -->
                <div class="tab-pane fade" id="course-pills-tabs-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
                    <div class="row g-4">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="Sketch app design course">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple">All levels</span>
                                        <button class="btn btn-link p-0 text-decoration-none" aria-label="Add to favorites">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                    <h3 class="h5 card-title fw-normal"><a href="#" class="text-decoration-none">Sketch from A to Z: for app designer</a></h3>
                                    <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="small">4.0/5.0</span>
                                    </div>
                                </div>
                                <div class="card-footer pt-0 pb-3 bg-transparent">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="small"><i class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                        <span class="small"><i class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs content END -->
        </div>
    </section>
</body>
<?php include 'layouts/footer.php'; ?>