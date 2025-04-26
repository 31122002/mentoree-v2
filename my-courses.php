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

    <section class="bg-light ">
        <div class="container mt-5 mb-5">

            <div class="row g-4">
                <!-- Title and SVG START -->
                <div class="col-10 text-center mx-auto position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-100 start-50 translate-middle mt-5 ms-n9 pt-5 d-none d-lg-block">
                        <svg>
                            <path class="fill-success" d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z"></path>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 ms-n9">
                        <svg width="22px" height="22px" viewBox="0 0 22 22">
                            <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-md-block">
                        <svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
                            <polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 "></polygon>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-100 translate-middle">
                        <svg width="27px" height="27px">
                            <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
                        </svg>
                    </figure>

                    <!-- Title -->
                    <h1 class="position-relative fs-2">Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.</h1>
                </div>
                <!-- Title and SVG END -->
            </div>

            <!-- Images START -->
            <div class="row g-4 mt-0 mt-lg-5">

                <!-- Left image -->
                <div class="col-6 col-md-4">
                    <div class="row g-4">
                        <!-- Image -->
                        <div class="col-10 col-lg-6">
                            <img class="rounded-4 h-100 w-100" src="public/assets/images/05.jpg" alt="">
                        </div>
                        <!-- Image -->
                        <div class="col-12">
                            <img class="rounded-4 h-100 w-100" src="public/assets/images/03.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Center image -->
                <div class="col-6 col-md-4 position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute bottom-0 start-0 ms-n5">
                        <svg width="129px" height="133px">
                            <path class="fill-blue" d="M127.581,25.993 C122.659,31.935 113.441,24.283 118.356,18.351 C123.278,12.408 132.496,20.060 127.581,25.993 ZM115.247,49.292 C106.977,59.275 91.492,46.420 99.748,36.454 C108.018,26.470 123.503,39.325 115.247,49.292 ZM86.935,2.378 C91.464,-3.089 99.944,3.951 95.423,9.409 C90.894,14.876 82.414,7.836 86.935,2.378 ZM93.501,43.010 C84.246,54.182 66.918,39.796 76.157,28.643 C85.411,17.471 102.740,31.856 93.501,43.010 ZM57.726,6.672 C63.633,-0.460 74.694,8.723 68.796,15.842 C62.889,22.973 51.828,13.791 57.726,6.672 ZM65.132,42.254 C65.414,45.250 64.407,48.520 62.488,50.836 C60.459,53.285 57.635,54.609 54.547,55.032 C51.448,55.456 48.387,54.215 45.962,52.383 C43.626,50.618 42.031,47.307 41.761,44.441 C41.479,41.444 42.486,38.175 44.406,35.858 C46.434,33.410 49.258,32.085 52.346,31.662 C55.446,31.238 58.507,32.479 60.931,34.312 C63.267,36.076 64.862,39.387 65.132,42.254 ZM48.502,101.257 C42.496,108.507 31.251,99.172 37.247,91.934 C43.252,84.684 54.497,94.019 48.502,101.257 ZM23.966,17.251 C29.774,10.238 40.651,19.267 34.852,26.269 C29.043,33.281 18.167,24.251 23.966,17.251 ZM9.378,26.952 C15.088,20.059 25.780,28.935 20.079,35.817 C14.369,42.711 3.677,33.835 9.378,26.952 ZM10.074,49.315 C5.742,54.545 -2.369,47.811 1.955,42.590 C6.287,37.361 14.399,44.094 10.074,49.315 ZM10.889,68.408 C13.679,70.517 13.903,74.910 11.746,77.514 C9.434,80.305 5.439,80.481 2.640,78.366 C-0.150,76.258 -0.375,71.865 1.783,69.260 C4.095,66.469 8.090,66.293 10.889,68.408 ZM9.881,114.513 C5.450,119.861 -2.845,112.974 1.578,107.635 C6.008,102.287 14.304,109.173 9.881,114.513 ZM12.758,94.899 C14.381,91.994 16.764,89.898 20.208,89.575 C22.532,89.358 25.068,90.140 26.866,91.630 C28.766,93.203 29.795,95.394 30.124,97.789 C30.589,101.171 28.744,104.038 26.279,106.100 C26.173,106.189 26.066,106.278 25.960,106.367 C24.381,107.689 21.309,108.287 19.326,107.873 C17.757,107.545 16.312,106.882 15.033,105.915 C13.453,104.722 12.479,102.811 12.056,100.935 C11.657,99.164 11.627,96.924 12.555,95.263 C12.622,95.142 12.690,95.021 12.758,94.899 ZM23.787,69.054 C28.020,63.943 35.947,70.523 31.721,75.626 C27.487,80.736 19.560,74.156 23.787,69.054 ZM23.899,47.361 C28.822,41.418 38.039,49.070 33.125,55.003 C28.202,60.945 18.985,53.293 23.899,47.361 ZM51.663,129.014 C42.901,139.591 26.494,125.972 35.242,115.411 C44.004,104.833 60.411,118.454 51.663,129.014 ZM69.137,67.525 C69.381,67.564 69.626,67.602 69.871,67.641 C77.305,68.819 80.658,77.977 75.894,83.728 C71.131,89.478 61.508,87.888 58.968,80.803 C58.884,80.570 58.800,80.337 58.717,80.104 C56.311,73.396 62.098,66.410 69.137,67.525 Z"></path>
                        </svg>
                    </figure>
                    <!-- Image -->
                    <img class="rounded-4 h-100 w-100" src="public/assets/images/09.jpg" alt="">
                </div>

                <!-- Right image -->
                <div class="col-md-4">
                    <div class="row g-4">
                        <!-- Content -->
                        <div class="col-sm-6 col-md-12">
                            <div class="bg-grad rounded-4 h-100 w-100 p-5 text-start">
                                <span class="text-white">Our goal:</span>
                                <h3 class="text-black">“Be open to new ideas and approaches. Develop your problem-solving skills.”</h3>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <img class="rounded-4 h-100 w-100" src="public/assets/images/10.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Images END -->
        </div>
    </section>

    <section class="pt-0 pt-lg-5 pb-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-0">Welcome back user!</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Card START -->
                <div class="col-xl-8">
                    <div class="card p-2 bg-transparent border">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="assets/images/courses/4by3/01.jpg" class="rounded-2" alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <!-- Badge and dropdown -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Badge -->
                                        <div>
                                            <a href="#" class="badge text-bg-primary">Marketing</a>
                                            <a href="#" class="badge text-bg-dark">Beginner</a>
                                        </div>

                                        <!-- Dropdown -->
                                        <div class="dropdown flex-shrink-0">
                                            <a href="#" class="text-primary-hover text-secondary p-0 mb-0" id="cardShareAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="cardShareAction2">
                                                <li><a class="dropdown-item" href="#">Upgrade Course</a></li>
                                                <li><a class="dropdown-item" href="#">Rate Course</a></li>
                                                <li><a class="dropdown-item" href="#">Share course</a></li>
                                                <li><a class="dropdown-item" href="#">Unroll</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mt-3 mb-0"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h5>

                                    <!-- Progress item -->
                                    <div class="overflow-hidden mt-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="uppercase">Overall Progress</h6>
                                            <span class="h6 mb-0">20%</span>
                                        </div>
                                        <div class="progress progress-sm bg-success bg-opacity-10">
                                            <div class="progress-bar bg-success aos aos-init aos-animate" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button and list -->
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <!-- List -->
                                        <ul class="nav nav-divider small mb-0">
                                            <li class="nav-item h6 mb-0">Week 2</li>
                                            <li class="nav-item">Lecture 12</li>
                                        </ul>

                                        <!-- Dropdown -->
                                        <a href="#" class="btn btn-sm btn-primary-soft mb-0">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card END -->

                <!-- Card START -->
                <div class="col-xl-4">
                    <div class="card card-body bg-transparent border">
                        <h5 class="mb-3">Schedule exam</h5>
                        <!-- List -->
                        <div class="d-flex align-items-center position-relative">
                            <!-- Video button -->
                            <a href="#" class="btn btn-primary-soft btn-round mb-0">
                                <i class="fas fa-question-circle"></i>
                            </a>
                            <!-- Content -->
                            <div class="ms-3">
                                <a href="#" class="d-inline-block text-truncate mb-0 h6 fw-normal stretched-link">Quiz - Digital Marketing</a>
                                <ul class="nav nav-divider small mb-0">
                                    <li class="nav-item">12 June</li>
                                    <li class="nav-item">20 pts</li>
                                    <li class="nav-item">30 min</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card END -->
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5 bg-light position-relative overflow-hidden">
        <!-- SVG decoration -->
        <figure class="position-absolute bottom-0 end-0 mb-n5">
            <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                <path class="fill-warning" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
            </svg>
        </figure>
        <!-- SVG decoration -->
        <figure class="position-absolute top-0 start-0 mt-n8 me-5 d-none d-lg-block">
            <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                <path class="fill-purple opacity-3" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
            </svg>
        </figure>

        <div class="container position-relative mb-5 mt-5">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="fs-1 fw-bold">
                        <span class="position-relative z-index-9">Most Popular</span>
                        <span class="position-relative z-index-1">Courses
                            <!-- SVG START -->
                            <span class="position-absolute top-50 start-50 translate-middle z-index-n1">
                                <svg width="163.9px" height="48.6px">
                                    <path class="fill-warning" d="M162.5,19.9c-0.1-0.4-0.2-0.8-0.3-1.3c-0.1-0.3-0.2-0.5-0.4-0.7c-0.3-0.4-0.7-0.7-1.2-0.9l0.1,0l-0.1,0 c0.1-0.4-0.2-0.5-0.5-0.6c0,0-0.1,0-0.1,0c-0.1-0.1-0.2-0.2-0.3-0.3c0-0.3,0-0.6-0.2-0.7c-0.1-0.1-0.3-0.2-0.6-0.2 c0-0.3-0.1-0.5-0.3-0.6c-0.1-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.1,0-0.2,0c-0.5-0.4-1-0.8-1.4-1.1c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.3-0.2 c-0.9-0.5-1.8-1-2.6-1.5c-6-3.6-13.2-4.3-19.8-6.2c-4.1-1.2-8.4-1.4-12.6-2c-5.6-0.8-11.3-0.6-16.9-1.1c-2.3-0.2-4.6-0.3-6.8-0.3 c-1.2,0-2.4-0.2-3.5-0.1c-2.4,0.4-4.9,0.6-7.4,0.7c-0.8,0-1.7,0.1-2.5,0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0 c-0.9,0-1.8,0.1-2.7,0.1c-0.9,0-1.8,0-2.7,0c-5.5-0.3-10.7,0.7-16,1.5c-2.5,0.4-5.1,1-7.6,1.5c-2.8,0.6-5.6,0.7-8.4,1.4 c-4.1,1-8.2,1.9-12.3,2.6c-4,0.7-8,1.6-11.9,2.7c-3.6,1-6.9,2.5-10.1,4.1c-1.9,0.9-3.8,1.7-5.2,3.2c-1.7,1.8-2.8,4-4.2,6 c-1,1.3-0.7,2.5,0.2,3.9c2,3.1,5.5,4.4,9,5.7c1.8,0.7,3.6,1,5.3,1.8c2.3,1.1,4.6,2.3,7.1,3.2c5.2,2,10.6,3.4,16.2,4.4 c3,0.6,6.2,0.9,9.2,1.1c4.8,0.3,9.5,1.1,14.3,0.8c0.3,0.3,0.6,0.3,0.9-0.1c0.7-0.3,1.4,0.1,2.1-0.1c3.7-0.6,7.6-0.3,11.3-0.3 c2.1,0,4.3,0.3,6.4,0.2c4-0.2,8-0.4,11.9-0.8c5.4-0.5,10.9-1,16.2-2.2c0.1,0.2,0.2,0.1,0.2,0c0.5-0.1,1-0.2,1.4-0.3 c0.1,0.1,0.2,0.1,0.3,0c0.5-0.1,1-0.3,1.6-0.3c3.3-0.3,6.7-0.6,10-1c2.1-0.3,4.1-0.8,6.2-1.2c0.2,0.1,0.3,0.1,0.4,0.1 c0.1,0,0.1,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2 c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3-0.1,0.3-0.3c0.5-0.2,0.9-0.4,1.4-0.5 c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0.1,0.4,0.1,0.6,0 c0.1,0,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0.5-0.2,1-0.4,1.6-0.7c1.5-0.7,3.1-1.4,4.7-1.9c4.8-1.5,9.1-3.4,12.8-6.3 c0.8-0.2,1.2-0.5,1.6-1c0.2-0.3,0.4-0.6,0.5-0.9c0.5-0.1,0.7-0.2,0.9-0.5c0.2-0.2,0.2-0.5,0.3-0.9c0-0.1,0-0.1,0.1-0.1 c0.5,0,0.6-0.3,0.8-0.5C162.3,24,163,22,162.5,19.9z M4.4,28.7c-0.2-0.4-0.3-0.9-0.1-1.2c1.8-2.9,3.4-6,6.8-8 c2.8-1.7,5.9-2.9,8.9-4.2c4.3-1.8,9-2.5,13.6-3.4c0,0.1,0,0.2,0,0.2l0,0c-1.1,0.4-2.2,0.7-3.2,1.1c-3.3,1.1-6.5,2.1-9.7,3.4 c-4.2,1.6-7.6,4.2-10.1,7.5c-0.5,0.7-1,1.3-1.6,2c-2.2,2.7-1,4.7,1.2,6.9c0.1,0.1,0.3,0.3,0.4,0.5C7.8,32.5,5.5,31.2,4.4,28.7z  M158.2,23.8c-1.7,2.8-4.1,5.1-7,6.8c-2,1.2-4.5,2.1-6.9,2.9c-3.3,1-6.4,2.4-9.5,3.7c-3.9,1.6-8.1,2.5-12.4,2.9 c-6,0.5-11.8,1.5-17.6,2.5c-4.8,0.8-9.8,1-14.7,1.5c-5.6,0.6-11.2,0.2-16.8,0.1c-3.1-0.1-6.3,0.3-9.4,0.5c-2.6,0.2-5.2,0.1-7.8-0.1 c-3.9-0.3-7.8-0.5-11.7-0.9c-2.8-0.3-5.5-0.7-8.2-1.4c-3.2-0.8-6.3-1.7-9.5-2.5c-0.5-0.1-1-0.3-1.4-0.5c-0.2-0.1-0.4-0.1-0.6-0.2 c0,0,0.1,0,0.1,0c0.3-0.1,0.5,0,0.7,0.1c0,0,0,0,0,0c3.4,0.5,6.9,1.2,10.3,1.4c0.5,0,1,0,1.5,0c0.5,0,1.3,0.2,1.3-0.3 c0-0.6-0.7-0.9-1.4-0.9c-2.1,0-4.2-0.2-6.3-0.5c-4.6-0.7-9.1-1.5-13.4-3c-2.9-1.1-5.4-2.7-6.9-5.2c-0.5-0.8-0.5-1.6-0.1-2.4 c3.2-6.2,9-9.8,16.3-12.2c6.7-2.2,13.2-4.5,20.2-6c5-1.1,10-1.8,15-2.9c8.5-1.9,17.2-2.4,26-2.7c3.6-0.1,7.1-0.8,10.8-0.6 c8.4,0.7,16.7,1.2,25,2.3c4.5,0.6,9,1.2,13.6,1.7c3.6,0.4,7.1,1.4,10.5,2.8c3.1,1.3,6,2.9,8.5,5C159.1,17.7,159.8,21.1,158.2,23.8z"></path>
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h2>
                    <p class="mb-0">See what course other students and experts in your domain are learning on.</p>
                </div>
            </div>

            <!-- Outer tabs START -->
            <ul class="nav nav-pills nav-pill-soft mb-3" id="course-pills-tab" role="tablist">
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5" role="presentation">
                    <button class="nav-link active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tab1" type="button" role="tab" aria-controls="course-pills-tab1" aria-selected="true">Art &amp; Design</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5" role="presentation">
                    <button class="nav-link" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tab2" type="button" role="tab" aria-controls="course-pills-tab2" aria-selected="false" tabindex="-1">Development</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5" role="presentation">
                    <button class="nav-link" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tab3" type="button" role="tab" aria-controls="course-pills-tab3" aria-selected="false" tabindex="-1">Data Science</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5" role="presentation">
                    <button class="nav-link" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tab4" type="button" role="tab" aria-controls="course-pills-tab4" aria-selected="false" tabindex="-1">Marketing</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5" role="presentation">
                    <button class="nav-link" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-tab5" type="button" role="tab" aria-controls="course-pills-tab5" aria-selected="false" tabindex="-1">Finance</button>
                </li>
            </ul>
            <!-- Outer tabs END -->

            <!-- Outer tabs contents START -->
            <div class="tab-content mb-0" id="course-pills-tabContent">

                <!-- Outer content START -->
                <div class="tab-pane fade active show" id="course-pills-tab1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-between">

                                <!-- Left content START -->
                                <div class="col-lg-6">
                                    <!-- Title -->
                                    <h3>Art &amp; Design</h3>
                                    <p class="mb-3">Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.</p>

                                    <!-- Inner tabs START -->
                                    <ul class="nav nav-pills nav-pill-dark-soft mb-0" id="course-pills-tab-inner" role="tablist">
                                        <!-- Tab item -->
                                        <li class="nav-item me-2 me-sm-3" role="presentation">
                                            <button class="nav-link active" id="course-pills-tab-01" data-bs-toggle="pill" data-bs-target="#course-pills-tab01" type="button" role="tab" aria-controls="course-pills-tab01" aria-selected="true">Art &amp; Design</button>
                                        </li>
                                        <!-- Tab item -->
                                        <li class="nav-item me-2 me-sm-3" role="presentation">
                                            <button class="nav-link" id="course-pills-tab-02" data-bs-toggle="pill" data-bs-target="#course-pills-tab02" type="button" role="tab" aria-controls="course-pills-tab02" aria-selected="false" tabindex="-1">Graphic Design</button>
                                        </li>
                                        <!-- Tab item -->
                                        <li class="nav-item me-2 me-sm-3" role="presentation">
                                            <button class="nav-link" id="course-pills-tab-03" data-bs-toggle="pill" data-bs-target="#course-pills-tab03" type="button" role="tab" aria-controls="course-pills-tab03" aria-selected="false" tabindex="-1">Web Design</button>
                                        </li>
                                    </ul>
                                    <!-- Inner tabs END -->

                                    <!-- Rating -->
                                    <div class="d-flex align-items-center mb-3">
                                        <h2 class="me-3 mb-0">4.5</h2>
                                        <div>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                            <p class="mb-0">Review from our students</p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Left content END -->

                                <!-- Right content START -->
                                <div class="col-lg-6 position-relative">

                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-0 start-100 translate-middle z-index-1 mt-5 pt-5 ms-3 d-none d-md-block">
                                        <svg>
                                            <path class="fill-primary" d="m105.32 16.607c-3.262 5.822-12.294 0.748-9.037-5.064 3.262-5.821 12.294-0.747 9.037 5.064zm-6.865 21.74c-5.481 9.779-20.654 1.255-15.182-8.509 5.48-9.779 20.653-1.255 15.182 8.509zm-36.466-11.481c6.134-10.943 23.113-1.404 16.99 9.522-6.133 10.943-23.113 1.404-16.99-9.522zm5.08-24.019c3.002-5.355 11.311-0.687 8.314 4.66-3.001 5.355-11.31 0.687-8.314-4.66zm-4.357 58.171c6.507-0.155 10.785 7.113 7.628 12.746-3.156 5.634-11.589 5.779-14.853 0.148-0.108-0.186-0.215-0.371-0.322-0.556-3.091-5.332 0.744-12.175 6.905-12.322 0.214-5e-3 0.428-0.011 0.642-0.016zm-14.997-8.34c-2.57 0.843-5.367 0.264-7.715-0.917-2.262-1.137-4.134-3.706-4.81-6.102-0.706-2.505-0.358-5.443 0.914-7.712 1.344-2.399 3.54-3.965 6.101-4.806 2.571-0.843 5.368-0.263 7.715 0.917 2.262 1.138 4.134 3.706 4.81 6.102 0.706 2.506 0.358 5.444-0.913 7.713-1.345 2.398-3.541 3.965-6.102 4.805zm-4.824-41.632c3.915-6.985 14.753-0.896 10.845 6.078-3.915 6.985-14.753 0.896-10.845-6.078zm-11.502 89.749c-1.138 1.37-3.658 2.357-5.408 2.314-1.387-0.035-2.719-0.374-3.958-0.997-1.529-0.769-2.655-2.243-3.307-3.773-0.615-1.445-0.989-3.345-0.459-4.903 0.039-0.113 0.077-0.227 0.116-0.341 0.929-2.724 2.63-4.878 5.509-5.688 1.943-0.547 4.222-0.276 5.984 0.711 1.861 1.043 3.077 2.746 3.729 4.732 0.922 2.805-0.2 5.531-1.976 7.668-0.077 0.093-0.153 0.185-0.23 0.277zm-7.657-31.402c2.806-5.006 10.573-0.642 7.772 4.356-2.806 5.006-10.573 0.642-7.772-4.356zm-3.281-18.47c3.262-5.821 12.294-0.747 9.037 5.065-3.262 5.821-12.294 0.747-9.037-5.065zm-4.63-25.623c3.849-6.869 14.506-0.881 10.663 5.976-3.849 6.869-14.507 0.882-10.663-5.976zm-0.416 16.398c-3.785 6.753-14.261 0.867-10.483-5.874 3.784-6.753 14.261-0.867 10.483 5.874zm-6.41 13.04c-2.871 5.122-10.819 0.657-7.953-4.457 2.871-5.123 10.819-0.658 7.953 4.457zm3.665 16.114c2.701 1.359 3.576 5.061 2.147 7.612-1.533 2.735-4.903 3.506-7.613 2.143-2.702-1.359-3.577-5.061-2.147-7.612 1.532-2.735 4.903-3.506 7.613-2.143zm6.319 39.375c-2.936 5.239-11.064 0.673-8.133-4.558 2.936-5.239 11.064-0.672 8.133 4.558zm30.789-17.287c-3.98 7.101-14.998 0.911-11.025-6.179 3.98-7.102 14.998-0.912 11.025 6.179zm7.01 23.118c-5.807 10.362-21.883 1.33-16.086-9.015 5.807-10.361 21.884-1.329 16.086 9.015z" fill="#f00" fill-rule="evenodd"></path>
                                        </svg>
                                    </figure>

                                    <!-- Inner tab content START -->
                                    <div class="tab-content mb-0 pb-0" id="course-pills-tabContent1">
                                        <!-- Inner content item START -->
                                        <div class="tab-pane fade show active" id="course-pills-tab01" role="tabpanel" aria-labelledby="course-pills-tab-01">
                                            <!-- Card START -->
                                            <div class="card p-2 pb-0 shadow">
                                                <div class="overflow-hidden h-xl-200px">
                                                    <img src="assets/images/about/13.jpg" class="card-img-top" alt="course image">
                                                    <div class="card-img-overlay d-flex p-3">
                                                        <!-- Video button and link -->
                                                        <div class="m-auto">
                                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                                <i class="fas fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <!-- Price and cart -->
                                                    <div class="row g-3">
                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">6 months</span>
                                                                    <h5 class="mb-0">$134</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">12 months</span>
                                                                    <h5 class="mb-0">$355</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">18 months</span>
                                                                    <h5 class="mb-0">$654</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card END -->
                                        </div>
                                        <!-- Inner content item END -->

                                        <!-- Inner content item START -->
                                        <div class="tab-pane fade" id="course-pills-tab02" role="tabpanel" aria-labelledby="course-pills-tab-02">
                                            <!-- Card START -->
                                            <div class="card p-2 pb-0 shadow">
                                                <div class="overflow-hidden h-xl-200px">
                                                    <img src="assets/images/about/11.jpg" class="card-img-top" alt="course image">
                                                    <div class="card-img-overlay d-flex p-3">
                                                        <!-- Video button and link -->
                                                        <div class="m-auto">
                                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                                <i class="fas fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <!-- Price and cart -->
                                                    <div class="row g-3">
                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">6 month</span>
                                                                    <h5 class="mb-0">$150</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">12 month</span>
                                                                    <h5 class="mb-0">$385</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Item -->
                                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                                <div>
                                                                    <!-- Badge -->
                                                                    <span class="badge text-bg-info mb-1">18 month</span>
                                                                    <h5 class="mb-0">$800</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card END -->
                                        </div>
                                        <!-- Inner content item END -->

                                        <!-- Inner content item START -->
                                        <div class="tab-pane fade" id="course-pills-tab03" role="tabpanel" aria-labelledby="course-pills-tab-03">
                                            <!-- Card START -->
                                            <div class="card p-2 shadow">
                                                <div class="overflow-hidden h-xl-200px">
                                                    <img src="assets/images/about/14.jpg" class="card-img-top" alt="course image">
                                                    <div class="card-img-overlay d-flex p-3">
                                                        <!-- Video button and link -->
                                                        <div class="m-auto">
                                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                                <i class="fas fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Card body -->
                                                <div class="card-body px-2">
                                                    <p class="mb-0"><span class="h6 mb-0 fw-bold me-1">Note:</span>Before you learning this video you need to first learn Beginner course</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Inner content item END -->
                                    </div>
                                    <!-- Inner tab content END -->

                                </div>
                                <!-- Right content END -->
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Outer content END -->

                <!-- Outer content START -->
                <div class="tab-pane fade" id="course-pills-tab2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="row">
                        <!-- Left content START -->
                        <div class="col-lg-6">
                            <!-- Title -->
                            <h3>Development</h3>
                            <p class="mb-3">Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.</p>
                            <h6 class="mt-4">What you’ll learn</h6>
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Create responsive, accessible, and beautiful layouts</li>
                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Course Videos &amp; Readings</li>
                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Manipulate the DOM with vanilla JS</li>
                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Master the command line interface</li>
                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Create your own Node modules</li>
                            </ul>
                        </div>
                        <!-- Left content END -->

                        <!-- Right content START -->
                        <div class="col-lg-6">
                            <!-- Card START -->
                            <div class="card p-2 pb-0 shadow">
                                <div class="overflow-hidden h-xl-200px">
                                    <img src="assets/images/about/14.jpg" class="card-img-top" alt="course image">
                                    <div class="card-img-overlay d-flex p-3">
                                        <!-- Video button and link -->
                                        <div class="m-auto">
                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Price and cart -->
                                    <div class="row g-3">
                                        <!-- Item -->
                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                <div>
                                                    <!-- Badge -->
                                                    <span class="badge text-bg-info mb-1">6 month</span>
                                                    <h5 class="mb-0">$134</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                <div>
                                                    <!-- Badge -->
                                                    <span class="badge text-bg-info mb-1">12 month</span>
                                                    <h5 class="mb-0">$355</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="col-sm-4 col-lg-6 col-xl-4">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i class="bi bi-cart3 fs-5"></i></a>
                                                <div>
                                                    <!-- Badge -->
                                                    <span class="badge text-bg-info mb-1">18 month</span>
                                                    <h5 class="mb-0">$654</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Right content END -->
                    </div> <!-- Row END -->
                </div>
                <!-- Outer content END -->

                <!-- Outer content START -->
                <div class="tab-pane fade" id="course-pills-tab3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                    <div class="row g-4">
                        <!-- Left content START -->
                        <div class="col-lg-6">
                            <!-- Title -->
                            <h3>Data Science</h3>
                            <p class="mb-3">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.</p>

                            <!-- Rating -->
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="me-3 mb-0">4.0</h2>
                                <div>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                    </ul>
                                    <p class="mb-0">Review from our students </p>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-3">
                                <a href="#" class="btn btn-success">Free trial</a>
                                <a href="#" class="btn btn-danger">Buy course</a>
                            </div>

                        </div>
                        <!-- Left content END -->

                        <!-- Right content START -->
                        <div class="col-lg-6">
                            <!-- Card START -->
                            <div class="card p-2 shadow">
                                <div class="overflow-hidden rounded-3 h-xl-200px">
                                    <img src="assets/images/about/15.jpg" class="card-img rounded-3" alt="course image">
                                    <div class="card-img-overlay d-flex p-3">
                                        <!-- Video button and link -->
                                        <div class="m-auto">
                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Right content END -->
                    </div>
                </div>
                <!-- Outer content END -->

                <!-- Outer content START -->
                <div class="tab-pane fade" id="course-pills-tab4" role="tabpanel" aria-labelledby="course-pills-tab-4">
                    <div class="row g-4">
                        <!-- Left content START -->
                        <div class="col-lg-6">
                            <!-- Title -->
                            <h3>Marketing</h3>
                            <p class="mb-3">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.</p>

                            <!-- Rating -->
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="me-3 mb-0">4.0</h2>
                                <div>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                    </ul>
                                    <p class="mb-0">Review from our students </p>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-3">
                                <a href="#" class="btn btn-success">Free trial</a>
                                <a href="#" class="btn btn-danger">Buy course</a>
                            </div>

                        </div>
                        <!-- Left content END -->

                        <!-- Right content START -->
                        <div class="col-lg-6">
                            <!-- Card START -->
                            <div class="card p-2 shadow">
                                <div class="overflow-hidden rounded-3 h-xl-200px">
                                    <img src="assets/images/about/12.jpg" class="card-img rounded-3" alt="course image">
                                    <div class="card-img-overlay d-flex p-3">
                                        <!-- Video button and link -->
                                        <div class="m-auto">
                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Right content END -->
                    </div>
                </div>
                <!-- Outer content END -->

                <!-- Outer content START -->
                <div class="tab-pane fade" id="course-pills-tab5" role="tabpanel" aria-labelledby="course-pills-tab-5">
                    <div class="row g-4">
                        <!-- Left content START -->
                        <div class="col-lg-6">
                            <!-- Title -->
                            <h3>Finance</h3>
                            <p class="mb-3">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed.</p>

                            <!-- Rating -->
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="me-3 mb-0">4.0</h2>
                                <div>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                    </ul>
                                    <p class="mb-0">Review from our students </p>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-3">
                                <a href="#" class="btn btn-success">Free trial</a>
                                <a href="#" class="btn btn-danger">Buy course</a>
                            </div>

                        </div>
                        <!-- Left content END -->

                        <!-- Right content START -->
                        <div class="col-lg-6">
                            <!-- Card START -->
                            <div class="card p-2 shadow">
                                <div class="overflow-hidden rounded-3 h-xl-200px">
                                    <img src="assets/images/about/11.jpg" class="card-img rounded-3" alt="course image">
                                    <div class="card-img-overlay d-flex p-3">
                                        <!-- Video button and link -->
                                        <div class="m-auto">
                                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="course-video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Right content END -->
                    </div>
                </div>
                <!-- Outer content END -->
            </div>
            <!-- Outer tabs contents END -->

        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="pt-5 pb-5 position-relative">
        <div class="container position-relative">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-3">What Our Students Say</h2>
                    <p class="lead">Don't just take our word for it - hear from some of our amazing students.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/images/avatar/01.jpg" class="rounded-circle me-3" width="60" alt="">
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">Graphic Design Student</small>
                            </div>
                        </div>
                        <p class="mb-0">"The courses at Eduport completely transformed my career. The instructors are knowledgeable and the platform is so easy to use."</p>
                        <div class="text-warning mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/images/avatar/02.jpg" class="rounded-circle me-3" width="60" alt="">
                            <div>
                                <h6 class="mb-0">Michael Chen</h6>
                                <small class="text-muted">Data Science Student</small>
                            </div>
                        </div>
                        <p class="mb-0">"I was able to land my dream job after completing the Data Science program. The hands-on projects were incredibly valuable."</p>
                        <div class="text-warning mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/images/avatar/03.jpg" class="rounded-circle me-3" width="60" alt="">
                            <div>
                                <h6 class="mb-0">David Wilson</h6>
                                <small class="text-muted">Web Development Student</small>
                            </div>
                        </div>
                        <p class="mb-0">"The curriculum is well-structured and the community support is fantastic. I learned more in 3 months than I did in 2 years of college."</p>
                        <div class="text-warning mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'layouts/footer.php'; ?>
</body>