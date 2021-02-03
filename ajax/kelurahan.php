<?php
include '../koneksi.php';
$district_id = $_GET['district_id'];

$sql = "SELECT * FROM villages WHERE district_id='$district_id' ";

$query = mysqli_query($connect, $sql);

echo "<option value=''>Kelurahan</option>";

while ($row = mysqli_fetch_array($query)) {
    echo "<option value='" . $row['id'] . "'>" . $row['name'] . '</option>';
}
