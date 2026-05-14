<?php
$pageTitle = "Search & Visibility | BS Digital Solutions";
$pageDescription = "Maximize your online presence with expert SEO and local search optimization strategies.";
$pageKeywords = "seo, local seo, search engine optimization, visibility, online presence";
include '../components/head.php';
include '../components/header.php';
?>

<?php
$bannerTitle = "Search & Visibility";
$bannerSubtitle = "Ensuring your brand is found by the right people at the right time.";
include '../components/services-banner.php';

$subServices = [
    [
        "title" => "SEO",
        "icon" => "fas fa-search",
        "description" => "Advanced search engine optimization frameworks to attract, engage, and convert the right audiences."
    ],
    [
        "title" => "Local SEO",
        "icon" => "fas fa-map-marker-alt",
        "description" => "Targeted optimization to dominate local search results and drive foot traffic to your physical locations."
    ]
];
include '../components/sub-service-cards.php';
?>

<?php
$ctaTitle = "Get Discovered Today";
$ctaDescription = "By leveraging analytics and audience intelligence, we strengthen brand authority while driving sustainable growth.";
include '../components/cta-branding.php';
?>

<?php include '../components/contact-form.php'; ?>
<?php include '../components/instagram.php'; ?>
<?php include '../components/footer-services.php'; ?>

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
