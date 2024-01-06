<?php require_once "application/controller/produk.php" ?>

<html lang="id">
<head>
    <title>Unhi Travel Shop Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
     
    <style>
        body {
            background-color: yellow;
        }
    </style>

</head>
<body>
    <table width="100%" border="1">
        <thead>
            <tr>
               <th>No</th> 
               <th>Gambar</th> 
               <th>Deskripsi</th>
               <th>Hari</th> 
               <th>Harga</th> 
               <th>Stok</th> 
               <th>Keterangan</th>
               <th>Jam booking</th>  
               <th>No Wa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data_produk as $key => $row) { 
                $no = $key + 1 ?>
            <tr>
                <td><?php echo $no ?>.</td>
                <td><img src="upload/produk/<?php echo $row['gambar'] ?>" width="200"></td>
                <td><?php echo $row['deskripsi'] ?></td>
                <td><?php echo $row['hari'] ?></td>
                <td>
                    <?php if($row['harga'] > 300000) {
                        $harga_sebelum_diskon = $row['harga'];
                        $potongan = $row['harga'] * $diskon;
                        $harga_sekarang = $row['harga'] - $potongan;
                        echo '<del>'.number_format($harga_sebelum_diskon).'</del>'.number_format($harga_sekarang);
                    } else {
                        $harga = number_format($row['harga']);
                        echo $harga;

                    }?>
               
            </td>
                <td><?php echo $row['stok'] == 0 ? 'sold out' : $row['stok'] ?></td>
                <td><?php echo read_more($row['keterangan']) ?></td>
                <td><?php echo $row['jam booking'] ?></td>
                <td><?php echo $row['no wa'] ?></td>
                <td><a href="produk_detail.php?key_produk=<?php echo $key ?>">Detail</a></td>
             </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html> 