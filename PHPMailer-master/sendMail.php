<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load PHPMailer files
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

/**
 * Sends an email using PHPMailer.
 *
 * @param mixed  $recipientEmail A single email address or an array of email addresses.
 * @param string $subject        The subject of the email.
 * @param string $body           The HTML body of the email.
 * @param string $altBody        The alternative plain-text body (optional).
 *
 * @return void
 */
function sendMail($recipientEmail, $subject, $body, $altBody = '')
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Disable debug output for production
        $mail->isSMTP();                    // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';    // Hostinger SMTP server
        $mail->SMTPAuth   = true;                   // Enable SMTP authentication
        $mail->Username   = 'management@metricvibes.com'; // SMTP username
        $mail->Password   = 'MetricVibes@2024';            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port       = 465;                  // TCP port for SMTPS

        // Recipients
        $mail->setFrom('management@metricvibes.com', 'Metric Vibes Management');
        $mail->addReplyTo('management@metricvibes.com');
        
        if (is_array($recipientEmail)) {
            foreach ($recipientEmail as $email) {
                $mail->addAddress($email);
            }
        } else {
            $mail->addAddress($recipientEmail);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        if (!empty($altBody)) {
            $mail->AltBody = $altBody;
        }

        $mail->send();
    } catch (Exception $e) {
        // Optionally log the error or handle it as needed
        error_log("PHPMailer Error: " . $mail->ErrorInfo);
    }
}
?>