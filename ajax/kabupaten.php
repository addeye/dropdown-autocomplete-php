<?php
include '../koneksi.php';
$province_id = $_GET['province_id'];

$sql = "SELECT * FROM regencies WHERE province_id='$province_id' ";

$query = mysqli_query($connect, $sql);

echo "<option value=''>Kabupaten</option>";

while ($row = mysqli_fetch_array($query)) {
    echo "<option value='" . $row['id'] . "'>" . $row['name'] . '</option>';
}

?>



