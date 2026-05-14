# BS Digital Solution - Project Overview

This project is a modular PHP-based website for **BS Digital Solution**, a 360° Strategic Branding and Digital Growth Agency. It has been converted from static HTML to a maintainable component-based architecture.

## Tech Stack
- **Server-side:** PHP
- **Styling:** Bootstrap 5, Vanilla CSS (`css/style.css`, `css/responstive.css`)
- **Frontend Libraries:** jQuery, OwlCarousel2, Swiper, AOS (Animate on Scroll)
- **Icons:** Font Awesome 6.4.0

## Directory Structure
- `root/`: Main entry pages (index.php, about.php, contact.php, etc.)
- `components/`: Reusable PHP components (header, footer, forms, banners).
- `services/`: Main service category landing pages.
- `learn-service/`: Detailed educational pages for specific services.
- `portfolio/`: Case studies and project portfolios.
- `blog-details/`: Individual blog post pages.
- `page/`: Legal and general informational pages.
- `upload-media/`: Contact and media-related landing pages.
- `static_html/`: (Archived) Original static HTML files (ignored by Git).
- `css/`, `js/`, `images/`, `upload/`: Static assets.

## Architecture & Conventions

### Modularization
The site uses PHP `include` statements to manage recurring sections. Every page follows this standard structure:
```php
<?php
$pageTitle = "Page Title";
$pageDescription = "Description for SEO";
$pageKeywords = "keywords, for, seo";
include 'components/head.php';
include 'components/header.php';
?>

<!-- Page Content -->

<?php 
include 'components/footer.php'; 
include 'components/scripts.php'; 
?>
```

### Path Handling (`config.php`)
To support deep directory nesting (e.g., `services/services-branding.php`), the `components/config.php` file automatically calculates a `$base_path` variable. This variable must be prefixed to all internal links and asset paths in the components to ensure they resolve correctly from any directory level.

Example in `header.php`:
```html
<a href="<?php echo $base_path; ?>index.php">Home</a>
<img src="<?php echo $base_path; ?>images/logo.png">
```

### Metadata & SEO
SEO tags are managed dynamically by setting `$pageTitle`, `$pageDescription`, and `$pageKeywords` before the `head.php` include.

## Component Library (`components/`)
- `head.php`: HTML `<head>` section with dynamic title and SEO tags.
- `header.php`: Navigation bar with dynamic service dropdown.
- `footer.php`: Unified site footer and popup contact form.
- `scripts.php`: Centralized JavaScript includes and common initialization scripts.
- `contact-form.php`: The main "Let's Work Together" enquiry form with INR budget options and auto-selection logic.
- `services-banner.php`: Dynamic banner for service pages.
- `cta-branding.php`: Standardized Call-to-Action section.
- `numbers.php`: "Numbers Speak" counter section with animation.
- `follow-us.php`: Social media follow icons section.
- `sub-service-cards.php`: Renders sub-services as interactive cards based on an input array.

## Running the Project
1. Host the root directory on a PHP server (e.g., XAMPP, WAMP, or a LAMP stack).
2. Access the site via the server URL (e.g., `http://localhost/dgbrandx/html_site/`).
