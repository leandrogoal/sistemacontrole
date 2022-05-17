<div>
    <center><h1>Fechamento</h1></center>
    <hr>
    <div class='row relatoriosdias'>
     <?php
     $a = new DateTime('31-12-2018');
     foreach($datas as $data):?>
        <div class="col-sm-2">
            <?php
            echo $data['data_fecha'];
            ?>
        </div>


    
    <?php endforeach; ?>

    </div>

</div>

