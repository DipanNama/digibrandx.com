<?php
$pageTitle = "Growth & Business Strategy | BS Digital Solutions";
$pageDescription = "Empower your brand with strategic growth and business consultancy. From market entry to lead generation, we drive results.";
$pageKeywords = "business strategy, growth marketing, consultancy, lead generation, market strategy";
include '../components/head.php';
include '../components/header.php';
?>

<?php
$bannerTitle = "Growth & Business Strategy";
$bannerSubtitle = "Bridging the gap between your brand and your audience with data-driven strategies.";
include '../components/services-banner.php';

$subServices = [
    [
        "title" => "Business Consultancy",
        "icon" => "fas fa-briefcase",
        "description" => "Expert advice to help your business navigate challenges and seize opportunities for expansion."
    ],
    [
        "title" => "Online Business Strategy",
        "icon" => "fas fa-globe",
        "description" => "Comprehensive digital roadmaps designed to enhance your online presence and market competitiveness."
    ],
    [
        "title" => "Marketing Strategy",
        "icon" => "fas fa-bullhorn",
        "description" => "Tailored marketing plans that align with your business goals to drive brand awareness and engagement."
    ],
    [
        "title" => "Lead Generation",
        "icon" => "fas fa-user-plus",
        "description" => "Strategic campaigns focused on capturing high-quality leads to fuel your sales pipeline and growth."
    ]
];
include '../components/sub-service-cards.php';
?>

<?php
$ctaTitle = "Ready to Scale Your Business?";
$ctaDescription = "Our strategic approach ensures you use time, budget, and resources wisely, leading to faster and better results.";
include '../components/cta-branding.php';
?>

<?php include '../components/contact-form.php'; ?>
<?php include '../components/instagram.php'; ?>
<?php include '../components/footer-services.php'; ?>

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
