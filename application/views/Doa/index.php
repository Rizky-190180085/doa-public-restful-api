<!DOCTYPE html>
<html onclick="play()" onmouseover="play()" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>:: QUIZ Public RESTful API ::</title>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/bg/logo.png">

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <?php if ($this->session->flashdata('flash')) : ?>
  <?php endif; ?>

  <link rel="stylesheet" href="<?= base_url(); ?>assets/style/bootstrap.min.css">
  <script src="<?= base_url(); ?>assets/style/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/style/bootstrap.min.js"></script>
  <link href='<?= base_url(); ?>assets/font/megrim.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/style/style2.css">

</head>

<body oncontextmenu='return false' onmousedown='return false'>
  <script>function play() { var audio = document.getElementById("lagu"); audio.play(); audio.loop = true;}</script>

  <audio id="lagu" src="<?= base_url(); ?>assets/music/Maula Ya Salli Ft Sami Yusuf Qasida Burda Shareef.mp3" autoplay loop></audio>

  <div class="full-screen">
    <video src="<?= base_url(); ?>assets/bg/video.mp4" autoplay muted loop></video>

    
    <br><br>
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6"><h2><b><font face='megrim' style="text-shadow: black 3px 4px 3px;">DAFTAR DOA ISLAMI</font></b></h2></div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Doa</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach ($Hasil as $hsl) : ?>
          <?php
          echo"
          <td>$no</td>
          <td>$hsl[doa]</td>
          ";
          ?>
          <td style='width: 200px;'>
            <a href="<?= base_url(); ?>doa/lihat/<?= $hsl['id']; ?>" class="btn btn-sm manage">Lihat Doa</a>
          </td>

        </tr>
        <?php $no++; endforeach; ?>


    </tbody>
  </table>
</div> 
<br><br>

</div>

<script src="<?= base_url(); ?>assets/style/javascript.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>
</body>
</html>                                                                 