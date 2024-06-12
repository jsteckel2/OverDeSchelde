<?php
    $file="status_ferry.txt";    
    $lines=file( $file );

    function writeFerryStatus($ferryName, $ferryline){
        $buffer = $ferryline;
        $buffer = str_replace(array("\r", "\n"), '', $buffer);
        echo "<p class='status'> " .  $ferryName . ": </p>";
        if( strcmp($buffer,"veer vaart")==0 ){
            echo "<p class='status text-green-800 '>Veer vaart</p>";
        }else if( strcmp($buffer,"veer vaart niet")==0 ){
            echo "<p class='status text-red-800 '>Veer vaart niet</p>";
        }else if( strcmp($buffer,"Geen Realtime Info")==0 ){
            echo "<p  id='statusRW' class='status text-ODS2-800 '>Geen Realtime Info</p>";
        }else{
            echo "<p class='status text-orange-400 '>Mogelijks storing!</p>";
        }

    }
?>
<div class=" py-1"></div>
<div class="text-orange-400 grid grid-cols-1 gap-0.5 font-bold bg-ODS-100 rounded-lg p-2" >
Op 22/2/2024 en 23/3/2024 wordt er storm voorspeld, met mogelijke storing in de veerdiensten. 
<br/>
Zie de websites van AMDK (bij "Meer Informatie").
</div>

