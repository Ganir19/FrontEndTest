<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'mailer.php';  // Include PHPMailer file

$success = false;
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['First-Name'];
    $lastName = $_POST['Last-Name'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['Phone-Number'];
    $service = $_POST['Select-Service'];
    $message = $_POST['Enter-Your-Message'];

    // Prepare email content
    $to = "ganeshs1pro@gmail.com";  // Your email where the form will be sent
    $subject = "New Contact Us Form Submission";
    $body = "New submission from: \n\nName: $firstName $lastName\nEmail: $email\nPhone: $phoneNumber\nService: $service\nMessage: $message";
    $headers = "From: $email";

    // Send the email using PHPMailer
    $mail = createMailer();  // Create the PHPMailer instance
    try {
        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress($to);  // Add recipient
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Send the email
        $mail->send();
        $success = true; // Success flag
    } catch (Exception $e) {
        $error = true; // Error flag
    }
}
?>

<!DOCTYPE html>
<html   data-wf-page="66d1fa9e0c8f5cb716765ebb" data-wf-site="66d1fa9e0c8f5cb716765eaa" lang="en" data-wf-locale="en">

<head>
    <meta charset="utf-8" />
    <title>Agumentik</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="images/logoedit.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/logoedit.png" rel="apple-touch-icon" />

    <script type="text/javascript">
        function handleFormSubmit(event) {
            event.preventDefault();  // Prevent the form from submitting and redirecting

            // Manually check if the email and other fields are filled
            var email = document.getElementById("Email").value;
            if (email == "") {
                alert("Please fill the required field: Email");
                return false;  // Stop the form from submitting if email is empty
            }

            // Show the success message
            document.getElementById('success-message').style.display = 'block';
            
            // Submit the form manually
            document.getElementById("contact-form").submit();
        }
    </script>
</head>

<body class="body-3">
    <?php include 'header.php'; ?>
    <div class="div-block-83"></div>
    <div class="main_wrapper">
        <div class="contact-us">
            <div class="global_padding">
                <div class="div-block-529">
                    <div class="div-block-530">
                        <div class="div-block-532">
                            <h2 class="heading-2 plum">Looking forward <br />to a talk</h2>
                            <p class="paragraph_medium paragraphcolour">Contact us and Schedule a Meeting with Agumentik Group Experts Now!</p>
                        </div>
                    </div>
                    <div class="div-block-531">
                        <div class="w-form">
                            <!-- Form Submission Handled via JS -->
                            <form id="contact-form" name="contact-form" method="post" class="form-2" onsubmit="handleFormSubmit(event)">
                                <div class="div-block-603">
                                    <input class="main_form paragraph_small w-input" maxlength="256" name="First-Name" placeholder="First Name" type="text" id="First-Name" />
                                    <input class="main_form paragraph_small w-input" maxlength="256" name="Last-Name" placeholder="Last Name" type="text" id="Last-Name" />
                                </div>
                                <input class="main_form paragraph_small w-input" maxlength="256" name="Email" placeholder="Enter Your Email" type="email" id="Email" />
                                <input class="main_form paragraph_small w-input" maxlength="256" name="Phone-Number" placeholder="Phone Number" type="number" id="Phone-Number" />
                                <select id="Select-Service" name="Select-Service" class="main_form paragraph_small arrow-bg w-select">
                                    <option value="Another option">Select Service</option>
                                    <option value="Performance marketing">Performance marketing</option>
                                    <option value="Google Ads Management">Google Ads Management</option>
                                    <option value="Meta Ads Management">Meta Ads Management</option>
                                    <option value="LinkedIn Ads Management">LinkedIn Ads Management</option>
                                    <option value="Pinterest Ads Management">Pinterest Ads Management</option>
                                    <option value="Twitter Ads Management">Twitter Ads Management</option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                </select>
                                <input class="main_form paragraph_small w-input" maxlength="256" name="Enter-Your-Message" placeholder="Enter Your Message" type="text" id="Enter-Your-Message" />
                                <input type="submit" class="primary-button center contact_us_page margin_top w-button" value="Submit" />
                            </form>

                            <!-- Success Message -->
                            <div id="success-message" style="display:none;">
                                <div>Thank you! Your submission has been received!</div>
                            </div>

                            <!-- Failure Message -->
                            <div class="w-form-fail" style="display:none;">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>
