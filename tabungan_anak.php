<?php
function tabungan_anak($bulan){
    $saldo=0;
    $bonus=0;
    for($i=1; $i<=$bulan; $i++){
        $saldo+=20000;
        if($saldo>=50000){
            $bonus=20000;
            $saldo+=$bonus;
        }
        if($i==1){
            echo "<b>Tabungan Bulan pertama:</b><br>
            Saldo(sudah termasuk Bonus): $saldo<br>
            Bonus yang didapatkan: $bonus<br><br>";
        }
        else{
            echo "<b>Tabungan Bulan ke-$i</b><br>
            Saldo(sudah termasuk bonus): $saldo<br>
            Bonus yang didapatkan: $bonus<br><br>";
        }
    }
}
tabungan_anak(7);
?>