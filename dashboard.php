<?php
session_start();
require "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}

// Count total students
$sql = "SELECT COUNT(*) AS total FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_students = $result['total'];

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-4">

<div class="alert alert-success">
<h4>Welcome, <?php echo $_SESSION['user_name']; ?> 👋</h4>
<p>You have successfully logged into the system.</p>
</div>

<div class="card">
<div class="card-body">

<h5>System Features</h5>

<ul>
<li>Student registration</li>
<li>User login authentication</li>
<li>Session management</li>
<li>Dynamic student list</li>
<li>Multi-page navigation</li>
</ul>

</div>
</div>


<!-- Display total students * -->
<div class="row">

<div class="col-md-4">

<div class="card bg-primary text-white">
<div class="card-body">

<h5>Total Students</h5>
<h2><?php echo $total_students; ?></h2>

</div>
</div>

</div>

</div>
</div>

</body>
</html>