<?php
include '../koneksi.php';
$regency_id = $_GET['regency_id'];

$sql = "SELECT * FROM districts WHERE regency_id='$regency_id' ";

$query = mysqli_query($connect, $sql);

echo "<option value=''>Kecamatan</option>";

while ($row = mysqli_fetch_array($query)) {
    echo "<option value='" . $row['id'] . "'>" . $row['name'] . '</option>';
}
