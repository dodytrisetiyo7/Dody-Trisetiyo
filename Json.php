<?php
$json_data=file_get_contents("DataMahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->NIM;
echo "<br>";
echo "Nama : "; echo $obj->Nama;
echo "<br>";
echo "Alamat : "; echo $obj->Alamat;
echo "<br>";
echo "No_Hp : "; echo $obj->No_Hp;
echo "<br>";
echo "M1: ";echo $obj->Mata_Kuliah[0];
echo "<br>";
echo "M2: ";echo $obj->Mata_Kuliah[1];
echo "<br>";
echo "M3: ";echo $obj->Mata_Kuliah[2];
?>