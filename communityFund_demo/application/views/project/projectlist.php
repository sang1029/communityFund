    <body>

        <!--BUTTONS-->
        
        <div class="container"style="margin-top:90px">
            <h2>Browse Projects:</h2><hr>
            <div class="list-group" >
            <?php foreach($query as $row){ ?>
                <a href="<?= base_url()?>project/projectpage/<?php echo $row->project_id; ?>" class="list-group-item list-group-item-success"><?php echo $row->name; ?></a>
            <?php } ?>  
            </div>
        </div>

    
    </body>