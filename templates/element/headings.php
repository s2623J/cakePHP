
<?php $this->start('heading1') ?>
    <h1>Heading 1 Area</h1> 
    <ul>
        <?php foreach ($items as $data) { ?> <!-- Each line PHP notated seperately -->
            <li><?= $data ?></li>
        <?php } ?>
    </ul>
<?php $this->end(); ?>


<?php $this->start('heading2') ?>
    <h1>Heading 2 Area</h1> 
    <ul>
        <?php foreach ($items as $data) { ?> <!-- Each line PHP notated seperately -->
            <li><?= $data ?></li>
        <?php } ?>
    </ul>
<?php $this->end(); ?>
