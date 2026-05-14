<?php include_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo $base_path; ?>theme.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_path; ?>images/favicon.png">

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/style.css">

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/responstive.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>build/css/intlTelInput.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "BS Digital Solution",
  "url": "index.php",
  "logo": "images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 98203 88325",
    "contactType": "customer service",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.instagram.com/bsdigital2023",
    "https://x.com/BrandxDigi98057",
    "https://www.linkedin.com/company/digibrandexofficial/"
  ]
}
</script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4MFVLSQHM1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-4MFVLSQHM1');
    </script>
    <title><?php echo isset($pageTitle) ? $pageTitle : "BS Digital Solution | 360&deg; Strategic Branding & Digital Growth Agency West Bengal"; ?></title>
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : "BS Digital Solution is the No. 1 full services advertising agency, a specialist in ui and ux design, and corporate film, creating powerful branding experiences."; ?>" />
    <meta name="keywords"
        content="<?php echo isset($pageKeywords) ? $pageKeywords : "Digital Marketing Agency North Dumdum, Marketing Consultancy West Bengal, Bidhan Sarkar Marketing Specialist, 360 Advertising Agency Kolkata, Meta Ads Expert West Bengal."; ?>" />

    <style>
        .custom-contact-select {
            position: relative;
        }

        .custom-contact-select .selected {
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            border-bottom: 1px solid var(--border-mid);
            border-radius: inherit;
            text-align: center;
            justify-content: center;
            color: var(--d-9-d-9-d-9, var(--text-muted));
            font-size: 18px;
        }

        .custom-contact-select .arrow {
            transition: transform 0.3s ease;
        }

        .custom-contact-select .arrow.rotate {
            transform: rotate(180deg);
        }

        .custom-contact-select .options {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            border-top: none;
            border-radius: 0 0 8px 8px;
            background: var(--bg-white);
            z-index: 100;
            box-shadow: 0px 0px 20px 2px var(--border-mid)dddc2;
        }

        .custom-contact-select .options div {
            padding: 10px;
            border-top: 1px solid var(--bg-light);
            cursor: pointer;
            transition: 0.2s;
        }

        .custom-contact-select .options div:hover {
            background-color: var(--accent-color);
            color: var(--bg-white);
            transition: 0.2s;
        }

        .custom-contact-select .options.show {
            display: block;
        }

        .arrow {
            font-size: 12px;
            position: absolute;
            right: 14px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/service_area.css">
    <script src="<?php echo $base_path; ?>app.js" defer></script>
</head>
