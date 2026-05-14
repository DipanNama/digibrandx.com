<?php
$pageTitle = "Creative & Content Production | BS Digital Solutions";
$pageDescription = "Compelling content and stunning designs that tell your brand's story and engage your audience.";
$pageKeywords = "graphic design, video editing, content marketing, creative agency, content production";
include '../components/head.php';
include '../components/header.php';
?>

<?php
$bannerTitle = "Creative & Content Production";
$bannerSubtitle = "Crafting visual stories that resonate and leave a lasting impact.";
include '../components/services-banner.php';

$subServices = [
    [
        "title" => "Graphics Designing",
        "icon" => "fas fa-paint-brush",
        "description" => "From logos to marketing collaterals, we create consistent and performance-driven brand visuals."
    ],
    [
        "title" => "Video Editing",
        "icon" => "fas fa-video",
        "description" => "Cinematic video production and editing that transforms complex narratives into immersive experiences."
    ],
    [
        "title" => "Content Marketing",
        "icon" => "fas fa-pen-nib",
        "description" => "Data-driven storytelling and content strategies that engage your audience and build trust."
    ]
];
include '../components/sub-service-cards.php';
?>

<?php
$ctaTitle = "Tell Your Brand's Story";
$ctaDescription = "Strong graphic design and compelling content transform ideas into visuals that communicate value and drive engagement.";
include '../components/cta-branding.php';
?>

<?php include '../components/contact-form.php'; ?>
<?php include '../components/instagram.php'; ?>
<?php include '../components/footer-services.php'; ?>

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
