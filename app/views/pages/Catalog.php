<?php
/**
 * Catalog page. Display items in grid pattern.
 */
?>

<?php
// Catalog XML directory
$xmlDir = "xml/catalog.xml";
//$categories = ["Shirts", "Decals", "Posters", "Stencils"];

// load Catalog XML so we can parse it
$categories = simplexml_load_file($xmlDir) or die("Error: Failed to load Catalog!");

?>

<div class="catalog" xmlns="http://www.w3.org/1999/html">

    <div class="catalog-navigation">
        <p>Browse our catalog or jump to a specific section by clicking one of the following links:</p>
        <div class="catalog-navigation-links">
            <ul id="navlist">
                <li><a href="#Shirts">Shirts</a></li>
                <li><a href="#Decals">Decals</a></li>
                <li><a href="#Posters">Posters</a></li>
                <li><a href="#Stencils">Stencils</a></li>
            </ul>
        </div>
    </div>

    <div class="catalog-images">
        <?php foreach($categories->items as $items) { ?>
            <h3 id="<?php echo $items['type']; ?>"><?php echo $items['type']; ?></h3>
            <ul class="rig columns-4">

            <?php $dir = "products/" . $items['type'] . "/"; ?>

            <?php foreach($items->item as $item) { ?>
                <li>
                    <img src="<?php echo $dir . $item['filename']; ?>" />
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                </li>
            <?php } ?>
            </ul>
        <?php } ?>
    </div>

</div>