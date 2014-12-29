<?php
/**
 * What the basic page looks like. This pageManager serves different pages to the client based on their request.
 * Benjamin Shanahan
 * 20141227
 */
?>

<html>
<head>
    <title><?php echo $page; ?> | Bugeye Designs</title>
</head>

<?php
	/* Require global variables. Be sure to define these before they are needed! */
	require_once("common/global_variables.php");
?>

<body>

<div class="header">
    <div class="header-top">
        <!-- Logo -->
        <div id="logo"></div>

        <!-- Navigation -->
        <div class="header-navigation"><?php require_once('common/navigation.php'); ?></div>
    </div>

    <div class="header-bottom">
        <!-- Drop Shadow -->
        <div class="header-drop-shadow"></div>
    </div>
</div>

<div class="container">

    <!-- Page -->
    <div class="content">
        <!-- title -->
        <h1><?php echo $page; ?></h1>
        <h2><?php require_once('common/pageDescription.php'); ?></h2>
        <hr />
        <!-- content -->
        <?php require_once('pages/' . $page . '.php'); ?>
    </div>

    <!-- Footer -->
    <div class="footer"><?php require_once('common/footer.php'); ?></div>

</div>

</body>

<!-- Load CSS -->
<?php require_once('common/include_css.php'); ?>

<!-- Load JavaScript -->
<?php require_once('common/include_javascript.php'); ?>

</html>