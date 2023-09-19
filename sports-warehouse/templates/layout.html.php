<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body id="<?= $page ?>">
    <header class="wrapper">
        <a href="index.php">
            <img src="assets/images/site/companyLogo.png" width="458" height="129" alt="Company"> </a>
    </header>
    <nav>
        <ul class="wrapper">
            <li><a class="home" href="index.php">Home</a></li>
            <li><a class="products" href="products.php">Products</a></li>
            <li><a class="services" href="services.php">Services</a></li>
            <li><a class="reviews" href="reviews.php">Reviews</a></li>
            <li><a class="contact" href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main class="wrapper">
        <?= $output ?>
    </main>
    <footer>
        <div class="wrapper">
            <p> &copy; <?= date("Y"); ?> Lorem Ipsum</p>
            <div class="socialMedia">
                <img src="assets/images/social/instagram.png" width="25" height="25" alt="instagram">
                <img src="assets/images/social/acebook.png" width="25" height="25" alt="facebook">
                <img src="assets/images/social/paypal.png" width="25" height="25" alt="paypal">
                <img src="assets/images/social/images/youtube.png" width="25" height="25" alt="youtube">
                <img src="images/twitter.png" width="25" height="25" alt="twitter">
            </div>
        </div>
    </footer>
</body>
</html>