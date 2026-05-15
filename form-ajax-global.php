<?php
/**
 * Global Form AJAX Handler
 * Handles form submissions, validation, and dual email notification (Admin + User).
 */

// Basic Security: Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Direct access not allowed.");
}

// Helper to get parameters safely
function get_param($name, $default = '', $from_get = true)
{
    if ($from_get) {
        return isset($_GET[$name]) ? trim(urldecode($_GET[$name])) : $default;
    }
    return isset($_POST[$name]) ? trim($_POST[$name]) : $default;
}

// Retrieve configuration from GET parameters
$mandatory_fields = explode(',', get_param('mf'));
$email_fields = explode(',', get_param('ef'));
$contact_fields = explode(',', get_param('cf'));
$form_type = get_param('ft', 'General Enquiry');
$thanks_message = get_param('tm', 'Thank you for showing your interest. We will get back to you very soon..');
$email_to = get_param('email_to', 'dipannama91@gmail.com'); // Updated testing email

// Validate mandatory fields
$errors = [];
foreach ($mandatory_fields as $field) {
    $field = trim($field);
    if (empty($field)) continue;

    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        $label = str_replace('_', ' ', $field);
        $errors[] = "<strong>$label</strong> is required.";
    }
}

// Validate email fields
foreach ($email_fields as $field) {
    $field = trim($field);
    if (empty($field)) continue;

    if (!empty($_POST[$field]) && !filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format for <strong>" . str_replace('_', ' ', $field) . "</strong>.";
    }
}

// If errors exist, return them and stop
if (!empty($errors)) {
    echo implode('<br>', $errors);
    exit;
}

// Common Configuration
$domain_name = "bssoliution.com";
$from_email = "no-reply@$domain_name";
$company_name = "BS Digital Solutions";
$user_email = $_POST['E-Mail'] ?? '';
$user_name = $_POST['Name'] ?? 'Visitor';

// ---------------------------------------------------------
// EMAIL 1: NOTIFICATION TO ADMIN (OWNER)
// ---------------------------------------------------------
$subject_admin = "New $form_type from $user_name";
$message_admin = "<html><body style='font-family: Arial, sans-serif;'>";
$message_admin .= "<h2 style='color: #333;'>New Website Enquiry</h2>";
$message_admin .= "<p><strong>Form Type:</strong> $form_type</p>";
$message_admin .= "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px; border: 1px solid #ddd;'>";

// Exclude internal/hidden fields from the email table
$exclude_fields = [
    'mandatory_fields_except_file_fields', 'mandatory_file_fields', 'email_fields', 
    'contact_fields', 'file_fields', 'form_type', 'downlaoded_file', 
    'thanks_message', 'thanks_redirection_status', 'thanks_url', 
    'email_from', 'duplicate_by_email_enabled', 'duplicate_message', 'email_to',
    'g-recaptcha-response', 'Country_Code', 'Country_Name'
];

foreach ($_POST as $key => $value) {
    if (!in_array($key, $exclude_fields) && !empty($value)) {
        $label = str_replace('_', ' ', $key);
        $message_admin .= "<tr><td style='background: #f8f8f8; width: 40%;'><strong>$label</strong></td><td>" . nl2br(htmlspecialchars($value)) . "</td></tr>";
    }
}

$message_admin .= "</table>";
$message_admin .= "<p style='font-size: 12px; color: #666;'><strong>Sent from:</strong> " . ($_POST['Page_URL'] ?? $_SERVER['HTTP_REFERER'] ?? 'Unknown') . "<br>";
$message_admin .= "<strong>IP Address:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";
$message_admin .= "</body></html>";

$headers_admin = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers_admin .= "From: $company_name <$from_email>" . "\r\n";
if (!empty($user_email)) {
    $headers_admin .= "Reply-To: $user_email" . "\r\n";
}

// Send Admin Email
$admin_sent = mail($email_to, $subject_admin, $message_admin, $headers_admin);

// ---------------------------------------------------------
// EMAIL 2: CONFIRMATION TO USER (SENDER)
// ---------------------------------------------------------
if ($admin_sent && !empty($user_email)) {
    $subject_user = "Thank you for reaching out to $company_name!";
    $message_user = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>";
    $message_user .= "<h2>Thank You!</h2>";
    $message_user .= "<p>Hi <strong>$user_name</strong>,</p>";
    $message_user .= "<p>Thank you for contacting <strong>$company_name</strong>. We have received your inquiry regarding <strong>" . ($_POST['Service_Chosen'] ?? 'our services') . "</strong>.</p>";
    $message_user .= "<p>Our team will review your details and get back to you shortly.</p>";
    $message_user .= "<br>";
    $message_user .= "<p>Best Regards,<br><strong>$company_name Team</strong><br><a href='https://$domain_name'>www.$domain_name</a></p>";
    $message_user .= "</body></html>";

    $headers_user = "MIME-Version: 1.0" . "\r\n";
    $headers_user .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers_user .= "From: $company_name <$from_email>" . "\r\n";

    // Send User Email
    mail($user_email, $subject_user, $message_user, $headers_user);
}

// ---------------------------------------------------------
// RESPONSE TO AJAX
// ---------------------------------------------------------
if ($admin_sent) {
    echo "<span style='color:green;'>$thanks_message</span>";
} else {
    echo "Sorry, there was an error sending your message. Please try again later or contact us directly.";
}
