<?php
$pageTitle = "Social Media & Advertising | BS Digital Solutions";
$pageDescription = "Fueling your brand's growth and success with high-impact social media and advertising campaigns.";
$pageKeywords = "social media marketing, facebook ads, instagram marketing, google ads, sem, advertising agency";
include '../components/head.php';
include '../components/header.php';
?>

<?php
$bannerTitle = "Social Media & Advertising";
$bannerSubtitle = "Connecting your brand with the right audience through powerful digital channels.";
include '../components/services-banner.php';

$subServices = [
    [
        "title" => "Facebook & Instagram Marketing",
        "icon" => "fab fa-instagram",
        "description" => "Targeted social media campaigns designed to build community and drive engagement on Meta platforms."
    ],
    [
        "title" => "Google Ads (SEM)",
        "icon" => "fab fa-google",
        "description" => "Performance-driven search engine marketing to put your brand in front of customers at the exact moment they search."
    ],
    [
        "title" => "Social Media Management",
        "icon" => "fas fa-users-cog",
        "description" => "Full-service management of your social profiles, from content creation to audience interaction."
    ]
];
include '../components/sub-service-cards.php';
?>

<?php
$ctaTitle = "Amplify Your Reach Today";
$ctaDescription = "We create powerful strategies that engage audiences, elevate brands, and drive measurable growth.";
include '../components/cta-branding.php';
?>

<?php include '../components/contact-form.php'; ?>
<?php include '../components/instagram.php'; ?>
<?php include '../components/footer-services.php'; ?>

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
