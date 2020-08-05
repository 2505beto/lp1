<table border = "0">
    <tbody>
        <?php
            for ($i=1; $i <= 6; $i++) { 
                ?> <tr>
                 <?php
                     for($j = 1; $j <= 6; $j++){
                    ?>
                        <td>  <?php echo $j*$i; ?>  </td>
                        <?php
                        }
                        ?>
                </tr>
                <?php  
             }
        ?>
    </tbody>
</table>

