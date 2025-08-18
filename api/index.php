<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Absolutely Magazine | Mutshidzi Premium Lifestyle & Culture</title>
    <meta name="description" content="Discover premium lifestyle, culture, travel, and fashion content with Absolutely Magazine. Your guide to sophisticated living and curated experiences.">
    <meta name="keywords" content="lifestyle magazine, culture, travel, fashion, luxury, premium content">
    <meta name="author" content="Absolutely Magazine">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Absolutely Magazine | Mutshidzi Premium Lifestyle & Culture">
    <meta property="og:description" content="Discover premium lifestyle, culture, travel, and fashion content with Absolutely Magazine.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="img/og-image.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Absolutely Magazine - Premium Lifestyle & Culture">
    <meta name="twitter:description" content="Discover premium lifestyle, culture, travel, and fashion content with Absolutely Magazine.">
    <meta name="twitter:image" content="img/twitter-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/featured.css">
    <link rel="stylesheet" href="css/signup.css">
    <!-- <link rel="stylesheet" href="css/footer.css">-->
    
</head>
<body>
    <!-- Navigation -->
    <?php include '../sections/navbar.html'; ?>
    
    <!-- Hero Section -->
    <?php include '../sections/hero.html'; ?>
    
    <!-- Articles Section -->
    <?php include '../sections/articles.html'; ?>
    
    <!-- Featured Section -->
    <?php include '../sections/featured.html'; ?>
    
    <!-- Signup Section -->
    <?php include '../sections/signup.html'; ?>
    
    <!-- Footer -->
    <!-- <?php include '../sections/footer.html'; ?> --> 
    
    <!-- JavaScript Files -->
    <script src="js/navbar.js"></script>
    <script src="js/hero.js"></script>
    <script src="js/articles.js"></script>
    <script src="js/featured.js"></script>
    <script src="js/signup.js"></script>
    <!-- <script src="js/footer.js"></script>-->
</body>
</html>