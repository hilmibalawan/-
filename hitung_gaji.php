<?php
function hitung_gaji($golongan_karyawan, $hari){
    $gaji=0;
    $bonus=0;
    $total=0;
    $total_bonus=0;
    $total_gaji=0;
    if($golongan_karyawan == "Senior"){
        $bonus=100000;
        $gaji=200000;
    }else if($golongan_karyawan == "Junior"){
        $bonus=50000;
        $gaji=100000;
    }
    for($i=1; $i<=$hari; $i++){
        $total+=$bonus+$gaji;
        $total_bonus+=$bonus;
        $total_gaji+=$gaji;
    }
    return "Total gaji dan bonus: $total<br> Total Bonus: $total_bonus<br> Total Gaji: $total_gaji ";
}
echo hitung_gaji("Senior", 4);
?>