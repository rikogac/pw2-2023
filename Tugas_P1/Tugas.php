<?php
$buah1 = [
    'id'=> '18070',
    'nama' => 'Semangka',
    'warna' => 'Merah',
    'Stock' => '2',
    'Harga' => 'Rp25000', 
    'Deskripsi' => 'Buah nya manis, warnanya Merah,'
];
$buah2 = [
    'id'=> '18070',
    'nama' => 'Pepaya',
    'warna' => 'Orange',
    'Stock' => '3',
    'Harga' => 'Rp15000', 
    'Deskripsi' => 'Buah nya manis, warnanya Orange,'
];
$buah3 = [
    'id'=> '18070',
    'nama' => 'Kiwi',
    'warna' => 'Hijau',
    'Stock' => '4',
    'Harga' => 'Rp10000', 
    'Deskripsi' => 'Buah nya Asem, warnanya Hijau,'
];
$buah5 = [
    'id'=> '18070',
    'nama' => 'Belimbing wuluh',
    'warna' => 'Hijau',
    'Stock' => '100',
    'Harga' => 'Rp150000', 
    'Deskripsi' => 'Buah nya kecut, warnanya Hijau,'
];

$data = [$buah1, $buah2, $buah3, $buah4, $buah5]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($data as $row){ ?>
        <tr>
            <td><?= $row ['id'];?></td>
            <td><?= $row ['nama'];?></td>
            <td><?= $row ['warna'];?></td>
            <td><?= $row ['Stock'];?></td>
            <td><?= $row ['Harga'];?></td>
            <td><?= $row ['Deskripsi'];?></td>
        </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>