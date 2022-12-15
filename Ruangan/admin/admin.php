<?php
  include('../function.php');

// Perintah SQL untuk mengambil semua data dari tabel ruangan
$query = "SELECT * FROM ruangan";

// Menjalankan perintah SQL
$result = mysqli_query($conn, $query);



// Menampilkan data dalam tabel HTML
echo "<table>";
echo "<tr>
    <th>ID Ruangan</th>
    <th>Kode Ruangan</th>
    <th>Lantai</th>
    <th>Gedung</th>
    <th>Kondisi</th>
    </tr>";
while($data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $data['id'] . "</td>";
    echo "<td>" . $data['kode'] . "</td>";
    echo "<td>" . $data['lantai'] . "</td>";
    echo "<td>" . $data['gedung'] . "</td>";
    echo "<td>" . $data['kondisi'] . "</td>";

    echo "</tr>";
}
echo "</table>";

// Mendefinisikan gaya untuk elemen tabel
echo "<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
</style>";
?>
