<?php 
include('main/conn.php');
$pemasukan = $_POST['pemasukan'];
$pengeluaran = $_POST['pengeluaran'];
$date = $_POST['date'];
// $kategori = $_POST['kategori'];
$id = $_POST['id'];

$sql = "UPDATE `keuangan` SET  `pemasukan`='$pemasukan' , `pengeluaran`= '$pengeluaran', `date`='$date' WHERE id='$id' ";
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