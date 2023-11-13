<?php include('oeuvres.php'); ?>
<?php include('header.php'); ?>

<main>
    <div id="liste-oeuvres">
    <?php foreach ($artbox_gallery as $oeuvre) {?>
        <article class="oeuvre">
            <a href = "oeuvre.php?id=<?php echo $oeuvre["id"]; ?>">
                <img src="<?php echo $oeuvre["image"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
                <h2><?php echo $oeuvre["title"]; ?></h2>
                <p class="description"><?php echo $oeuvre["author"]; ?></p>
            </a>
        </article>
    <?php } ?>
    </div>
</main>
<?php include('footer.php'); ?>