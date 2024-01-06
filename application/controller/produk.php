<?php
   $diskon = 0.3; // artinya diskon 30%
   $data_produk = array(
    array(
        'gambar' => 'buyannn.png',
        'deskripsi' => 'Danau buyan',
        'hari' => 'senin',
        'harga' => '400000',
        'stok' => '5',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '09.00',
        'no wa' => '08xxxxxxxx'
    ),
    array(
        'gambar' => 'tanahlot2.png',
        'deskripsi' => 'Pura Tanah Lot',
        'hari' => 'selasa',
        'harga' => '430000',
        'stok' => '3',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '07.00',
        'no wa' => '08xxxxxxxx'
    ),
    array(
        'gambar' => 'pandawa.png',
        'deskripsi' => 'Pantai Pandawa',
        'hari' => 'rabu',
        'harga' => '440000',
        'stok' => '6',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '07.30',
        'no wa' => '08xxxxxxxx'
    ),
    array(
        'gambar' => 'sangeh1.png',
        'deskripsi' => 'Sangeh Monkey Forest',
        'hari' => 'kamis',
        'harga' => '420000',
        'stok' => '5',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '07.40',
        'no wa' => '08xxxxxxxx'
    ),
    array(
        'gambar' => 'mekepung4.png',
        'deskripsi' => 'Mekepung',
        'hari' => 'jumat',
        'harga' => '410000',
        'stok' => '2',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '08.00',
        'no wa' => '08xxxxxxxx'
    ),
    array(
        'gambar' => 'lovina.png',
        'deskripsi' => 'lovina beach',
        'hari' => 'sabtu',
        'harga' => '1000000',
        'stok' => '1',
        'keterangan' => 'bus serta tour guide',
        'jam booking' => '07.00',
        'no wa' => '08xxxxxxxx'
    ),  
    );

    function read_more($keterangan) {
        // kalau bisa kondisi if, akan mendapatkan nilai
        return substr($keterangan, 0,200).'';

    }
    
?>