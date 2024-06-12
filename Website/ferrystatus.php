<?php
    $file="status_ferry.txt";    
    $lines=file( $file );

    function writeFerryStatus($ferryName, $ferryline){
        $buffer = $ferryline;
        $buffer = str_replace(array("\r", "\n"), '', $buffer);
        echo "<p class='status'> " .  $ferryName . ": </p>";
        if( strcmp($buffer,"veer vaart")==0 || strcmp($buffer,"ja, het veer vaart")==0 ){
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
<!--
<div class=" py-1"></div>
<div class="text-orange-400 grid grid-cols-1 gap-0.5 font-bold bg-ODS-100 rounded-lg p-2" >
Op 22/2/2024 en 23/3/2024 wordt er storm voorspeld, met mogelijke storing in de veerdiensten. 
<br/>
Deze storingen worden door technische redenen niet altijd correct weergegeven op deze website. 
<br/>
Controleer daarom de websites van AMDK (te vinden bij "Meer Informatie") voor de laatste updates.
</div>
-->

<div class=" py-1"></div>
<div class="text-ODS-600 grid grid-cols-1 lg:grid-cols-4 gap-0.5 font-bold bg-ODS-100 rounded-lg p-2" >
    <div>
        <?php
            writeFerryStatus("Veer Hemiksem/Bazel", $lines[1] );
        ?> 
    </div>

    <div>
        <?php
            writeFerryStatus("Veer Hoboken/Kruibeke", $lines[0] );
        ?>
    </div>

    <div>
        <?php
            writeFerryStatus("Veer Sint-Anna/Antwerpen", $lines[2] );
        ?>
    </div>

    <div>
        <?php
            writeFerryStatus("Veer Rupelmonde/Wintam", "Geen Realtime Info" );
        ?>
    </div>    
</div>

