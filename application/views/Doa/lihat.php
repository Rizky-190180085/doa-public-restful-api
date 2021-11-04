
<!DOCTYPE html>
<html lang="en" dir="ltr" style="">
<head>
  <meta charset="utf-8">
  <title><?= $Hasil['doa']; ?></title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/style/style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/bg/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap" rel="stylesheet"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="contact-section">
    <br><br><br>
    <form class="contact-form">
      <br><br><br>

      <input type="hidden" name="id" value="<?= $Hasil['id']; ?>">

      <input type="text" name="doa" title="Nama Doa" class="contact-form-text" placeholder="Nama Doa" value="<?= $Hasil['doa']; ?>" oncontextmenu="return false" onmousedown="return false">

      <input type="text" name="ayat" title="Ayat" class="contact-form-text" placeholder="Ayat" value="<?= $Hasil['ayat']; ?>" oncontextmenu="return false" onmousedown="return false">


      <input type="text" name="latin" title="Latin" class="contact-form-text" placeholder="Latin" value="<?= $Hasil['latin']; ?>" oncontextmenu="return false" onmousedown="return false">

      <input type="text" name="artinya" title="Artinya" class="contact-form-text" placeholder="Artinya" value="<?= $Hasil['artinya']; ?>" oncontextmenu="return false" onmousedown="return false">



    <br>
    <a href="<?= base_url(); ?>index.php"><font class="contact-form-btn" value="KEMBALI" style="margin-right: 10px;" size="2">KEMBALI</font></a>

  </form><br><br>
</div>
<script src="<?= base_url(); ?>assets/style/app.js"></script>


</body>

</html>
