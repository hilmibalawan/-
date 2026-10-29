<?php
function biaya_sewa($jenis_kendaraan, $hari){
    $tarif=0;
    $total=0;
    $diskon=0.1;
    if($jenis_kendaraan =="Sedan"){
        $tarif=10000;
    }
    else if($jenis_kendaraan == "SUV"){
        $tarif=20000;
    }
    for($i=1; $i<=$hari; $i++){
        $total+=$tarif;
        echo "Tagihan Hari ke $i $total<br><br>";
    }
    if($hari > 3){
        $total-=$total*$diskon;
        echo "<b>Diskon 10% Tagihan Akhir: $total</b>";
    }
    else{
        echo "<h3>Tagihan Akhir: $total</h3>";
    }
}
echo '<h2>Biaya Parkir</h2>';

biaya_sewa("Sedan", 4);

?>