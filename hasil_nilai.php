<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//buat total nilai (uts+uas+tugas/3)
$total_nilai = ($nilai_uts +$nilai_uas + $nilai_tugas) / 3;

//Buat perhitungan IF untuk mencari Grade
if ($total_nilai  >=85){
    $grade = "A";
}
else ($total_nilai >=70){
    $grade = "B";
}
else ($total_nilai >=60){
    $grade = "C";
}
else ($total-nilai >=50){
    $grade = "D";
}
else ($total_nilai >=40){
    $grade = "E";
}

//Buat perhitunghan SWITCHCASE untuk mencari  pridikat
switch ($grade){
    case "A";
    $predikat = "Sangat memuaskan";
    break;
    case "B";
    $predikat = "memuaskan";
    break;
    case "C";
    $predikat = "cukup memuaskan";
    default;
    $predikat = "Tidak memuaskan";
    break;
}

//lulus atau tidaknya
if($total_nilai >=70) {
    $status = "LULUS";
}
else{
    $status = "tidak lulus";
}



//cetak hasil
echo 'Nama:' . $nama . '<br>'; 
echo 'Matkul:' . $matkul . '<br>';
echo 'Nilai UTS:' . $nilai_uts . '<br>';
echo 'Nilai UAS:' . $nilai_uas . '<br>';
echo 'Nilai Tugas:' . $nilai_tugas . '<br>';
echo 'Total Nilai:' . $total_nilai . '<br>';
echo   'Grade :'  . $grade . '<br>';
echo 'Status Kelulusan' . $status_kelulusan . '<br>';


?>