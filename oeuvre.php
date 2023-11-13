<?php include 'header.php'; ?>
<?php include 'oeuvres.php'; ?>
<?php
// $oeuvre = $_GET['oeuvre'];
    $id = $_GET["id"];
// $oeuvre = $artbox_gallery[$oeuvre];
    $oeuvre = $artbox_gallery[$id];
?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre["image"]; ?>" alt="<?php echo $oeuvre["title"]; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre["title"]; ?></h1>
            <p class="description"><?php echo $oeuvre["author"]; ?></p>
            <p class="description-complete"><?php echo $oeuvre["descrip"]; ?></p>
        </div>
    </article>
</main>
<?php include 'footer.php'; ?>
