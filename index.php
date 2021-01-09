<?php

function rupiah($angka)
{

  $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
  return $hasil_rupiah;
}

$produk = [
  ['Redmi 4A Ram 3 Rom 32', 1100000, 'redmi4a.jpg'],
  ['Samsung S20 Plus Ram 8 Rom 128', 10800000, 'samsung s20+.jpg'],
  ['Redmi Note 8 Ram 4 Rom 64', 2200000, 'redminote8.jpg'],
  ['Oppo Reno 4 Pro Ram 8 Rom 256', 7800000, 'opporeno4pro.jpg'],
  ['Samsung Galaxy A01 Ram 2 Rom 16', 1100000, 'samsunga01.jpg'],
  ['One Plus 3T Ram 6 Rom 64', 2200000, 'oneplus 3t.jpg'],
  ['Realme C11 Ram 2 Rom 32', 14500000, 'realmec11.jpg'],
  ['Huawei P40 Ram 8 Ram 128', 7800000, 'huaweip40.jpg'],
  ['iPhone 11 Pro Max Ram 4 Rom 256', 21500000, 'iphone11.jpg'],
  ['Huawei Honor 9X Ram 4 Rom 128', 5200000, 'huawei honor 9x.jpg'],
  ['Asus ROG Phone 3 Ram 8 Rom 128', 10500000, 'rog phone.jpg'],
  ['Vivo Y30 Ram 4 Rom 128', 2500000, 'vivo y30.jpg'],
];


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Roboto -->
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="assets/fontawesomepro/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <title>Hello, world!</title>
</head>

<body>
  <?php include('layout/header.php') ?>
  <div class="main">
    <div class="container">
      <div class="titleSection">
        <h4 class="title">Rekomendasi Untuk Kamu</h4>
      </div>
      <div class="card-columns">
        <?php foreach ($produk as $item) { ?>
          <div class="card" id="divProduct">
            <div class="card-body">
              <div class="card-img">
                <img src="img/<?= $item[2] ?>" alt="" height="200px" width="200px">
              </div>
              <div class="card-title">
                <section class="section-title">
                  <?= $item[0] ?>
                </section>
              </div>
              <div class="card-price">
                <section class="section-price">
                  <?= Rupiah($item[1]) ?>
                </section>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="pagination-section">
        <div class="pagination">
          <a href="#">&laquo;</a>
          <a class="active" href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">6</a>
          <a href="#">&raquo;</a>
        </div>
      </div>
    </div>
  </div>
  <?php include('layout/footer.php') ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace()
  </script>
</body>

</html>