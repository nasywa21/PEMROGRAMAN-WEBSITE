<?php 
include ('Tugas5_koneksi.php'); 

$status = '';
$result = '';

//melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['customerNumber'])) {
    //query SQL
    $customerNumber_upd = $_GET['customerNumber'];
    $query = "DELETE FROM customers WHERE customerNumber = '$customerNumber_upd'"; 
    
    //eksekusi query
    $result = mysqli_query(connection(),$query);
    
    if ($result) {
      $status = 'ok(1)';
    }
    else{
      $status = 'err(1)';
    }
    
    //redirect ke halaman lain
    header('Location: Tugas5_index.php?status='.$status);
  }

  if (isset($_GET['productCode'])) {
    //query SQL
    $productCode_upd = $_GET['productCode'];
    $query = "DELETE FROM products WHERE productCode = '$productCode_upd'"; 
    
    //eksekusi query
    $result = mysqli_query(connection(),$query);
    
    if ($result) {
      $status = 'ok(2)';
    }
    else{
      $status = 'err(2)';
    }

    //redirect ke halaman lain
    header('Location: Tugas5_index.php?status='.$status);
  }   
}
?>