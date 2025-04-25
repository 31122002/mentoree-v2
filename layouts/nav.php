<nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="dashboard.php">
            <img src="public/assets/images/logo.png" alt="Mentoree Logo" style="width: 150px;">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main Navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="coursesDropdown" role="button" data-bs-toggle="dropdown">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="courses.php">Browse Courses</a></li>
                        <li><a class="dropdown-item" href="my-courses.php">My Courses</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="mentorsDropdown" role="button" data-bs-toggle="dropdown">
                        Mentors
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mentors.php">Find a Mentor</a></li>
                        <li><a class="dropdown-item" href="become-mentor.php">Become a Mentor</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="resources.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="community.php">Contact</a>
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
                        <img src="public/<?php echo $profile_picture; ?>" class="rounded-circle" width="40" height="40" alt="Profile">
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