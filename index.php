<?php $title = 'Home'; ?>
<?php $currentPage = 'index'; ?>
<?php require_once(__DIR__.'/inc/head.php'); ?>
<body>
    <!--Nav Bar-->
    <?php require_once(__DIR__.'/inc/navbar.php'); ?>
    <!--/Nav Bar-->
    <!-- Top back -->
    <a id="button"></a>
    <!-- /Top back -->
    <!--banner-->
    <?php require_once(__DIR__.'/inc/banner.php'); ?>
    <!--/banner-->
    <!-- Sort-Product -->
    <?php require_once(__DIR__.'/inc/sortproduct.php'); ?>
    <!-- /Sort-Productt -->

    <!-- Footer -->
    <?php require_once(__DIR__.'/inc/footer.php'); ?>
    <!-- /Footer -->

    <!-- all your content here -->

    <!--Login-Form -->
    <?php require_once(__DIR__.'/inc/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php require_once(__DIR__.'/inc/registration.php'); ?>
    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php require_once(__DIR__.'/inc/forgotpassword.php'); ?>
    <!--/Forgot-password-Form -->
</body>

<?php require_once(__DIR__.'/inc/allescript.php'); ?>
