<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail - Login System</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body class="bg-secondary-subtle">
    <div class="container d-flex vh-100 align-items-center justify-content-center">
        <div class="card w-25 shadow-sm">
            <div class="card-body">
                <h4 class="card-title text-center">Retail Application</h4>
                <hr>
                <?php
                // Periksa jika pesan error ada di session
                if (isset($_SESSION['pesan'])) {
                    // Tampilkan pesan error
                    echo '<div class="text-center text-danger fs-6">' . $_SESSION['pesan'] . '</div>';
                    // Hapus pesan setelah ditampilkan
                    unset($_SESSION['pesan']);
                }
                ?>
                <form action="login.php" method="POST">
                    <div class="mb-2">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="mb-2">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary py-3">Login</button>
                    </div>
                    <div class="register-link">
                <p>Don't have an account?
                    <a href="register.php">Register</a>
                </p>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>