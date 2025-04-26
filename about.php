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



</body>

<?php include 'layouts/footer.php'; ?>