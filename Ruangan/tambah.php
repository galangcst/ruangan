<?php 
  include('function.php');
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .kotak {
        width: 100%;
        padding: 6px 25px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      .kotak:hover {
        border: 1px solid black;
      }
      .filset {
        border: 2px solid black;
        padding: 10px;
      }
      form,
      body {
        background-color: #efebe9;
      }
    </style>
  </head>
  <body>
  <?php
if (isset($_POST['tambah'])) {
    $kode = $_POST['kode'];
    $lantai = $_POST['lantai'];
    $gedung = $_POST['gedung'];
    $kondisi = $_POST['kondisi'];
    
    $cek = $conn->query("SELECT * FROM ruangan WHERE kode='$kode'"); 
        if($cek->num_rows == 0){ 
            $insert = $conn->query("insert into ruangan(
                                      kode,
                                      lantai,
                                      gedung,
                                      kondisi)
                                  value(
                                      '$kode',
                                      '$lantai',
                                      '$gedung',
                                      '$kondisi')") or die(mysqli_error()); 
            if($insert){ 
               $pesan = '<p><b>DONE!</b>, Data berhasil ditambahkan.</p>'; 
            }else{ 
               $pesan = '<p><b>Upss</b>, Data gagal disimpan.</p>'; 
            }
        }else{ 
            $pesan = '<p><b>WARNING!</b>, Kode Ruangan sudah terdaftar.</p>';
        }
      }else{
        $pesan = '';
      };
    ?>

    
    <form method="post" action="">
      <h3>Tambah Ruangan</h3>
      <fieldset class="filset">
        <legend>Ruangan :</legend>
        <?php echo $pesan; ?>

        <input class="kotak" type="text" name="kode" style="width: 100%" placeholder="Kode Ruangan" required="" />
        <input class="kotak" type="text" name="lantai" style="width: 100%" placeholder="Lantai Ruangan" required="" />
        <input class="kotak" type="text" name="gedung" style="width: 100%" placeholder="Gedung Ruangan" required="" />

        <select name="kondisi" class="kotak" style="width: 100%" required="">
          <option value="">Pilih Kondisi Ruangan</option>
          <option value="KOSONG">Kosong</option>
          <option value="TERISI">Terisi</option>
        </select>

        <button type="submit" name="tambah" class="kotak" style="width: 120px">Tambahkan</button>
        <button type="reset" class="kotak" style="width: 100px">Batal</button>
      </fieldset>
    </form>
   
  </body>
</html>
