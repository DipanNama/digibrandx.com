<?php
$pageTitle = "Web & App Development | BS Digital Solutions";
$pageDescription = "Building robust, scalable, and high-performing digital platforms tailored to your business needs.";
$pageKeywords = "web development, app development, wordpress development, custom coding, website design";
include '../components/head.php';
include '../components/header.php';
?>

<?php
$bannerTitle = "Web & App Development";
$bannerSubtitle = "Transforming ideas into high-performance digital products.";
include '../components/services-banner.php';

$subServices = [
    [
        "title" => "Creative Website Design",
        "icon" => "fas fa-laptop-code",
        "description" => "Visually stunning and user-centric website designs that capture your brand's essence."
    ],
    [
        "title" => "WordPress Development",
        "icon" => "fab fa-wordpress",
        "description" => "Custom WordPress solutions that are easy to manage, SEO-friendly, and highly functional."
    ],
    [
        "title" => "Custom Coding & Integration",
        "icon" => "fas fa-cogs",
        "description" => "Tailored coding solutions and seamless system integrations to meet your unique business needs."
    ],
    [
        "title" => "App Development",
        "icon" => "fas fa-mobile-alt",
        "description" => "High-performance mobile and web applications that provide exceptional user experiences."
    ]
];
include '../components/sub-service-cards.php';
?>

<?php
$ctaTitle = "Build Your Digital Foundation";
$ctaDescription = "We design and build robust web applications and mobile apps that are secure, scalable, and future-ready.";
include '../components/cta-branding.php';
?>

<?php include '../components/contact-form.php'; ?>
<?php include '../components/instagram.php'; ?>
<?php include '../components/footer-services.php'; ?>

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
