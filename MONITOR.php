
<table>
    <tr>
        <td colspan="2"><h3>MONITOR</h3></td>
        <td></td>
    </tr>
<?php

    $form = array('Serie', 'Marca', 'Pulgadas', 'Estado', 'Guardar');
    $val = array('serie', 'marca', 'pulgadas', 'estado', 'set');

    for($i=0;$i<count($val);$i++){
        if($i==4)
        {
            ?>
            <tr>
                <td><input type="submit" name="<?=$val[$i];?>" value="<?=$form[$i];?>"><br></td>
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