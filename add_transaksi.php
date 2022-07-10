<?php 
include('main/conn.php');
$pemasukan = $_POST['pemasukan'];
$pengeluaran = $_POST['pengeluaran'];
$date = $_POST['date'];
// $kategori = $_POST['kategori'];

$sql = "INSERT INTO `keuangan` (`pemasukan`,`pengeluaran`,`date`) values ('$pemasukan', '$pengeluaran', '$date' )";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>