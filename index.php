<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete</title>
</head>
<body>
    <h1>Contoh Autocomplete</h1>
    <select name="provinsi" id="provinsi">
        <option value="">Provinsi</option>
        <?php
        $sqlProv = mysqli_query($connect, 'SELECT * FROM provinces');
        while ($row = mysqli_fetch_array($sqlProv)):?>
        <option value="<?=$row['id']?>"> <?=$row['name']?> </option>
        <?php endwhile; ?>
    </select>
    <br>
    <br>
    <select name="kabupaten" id="kabupaten">
        <option value="">Kabupaten</option>
    </select>
    <br>
    <br>
    <select name="kecamatan" id="kecamatan">
        <option value="">Kecamatan</option>
    </select>
    <br>
    <br>
    <select name="kelurahan" id="kelurahan">
        <option value="">Kelurahan</option>
    </select>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('#provinsi').change(function(){
            $.get('/ajax/kabupaten.php?province_id='+this.value, function(response){
                $("#kabupaten").html(response);
            });
        });

        $('#kabupaten').change(function(){
            $.get('/ajax/kecamatan.php?regency_id='+this.value, function(response){
                $("#kecamatan").html(response);
            });
        });

        $('#kecamatan').change(function(){
            $.get('/ajax/kelurahan.php?district_id='+this.value, function(response){
                $("#kelurahan").html(response);
            });
        });
    </script>
</body>
</html>