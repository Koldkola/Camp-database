php
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['loggedin'] = true;
    header('Location: employee_dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Manager Login</h2>
  <form method="POST">
    <button type="submit">Login</button>
  </form>
</body>
</html>
