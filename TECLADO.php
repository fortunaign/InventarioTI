
<table>
<tr>
    <td colspan="2"><h3>TECLADO</h3></td>
    <td></td>
</tr>
<?php

    $form = array('Serie', 'Marca', 'Estado', 'Guardar');
    $val = array('serie', 'marca', 'estado', 'set');
    
    for($i=0;$i<count($val);$i++){
        if($i==3)
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
                <td><input type="text" name="<?=$val[$i];?>" placeholder=""></td>
            </tr>
        <?php
        }
    }
?>
</table>