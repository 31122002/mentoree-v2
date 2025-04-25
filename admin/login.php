<?php
session_start();
$conn = new mysqli("localhost", "root", "", "mentoree");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $error_message = '';

    if (empty($email) || empty($password)) {
        $error_message = 'Both email and password are required.';
    }

    if (empty($error_message)) {
        // Check if user exists
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                // Password is correct, start session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;
                $_SESSION['success'] = 'Login successful!';
                header('Location: dashboard.php');
                exit();
            } else {
                $_SESSION['error'] = 'Invalid email or password.';
            }
        } else {
            $_SESSION['error'] = 'User not found.';
        }

        $stmt->close();
    } else {
        $_SESSION['error'] = $error_message;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mentoree</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../public/assets/style.css">
    <link rel="shortcut icon" href="../public/assets/images/small_logo.png" />
    <link rel="stylesheet" href="assets/datatable_assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatable_assets/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/datatable_assets/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/summernote/summernote-bs4.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">

                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success text-center w-100">
                            <?php echo $_SESSION['success']; ?>
                            <?php unset($_SESSION['success']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger text-center w-100">
                            <?php echo $_SESSION['error']; ?>
                            <?php unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">

                            <div class="row">
                                <div class="brand-logo col-6">
                                    <img src="../public/assets/images/logo-2.png" style="width: 150px;">
                                </div>
                                <div class="col-6 mt-3">
                                    <h4>Hello! Let’s get started</h4>
                                    <h6 class="font-weight-light">Sign in to continue.</h6>
                                </div>
                            </div>

                            <!-- Tabs -->
                            <div class="container mt-3">
                                <ul class="nav nav-pills d-flex justify-content-evenly mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item col-6 text-center" role="presentation">
                                        <button class="nav-link active" id="pills-mentee-tab" data-bs-toggle="pill" data-bs-target="#pills-mentee" type="button" role="tab" aria-controls="pills-mentee" aria-selected="true">I'm a Mentee</button>
                                    </li>
                                    <li class="nav-item col-6 text-center" role="presentation">
                                        <button class="nav-link" id="pills-mentor-tab" data-bs-toggle="pill" data-bs-target="#pills-mentor" type="button" role="tab" aria-controls="pills-mentor" aria-selected="false">I'm a Mentor</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <!-- Mentee Tab -->
                                    <div class="tab-pane fade show active" id="pills-mentee" role="tabpanel" aria-labelledby="pills-mentee-tab">
                                        <form class="pt-3" action="" method="POST">
                                            <input type="hidden" name="role" value="mentee"> <!-- Hidden field to distinguish role -->
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>" class="form-control form-control-lg" id="email" placeholder="Username">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-gradient-primary btn-lg w-100 font-weight-medium auth-form-btn">
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Mentor Tab -->
                                    <div class="tab-pane fade" id="pills-mentor" role="tabpanel" aria-labelledby="pills-mentor-tab">
                                        <form class="pt-3" action="" method="POST">
                                            <input type="hidden" name="role" value="mentor"> <!-- Hidden field to distinguish role -->
                                            <div class="form-group">
                                                <label for="email_mentor">Email:</label>
                                                <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>" class="form-control form-control-lg" id="email_mentor" placeholder="Username">
                                            </div>

                                            <div class="form-group">
                                                <label for="password_mentor">Password:</label>
                                                <input type="password" name="password" class="form-control form-control-lg" id="password_mentor" placeholder="Password">
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-gradient-primary btn-lg w-100 font-weight-medium auth-form-btn">
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- tab-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>