<?php include('main/conn.php');
$id = $_POST['id'];
$sql = "SELECT * FROM keuangan WHERE id='$id' LIMIT 1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>
