<?php
    include "Tugas5_koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TUGAS 5</title>
</head>
<body>
  <div class="container">
    <div class="header" id="customers">
      <div class="text"><h1 align="center">CUSTOMER TABLE</h1></div>
      <?php 
      //mengecek apakah proses update dan delete sukses/gagal
      if (@$_GET['status']!==NULL) {
        $status = $_GET['status'];
        if ($status=='ok1') {
          echo '<div class="sukses">Data Customers berhasil di-update</div>';
        }
        elseif($status=='err1'){
          echo '<div class="danger">Data Customers gagal di-update</div>';
        }
        elseif($status=='insc-ok'){
          echo '<div class="sukses">Data Customers berhasil di-tambahkan</div>';
        }
        elseif($status=='insc-err'){
          echo '<div class="danger">Data Customers gagal di-tambahkan</div>';
        }
      }
      ?>
      <a href= "Tugas5_insert.php?customer=1" class="tambah">TAMBAH DATA</a>
    </div>
    <table border="1" align="center">
      <thead>
        <tr>
          <th>Customer Number</th>
          <th>Customer Name</th>
          <th>Contact Last Name</th>
          <th>Contact First Name</th>
          <th>Phone</th>
          <th>Adress Line 1</th>
          <th>Adress Line 2</th>
          <th>City</th>
          <th>State</th>
          <th>Postal Code</th>
          <th>Country</th>
          <th>Sales Rep Employee Number</th>
          <th>Credit Limit</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = "SELECT * FROM customers";
        $result = mysqli_query(connection(),$query);
        ?>
        <?php while($data = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?php echo $data['customerNumber'];  ?></td>
            <td><?php echo $data['customerName'];  ?></td>
            <td><?php echo $data['contactLastName'];  ?></td>
            <td><?php echo $data['contactFirstName'];  ?></td>
            <td><?php echo $data['phone'];  ?></td>
            <td><?php echo $data['addressLine1'];  ?></td>
            <td><?php echo $data['addressLine2'];  ?></td>
            <td><?php echo $data['city'];  ?></td>
            <td><?php echo $data['state'];  ?></td>
            <td><?php echo $data['postalCode'];  ?></td>
            <td><?php echo $data['country'];  ?></td>
            <td><?php echo $data['salesRepEmployeeNumber'];  ?></td>
            <td><?php echo $data['creditLimit'];  ?></td>
            <td> <a href=<?php echo "Tugas5_update.php?customerNumber=" . $data['customerNumber']; ?> class="update">UPDATE</a></td>
            <td> <a href=<?php echo "Tugas5_delete.php?customerNumber=" . $data['customerNumber']; ?> class="delete">DELETE</a></td>
          </tr>
          <?php endwhile ?>
        </tbody>
      </table>
      
      <div class="header" id="products">
        <div class="text"><h1 align="center">PRODUCT TABLE</h1></div>
        <?php 
        //mengecek apakah proses update dan delete sukses/gagal
        if (@$_GET['status']!==NULL) {
          $status = $_GET['status'];
          if ($status=='ok2') {
            echo '<div class="sukses">Data Product berhasil di-update</div>';
          }
          elseif($status=='err2'){
            echo '<div class="danger">Data Product gagal di-update</div>';
          }
          elseif($status=='insp-ok'){
            echo '<div class="sukses">Data Product berhasil di-tambahkan</div>';
          }
          elseif($status=='insp-err'){
            echo '<div class="danger">Data Product gagal di-tambahkan</div>';
          }
        }
        ?>
        <a href="Tugas5_insert.php?product=1" class="tambah">TAMBAH DATA</a>
      </div>
      <table border="1" align="center">
        <thead>
          <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Quantity In Stock</th>
            <th>Buy Price</th>
            <th>MSRP</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $query = "SELECT * FROM products";
          $result = mysqli_query(connection(),$query);
          ?>
          <?php while($data = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?php echo $data['productCode'];  ?></td>
              <td><?php echo $data['productName'];  ?></td>
              <td><?php echo $data['productLine'];  ?></td>
              <td><?php echo $data['productScale'];  ?></td>
              <td><?php echo $data['productVendor'];  ?></td>
              <td><?php echo $data['productDescription'];  ?></td>
              <td><?php echo $data['quantityInStock'];  ?></td>
              <td><?php echo $data['buyPrice'];  ?></td>
              <td><?php echo $data['MSRP'];  ?></td>
              <td> <a href=<?php echo "Tugas5_update.php?productCode=" . $data['productCode']; ?> class="update">UPDATE</a></td>
              <td> <a href=<?php echo "Tugas5_delete.php?productCode=" . $data['productCode']; ?> class="delete">DELETE</a></td>
            </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
</body>
</html>