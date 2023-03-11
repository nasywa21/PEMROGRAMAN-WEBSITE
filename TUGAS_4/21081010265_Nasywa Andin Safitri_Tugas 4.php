<!DOCTYPE html>
<html lang="en">
<head>
    <title>TUGAS 4</title>
</head>
<body>
    <?php 

    function connection() {
       // membuat konekesi ke database system
       $dbServer = 'localhost';
       $dbUser = 'root';
       $dbPass = '';
       $dbName = "classicmodels";

       $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

       if(! $conn) {
	    die('Koneksi gagal: ' . mysqli_error());
       }
       //memilih database yang akan dipakai
       mysqli_select_db($conn,$dbName);
	
       return $conn;
    }

    ?>

    <h1 align="center">TABEL EMPLOYEE</h1>
    <table border="1" align="center">
        <thead>
            <tr">
                <th>Employee Number</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Extension</th>
                <th>Email</th>
                <th>Office Code</th>
                <th>Reports To</th>
                <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $query = "SELECT * FROM employees";
             $result = mysqli_query(connection(),$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
             <tr>
                <td><?php echo $data['employeeNumber']; ?></td>
                <td><?php echo $data['lastName']; ?></td>
                <td><?php echo $data['firstName']; ?></td>
                <td><?php echo $data['extension']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['officeCode']; ?></td>
                <td><?php echo $data['reportsTo']; ?></td>
                <td><?php echo $data['jobTitle']; ?></td>
             </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    
    <h1 align="center">TABEL PRODUCT LINES</h1>
    <table border="1" align="center">
        <thead>
            <tr">
                <th>Product Line</th>
                <th>Text Description</th>
                <th>HTML Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $query = "SELECT * FROM productlines";
             $result = mysqli_query(connection(),$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
             <tr>
                <td><?php echo $data['productLine']; ?></td>
                <td><?php echo $data['textDescription']; ?></td>
                <td><?php echo $data['htmlDescription']; ?></td>
                <td><?php echo $data['image']; ?></td>
             </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>