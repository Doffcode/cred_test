<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login Page</title>
  </head>
  <body>

<?php 
session_start();

if(isset($_POST['login']))
{
    // Prevent undefined index + basic sanitization
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if($username === 'Robin' && $password === '1234')
    {
        $_SESSION['activeUser'] = $username;
        header('Location: dashboard.php');
        exit(); // important after header redirect
    }
    else
    {
        echo "<script>
                alert('Wrong username or password');
                window.location='index.php';
              </script>";
        exit();
    }
}
?>

<div class="container mt-4">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" id="username" 
                   class="form-control" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" name="password" id="password" 
                   class="form-control" placeholder="Enter password" required>
        </div>

        <div class="mb-4 float-end">
            Don't have an account? <a href="registration.php">Register Here</a>
        </div>

        <button type="submit" name="login" class="btn btn-primary mt-4">
            Submit
        </button>
    </form>
</div>

<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200" class="card-img-top" alt="Random image">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
