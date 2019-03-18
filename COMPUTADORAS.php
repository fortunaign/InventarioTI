<h1>COMPUTADORAS</h1>
<?php
    $form = array('Marca', 'Modelo', 'Procesador', 'GHZ', 'Memoria Ram', 'Disco Duro', 'Enviar');
    $val = array('marca', 'modelo', 'procesador', 'ghz', 'ram', 'hdd', 'set');
    for($i=0;$i<count($val);$i++)
    {
        if($i==6)
        {
            ?>
            <input type="submit" name="<?=$val[$i];?>" value="<?=$form[$i];?>"><br>
            <?php
        }else{
        ?>
            <input type="text" name="<?=$val[$i];?>" placeholder="<?=$form[$i];?>"><br>
        <?php
        }
    }
?>