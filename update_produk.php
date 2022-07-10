<?php 
include('main/conn.php');
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$id = $_POST['id'];

$sql = "UPDATE `produk` SET  `nama`='$nama' , `harga`= '$harga', `stok`='$stok',  `kategori`='$kategori' WHERE id='$id' ";
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