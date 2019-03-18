<h3>MONITOR</h3>
<?php

    $form = array('Serie', 'Marca', 'Pulgadas', 'Estado', 'Guardar');
    $val = array('serie', 'marca', 'pulgadas', 'estado', 'set');

    for($i=0;$i<count($val);$i++){
        if($i==4)
        {
            ?>
            <input type="submit" name="<?=$val[$i];?>" value="<?=$form[$i];?>"><br>
            <?php
        }else{
        ?>
            <span><?=$form[$i];?></span><input type="text" name="<?=$val[$i];?>"><br>
        <?php
        }
    }
?>