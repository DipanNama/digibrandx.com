<?php
/**
 * Global Form AJAX Handler
 * Handles form submissions, validation, and email notification.
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
$email_to = get_param('email_to', 'dipannama01@gmail.com');

// Validate mandatory fields
$errors = [];
foreach ($mandatory_fields as $field) {
    $field = trim($field);
    if (empty($field))
        continue;

    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        $label = str_replace('_', ' ', $field);
        $errors[] = "<strong>$label</strong> is required.";
    }
}

// Validate email fields
foreach ($email_fields as $field) {
    $field = trim($field);
    if (empty($field))
        continue;

    if (!empty($_POST[$field]) && !filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format for <strong>" . str_replace('_', ' ', $field) . "</strong>.";
    }
}

// If errors exist, return them and stop
if (!empty($errors)) {
    echo implode('<br>', $errors);
    exit;
}

// Prepare Email Content
$subject = "New $form_type from " . ($_POST['Name'] ?? 'Website Visitor');
$message = "<html><body>";
$message .= "<h2>New Website Enquiry</h2>";
$message .= "<p><strong>Form Type:</strong> $form_type</p>";
$message .= "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px;'>";

// Exclude internal/hidden fields from the email table
$exclude_fields = [
    'mandatory_fields_except_file_fields',
    'mandatory_file_fields',
    'email_fields',
    'contact_fields',
    'file_fields',
    'form_type',
    'downlaoded_file',
    'thanks_message',
    'thanks_redirection_status',
    'thanks_url',
    'email_from',
    'duplicate_by_email_enabled',
    'duplicate_message',
    'email_to',
    'g-recaptcha-response'
];

foreach ($_POST as $key => $value) {
    if (!in_array($key, $exclude_fields) && !empty($value)) {
        $label = str_replace('_', ' ', $key);
        $message .= "<tr><td style='background: #f4f4f4;'><strong>$label</strong></td><td>" . nl2br(htmlspecialchars($value)) . "</td></tr>";
    }
}

$message .= "</table>";
$message .= "<p><strong>Sent from:</strong> " . ($_POST['Page_URL'] ?? $_SERVER['HTTP_REFERER'] ?? 'Unknown') . "<br>";
$message .= "<strong>IP Address:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";
$message .= "</body></html>";

// Email Headers for HTML content
$from_email = "noreply@" . $_SERVER['HTTP_HOST'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: BS Digital Solutions <$from_email>" . "\r\n";

if (!empty($_POST['E-Mail'])) {
    $headers .= "Reply-To: " . $_POST['E-Mail'] . "\r\n";
}

$headers .= "X-Mailer: PHP/" . phpversion();

// Send Email
if (mail($email_to, $subject, $message, $headers)) {
    // SUCCESS: Return message with "green" as expected by the JS
    echo "<span style='color:green;'>$thanks_message</span>";
} else {
    // FAILURE
    echo "Sorry, there was an error sending your message. Please try again later or contact us directly.";
}
