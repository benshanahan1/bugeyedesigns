<?php
/**
 * Navigation file to include in pages
 * Benjamin Shanahan
 * Created 20141227
 */
?>

<ul id="navlist">
    <?php
        if($page == "Home") {
    ?>
        <li><span class="emphasis"><a href="home" title="Home">Home</a></span></li>
        <li><a href="catalog" title="Catalog">Catalog</a></li>
        <li><a href="about" title="About">About</a></li>
    <?php
        }
    ?>

    <?php
    if($page == "Catalog") {
        ?>
        <li><a href="home" title="Home">Home</a></li>
        <li><span class="emphasis"><a href="catalog" title="Catalog">Catalog</a></span></li>
        <li><a href="about" title="About">About</a></li>
        <?php
    }
    ?>

    <?php
    if($page == "About") {
        ?>
        <li><a href="home" title="Home">Home</a></li>
        <li><a href="catalog" title="Catalog">Catalog</a></li>
        <li><span class="emphasis"><a href="about" title="About">About</a></span></li>
        <?php
    }
    ?>

</ul>