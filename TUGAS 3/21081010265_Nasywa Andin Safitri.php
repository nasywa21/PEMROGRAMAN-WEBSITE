<!DOCTYPE html>
<html lang="en">

<head>
    <title>BIODATA</title>
    <link rel="stylesheet" type="text/css" href="21081010265_Nasywa Andin Safitri.css">
</head>
<?php
    $nama = "Nasywa Andin Safitri";
    $npm = 21081010265;
    $tempat_lahir = "Surabaya";
    $tanggal_lahir = date('Y-m-d', strtotime('2002-10-21'));
    $jurusan = "Informatika";
    $universitas = "UPN Veteran Jawa Timur";
    $agama = "Islam";
    $alamat = "Pabean Asri, Sedati, Sidoarjo";
    $email = "nasywaandin10@gmail.com";
    $instagram = "nasywaandin";
    $whatsapp = "082142055912";
    $linkedin = "nasywaandin";
    $birthDate = new \DateTime($tanggal_lahir);
    $today = new \DateTime("today");
    $y = $today->diff($birthDate)->y;
?>

<body>
    <div class="loyang">
        <div class="isi">
            <div class="foto"><img src="foto biodata.jpg" alt="drop ur image"></div>
            <table cellspacing="20px">
                <tr colspan="2">
                    <td colspan="2" class="judul"><?php echo "BIODATA DIRI" ?><br><?php echo "___________" ?><br><br></td>

                </tr>
                <tr colspan="2">
                    <td colspan="2" class="sub"> <?php echo "Personal Detail : " ?><br><br></td>
                </tr>
                <tr>
                    <td class="satu"> <?php echo "Nama" ?> </td>
                    <td class="dua b"> <?php echo " : " ?>&nbsp; <span class="nama"><?php echo $nama ?></span></td>
                </tr>
                <tr>
                    <td class="satu"> <?php echo "NPM" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $npm ?></td>
                </tr>
                <tr>
                <td class="satu"> <?php echo "Tempat Tanggal Lahir" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $tempat_lahir .", ". $tanggal_lahir . ", " . $y . " tahun"?></td>
                </tr>
                <tr>
                <td class="satu"> <?php echo "Jurusan" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $jurusan?></td>
                </tr>
                <tr>
                  <td class="satu"> <?php echo "Univeritas" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $universitas ?></td>
                </tr>
                <tr>
                    <td class="satu"> <?php echo "Agama" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $agama ?></td>
                </tr>
                <tr>
                    <td class="satu"> <?php echo "Alamat" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $alamat ?></td>
                </tr>
            </table>
            <table cellspacing="20px">
                <tr>
                    <td colspan="2" class="sub"><br> Contact Detail :<br></td>
                </tr>
                <tr>
                <td class="satu"> <?php echo "Email" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $email ?></td>
                </tr>
                <tr>
                <td class="satu"> <?php echo "Instagran" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $instagram ?></td>
                </tr>
                <tr>
                    <td class="satu"> <?php echo "WhatsAp" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $whatsapp ?></td>
                </tr>
                <tr>
                <td class="satu"> <?php echo "LinkedIn" ?> </td>
                    <td class="dua"> <?php echo " : " ?>&nbsp; <?php echo $linkedin ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>