<?php
$hari = date("d");
if ($hari < "10") {
    echo "jajan teroos";
} else if ($hari > 20) {
    echo "irit boy";
} else {
    echo "ngapain yaa";
}
echo "<br>";
$meletus = "kuning";
switch ($meletus) {
    case 'hijau':
        echo "dor";
        break;
    case 'kuning':
        echo "dorr";
        break;
    case 'kelabu':
        echo "dorrr";
        break;
    default:
        echo "balonku utuh";
}
$w = 99;
while ($w <= 100) {
    echo "duit anda kurang senilai $w $<br> ";
    $w++;
}
do {
    echo "duit anda haruslah $w $<br>";
    $w++;
} while ($w <= 100);
$kelas = array("satu", "dua", "tiga");
$room = ["empat", "lima", "enam"];
var_dump($kelas);
echo "<br>";
echo $kelas[1] . "<br>";
foreach ($kelas as $k) {
    echo $k . "<br>";
}
$class = [["satu"], ["dua"], ["tiga"]];
echo $class[1][0] . "<br>";
var_dump($class);
?>