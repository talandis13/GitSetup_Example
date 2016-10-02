<?php include_once('header.php'); ?>

        <h1>HELLO!</h1>
        
        <?php if (isset($answer)) { ?>
        <h3>The answer is <?= $answer ?> </h3>
        <?php } else { ?>
        <h3>Try adding two parameters to the URL!</h3>
        <?php } ?>

<?php include_once('footer.php'); ?>