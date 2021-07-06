
<?php

$koneksi = mysqli_connect ("localhost","root");

if ($koneksi === false) {
    die ("error: tidak dapat tersambung".mysqli_connect_error());
}else
echo "koneksi tersambung . info : ".mysqli_get_host_info($koneksi);

echo "<br><br>";
$sql = "SELECT * FROM data_mahasiswa.ukm";

if($result = mysqli_query ($koneksi,$sql)){
    if (mysqli_num_rows($result) > 0){
        echo "<table border='1'>"; 
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Nama Depan</th>";
        echo "<th>Nama Belakang</th>";
        echo "<th>Email</th>";
        echo "</tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($result);

}else{
    echo "no record marching your query were found";
}}else{ 
    echo "error: Could not able to execute $sql. ".mysqli_error($link);
}
mysqli_close($koneksi);
?> 
