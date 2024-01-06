<?php require_once "application/controller/produk.php" ?>

<html lang="id">
    <head>
        <title>Detail Produk UNHI Travel and Tours</title>
        <style>
            img {
                width: 25%;
            }
            body {
                background-color: yellow;
            }
        </style>
    </head>
<body>
    <?php $key_produk = $_GET['key_produk']; ?>
    <table width="100%" border="0">
        <tbody>
             <tr>
                <td align="center">
                <img src="upload/produk/<?php echo $data_produk[$key_produk]['gambar']?>"> 
                </td>
             </tr>
             <tr>
                <td align="center">
                <h1><?php echo $data_produk[$key_produk]['deskripsi']?></h1> 
                </td>
             </tr>
             <tr>
                <td align="center">
                    <h1><?php echo $data_produk[$key_produk]['hari'] ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <h2>Rp.<?php echo number_format($data_produk[$key_produk]['harga']) ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <h3>Stok : <?php echo number_format($data_produk[$key_produk]['stok']) ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <h3><?php echo $data_produk[$key_produk]['keterangan'] ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <h3><?php echo $data_produk[$key_produk]['jam booking'] ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <h1><?php echo $data_produk[$key_produk]['no wa'] ?><h1>

                </td>
             </tr>
             <tr>
                <td align="center">
                    <a href="index.php">Kembali ke Beranda</td>

                </td>
             </tr>
        </tbody>
    
   
</table>
</body>

</html>