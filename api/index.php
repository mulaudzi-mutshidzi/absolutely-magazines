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
    <meta property="og:image" content="/img/opengraph.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Absolutely Magazine - Premium Lifestyle & Culture">
    <meta name="twitter:description" content="Discover premium lifestyle, culture, travel, and fashion content with Absolutely Magazine.">
    <meta name="twitter:image" content="/img/opengraph.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon.jpg">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.jpg">
    
    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Absolutely Magazines",
        "alternateName": "Zest Media Group",
        "url": "https://absolutelymagazines.com",
        "logo": "https://absolutelymagazines.com/img/absolutely-logo.svg",
        "description": "The UK's leading group of luxury lifestyle magazines across the UK, offering premium content on fashion, culture, lifestyle, travel, and more.",
        "foundingDate": "2011",
        "publishingPrinciples": "Stylish. Intelligent. Elegant.",
        "sameAs": [
            "https://www.facebook.com/absolutelymagazines",
            "https://twitter.com/absolutelymags",
            "https://www.instagram.com/absolutelymagazines"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "url": "https://absolutelymagazines.com/contact"
        },
        "areaServed": [
            {
                "@type": "Place",
                "name": "London"
            },
            {
                "@type": "Place",
                "name": "Essex"
            },
            {
                "@type": "Place",
                "name": "Berkshire"
            },
            {
                "@type": "Place",
                "name": "Buckinghamshire"
            },
            {
                "@type": "Place",
                "name": "Cheshire"
            },
            {
                "@type": "Place",
                "name": "Hertfordshire"
            },
            {
                "@type": "Place",
                "name": "Sussex"
            },
            {
                "@type": "Place",
                "name": "Yorkshire"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Magazine Publications",
            "itemListElement": [
                {
                    "@type": "Periodical",
                    "name": "Absolutely London"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Essex"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Berkshire"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Buckinghamshire"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Cheshire"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Hertfordshire"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Sussex"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Yorkshire"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Education"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Mama"
                },
                {
                    "@type": "Periodical",
                    "name": "Absolutely Weddings"
                }
            ]
        },
        "knowsAbout": [
            "Fashion",
            "Lifestyle",
            "Culture",
            "Travel",
            "Health and Beauty",
            "Food and Drink",
            "Parenting",
            "Home and Interiors",
            "Luxury Living"
        ]
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Absolutely Magazine",
        "alternateName": "Absolutely Magazines",
        "url": "https://absolutelymagazines.com",
        "description": "Premium lifestyle, culture and lifestyle magazine - a destination for affluent, style-conscious, modern women with families to be inspired.",
        "publisher": {
            "@type": "Organization",
            "name": "Absolutely Magazines"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://absolutelymagazines.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        },
        "about": [
            {
                "@type": "Thing",
                "name": "Lifestyle"
            },
            {
                "@type": "Thing",
                "name": "Fashion"
            },
            {
                "@type": "Thing",
                "name": "Culture"
            },
            {
                "@type": "Thing",
                "name": "Travel"
            }
        ]
    }
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/hero.css">
    <link rel="stylesheet" href="/css/articles.css">
    <link rel="stylesheet" href="/css/featured.css">
    <link rel="stylesheet" href="/css/signup.css">
    <!-- <link rel="stylesheet" href="/css/footer.css">-->
    
</head>
<body>
    <!-- Navigation -->
    <?php include __DIR__ . '/../sections/navbar.html'; ?>
    <!-- Hero Section -->
    <?php include __DIR__ . '/../sections/hero.html'; ?>
    <!-- Articles Section -->
    <?php include __DIR__ . '/../sections/articles.html'; ?>
    <!-- Featured Section -->
    <?php include __DIR__ . '/../sections/featured.html'; ?>
    <!-- Signup Section -->
    <?php include __DIR__ . '/../sections/signup.html'; ?>
    <!-- Footer -->
    <!-- <?php include __DIR__ . '/../sections/footer.html'; ?> -->
    
    <!-- JavaScript Files -->
    <script src="/js/navbar.js"></script>
    <script src="/js/hero.js"></script>
    <script src="/js/articles.js"></script>
    <script src="/js/featured.js"></script>
    <script src="/js/signup.js"></script>
    <!-- <script src="/js/footer.js"></script>-->
</body>
</html>