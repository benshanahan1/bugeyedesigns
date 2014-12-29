<?php
/**
 * Link to stylesheets used. Can also filter based on page if necessary.
 */
?>

<!-- always include -->
<link type="text/css" rel="stylesheet" href="../css/main.css" />

<?php if($fixedHeader) { ?>
    <!-- fixed header -->
    <link type="text/css" rel="stylesheet" href="../css/header.fixed.css" />
    <link type="text/css" rel="stylesheet" href="../css/container.fixed.css" />
<?php } else { ?>
    <!-- scrollable header -->
    <link type="text/css" rel="stylesheet" href="../css/header.scroll.css" />
    <link type="text/css" rel="stylesheet" href="../css/container.scroll.css" />
<?php } ?>

<?php if($page == "Catalog") { ?>
    <!-- image rig for catalog -->
    <link type="text/css" rel="stylesheet" href="../css/imageRig.css" />
<?php } ?>

<!-- themed CSS -->
<link type="text/css" rel="stylesheet" href="../css/logo.<?php echo $colorScheme; ?>.css" />
<link type="text/css" rel="stylesheet" href="../css/header.navigation.<?php echo $colorScheme; ?>.css" />
<link type="text/css" rel="stylesheet" href="../css/links.<?php echo $colorScheme; ?>.css" />
<link type="text/css" rel="stylesheet" href="../css/imageRig.<?php echo $colorScheme; ?>.css" />
