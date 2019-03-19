<table>
<tr>
    <td colspan="2"><h3>COMPUTADORAS</h3></td>
    <td></td>
</tr>
<?php

    $form = array('Serie', 'Marca', 'Modelo', 'Procesador', 'GHZ', 'Memoria Ram', 'Disco Duro', 'Guardar');
    $val = array('serie', 'marca', 'modelo', 'procesador', 'ghz', 'ram', 'hdd', 'set');

    for($i=0;$i<count($val);$i++){
        if($i==7)
        {
            ?>
            <tr>
                <td><input type="submit" name="<?=$val[$i];?>" value="<?=$form[$i];?>"></td>
                <td></td>
            </tr>
            
            <?php
        }else{
        ?>
            <tr>
                <td><span><?=$form[$i];?></span></td>
                <td><input type="text" name="<?=$val[$i];?>"></td>
            </tr>
            
        <?php
        }
    }
?>
</table>