<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .img-99 {
            width: 100px;
            height: auto;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 0;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .contact-section {
            text-align: center;
        }

        .contact-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-content p {
            font-size: 15px;
            margin: 30px 0;
            position: relative;
        }

        .contact-content p::after {
            background: #353C46;
            bottom: -30px;
            content: "";
            height: 1px;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
            width: 80%;
        }

        .contact-details h6 {
            color: #8b9199;
            font-size: 15px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .contact-details span {
            color: #353c47;
            margin: 0 10px;
        }

        .social-links {
            margin-top: 30px;
        }

        .social-links ul {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-links ul li a {
            border: 1px solid #8b9199;
            color: #8b9199;
            display: inline-block;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            line-height: 40px;
            text-align: center;
            transition: all 0.4s ease;
        }

        .social-links ul li a:hover {
            border-color: #FAB702;
            color: #FAB702;
        }

        section,footer {
            background: lightblue;
            color: black;
            text-align: center;
            padding: 40px 0;
        }

        footer img {
            width: 44px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-content">
                <a href="#"><img src="images/headlogo2.png" alt="logo" class="img-99"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum</p>
                <div class="contact-details">
                    <h6>1120 Lorem ipsum dolor sit amet, KC 179050, Chandigarh.</h6>
                    <h6>+01 2345 6789 12<span>|</span>+01 2345 6789 12</h6>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyright &copy; 2019 <img src="images/headlogo2.png" alt="logo"> All Rights Reserved.</p>
    </footer>
</body>

</html>
