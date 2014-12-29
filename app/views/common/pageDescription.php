<?php
/**
 * Displays a description of the selected $page below the <h1> page title.
 * Benjamin Shanahan
 * 20141228
 */
?>

<?php

if($page == 'Catalog') {
    echo 'Browse our extensive catalog containing various shirt, decal, poster and stencil designs.';
} elseif ($page == 'About') {
    echo 'Just a little bit about Bugeye Designs.';
} else {
    echo 'Welcome to the homepage of Bugeye Designs.';
}

?>