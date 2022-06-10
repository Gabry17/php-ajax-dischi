<?php include "__DIR__ " . "/../database.php"; ?>

<div class="container">
    <?php foreach ($database as $value) {?>
        <div class="card">
            <div class="img">
                <img src="<?php echo $value['poster']; ?>" alt="">
            </div>
            <div class="info">
                <h2><?php echo $value['title']; ?></h2>
                <p><?php echo $value['author']; ?></p>
                <p><?php echo $value['year']; ?></p>
            </div>
         </div>
    <?php } ?>
</div>