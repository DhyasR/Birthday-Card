<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Custom di Deka Tutorial</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://dekatutorial.github.io/crd/s.js"></script>
  <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" />
</head>
<body>
  <script>dt()</script>
  <div class="ctnr">
    <div class="lv">
      <img src="https://dekatutorial.github.io/crd/lv.svg" />
      <p>Klik Love-nya</p>
    </div>
    <div class="ctn">
      <button class="btn next">[ Lanjut ]</button>
      <button class="btn send" disabled"></button>
    </div>
  </div>
  
  <script>
    konten = [
      {
        gambar: "gambar1.jpg",
        ucapan: "Barakallah Fii Umrik, yah",
      },
      {
        gambar: "gambar2.jpg",
        ucapan: "Semoga Panjang Umur, Lancar rezekinya & Bahagia selalu",
      },
      {
        gambar: "gambar3.jpg",
        ucapan: "Semoga tahun ini menjadi yang lebih baik dari tahun sebelumnya",
      },
      {
        gambar: "gambar4.jpg",
        ucapan: "Selalu dalam lindungan Allah SWT dimanapun ayah berada",
      },
      {
        gambar: "gambar5.jpg",
        ucapan: "from : The Bambang's S.",
      },
    ];
  
    musik = "musik.mp3";
  
    DekaTutorial(konten, musik);
  </script>
</body>
</html>
