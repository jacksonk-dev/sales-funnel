<?php
    include './php/sendMail.php'
?>
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="je-kaypro">
        <meta name="description" content="Looking for apartments, full houses, villas and any other property in Bahrain? We got you">
        <meta name="keywords" content="Real Estate, House, Villa, Apartment">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya|Cormorant+Upright|EB+Garamond|Josefin+Slab|Marck+Script|Niconne|Nixie+One&display=swap" />
        <link rel="shortcut icon" href="assets/images/design/logo.jpg">
        <meta property="image" content="assets/images/design/logo.jpg">
        <meta property="og:image" content="assets/images/design/logo.jpg">
        <meta property="og:image:type" content="assets/images/design/logo.jpg">
        <title>House With Me</title>
        <style>             
            @font-face {
                font-family: "Sail Regular";
                src: url("./assets/css/fonts/Sails/Sail-Regular.eot");
                src: 
                url("./assets/css/fonts/Sails/Sail-Regular.woff") format("woff"),
                url("./assets/css/fonts/Sails/Sail-Regular.ttf") format("truetype"),
                url("./assets/css/fonts/Sails/Sail-Regular.svg") format("svg");
            } 
            @font-face {
                font-family: "Brendan";
                src: url("./assets/css/fonts/Brendan/the_bredan.ttf");
                src: 
                url("./assets/css/fonts/Brendan/the_bredan.woff") format("woff"),
                url("./assets/css/fonts/Brendan/the_bredan.ttf") format("truetype"),
                url("./assets/css/fonts/Brendan/the_bredan.svg") format("svg");
            } 
            @font-face {
                font-family: "Sexy Beachy";
                src: url("./assets/css/fonts/sexy-beachy/sexy_beachy-webfont.ttf");
                src: 
                url("./assets/css/fonts/sexy-beachy/sexy_beachy-webfont.woff") format("woff"),
                url("./assets/css/fonts/sexy-beachy/sexy_beachy-webfont.ttf") format("truetype");
            }
            html {
                scroll-behavior: smooth;
            } 
            body {
                font-size: 18px;
                font-weight: 600;
                /* font-family: 'Cormorant Upright', serif; */
                font-family: 'Nixie One', cursive;
            }
            #header{
                background-image: url("assets/images/design/header.bg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            #title {
                margin: auto;
                padding-top: 16px;
                margin-bottom: 40px;
                width: fit-content;
            }
            #title h1 {
                font-family: "Sail Regular", fantasy;
                font-size: 2.8rem;
            }
            @media screen and (min-width: 780px) {
                #title h1 {
                    font-size: 5rem;
                }
            }
            .bg-green-transparent {
                background-color: rgba(1, 50, 32, 0.6);
            }
            .bg-black-transparent {
                background: rgba(0, 0, 0, 0.7);
                color: #fff;
            }
            form {
                padding: 32px;
                margin-top: 72px;
            }
            .form-control, .input-group-text {
                font-weight: bold;
            }
            .input-group-text {
                background-color: #165658;
                color: #fff;
            }
            @media screen and (min-width: 760px) {
                form {
                    margin-top: 0;
                }
            }
            form h3{
                font-family: Brendan;
                font-size: 3rem;
            }
            form input, select {
                /* width: 100%; */
                margin-bottom: 16px;
                padding: 4px;
            }
            form button{
                width: 100%;
                background: rgb(38, 148, 212);
                color: #fff;
                padding: 8px;
                border: 0;
            }
            .link-button {
                background: rgb(227, 230, 73);
                text-decoration: none;
                border: 1px solid #fff;
                color: #000;
                padding: 8px;
                display: inline-block;
                width: 300px;
                max-width: 100%;
            }
            .link-button:focus {
                text-decoration: none;
                color: #000;
            }
            .link-button:hover {
                text-decoration: none;
                color: #000;
            }
            a:hover {
                text-decoration: none;
            }
            .video-container {
                width: 100%
            }
            #property-grid {
                display: grid;
                grid-gap: 8px;
                margin: 16px;
            }
            @media screen and (min-width: 760px) {
                #property-grid {
                    grid-template-columns: 1fr 1fr 1fr;
                }
            }
            .img-container {
                display: flex;
                align-items: center;
                background-color: #000;
            }
            img {
                height: auto;
            }
            #convincing-note {
                padding: 32px;
            }
            #convincing-note .link-button {
                background-color: #165658;
                color: #fff;
            }
            #footer {
                background-color: #000;
                height: 144px;
                color: #fff;
                font-family: "Sexy Beachy";
                font-size: 64px;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div class="bg-black-transparent" style="padding-bottom: 32px">
                <div class="container">
                    <div id="title" class="text-center">
                        <h1>House With Me</h1>
                        <div>
                            <p>Find your dream property</p>
                            <a 
                                href="#application-form" 
                                class="link-button"
                            >
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p class="text-justify">
                                We help you find the property of your dreams.
                                Let us know what your preferences are, what your budget is
                                and let us do what we do. Sit back and relax
                            </p>
                            <div>
                                <video width="100%" height="300" controls>
                                    <source src="./assets/videos/add.mp4" type="video/mp4">
                                    <source src="./assets/videos/add2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <form 
                            method="POST" 
                            action="."
                            class="col-11 col-md-4 text-center bg-green-transparent"
                        >
                            <a name="application-form"></a>
                            <h3>
                                Apply Right Now
                            </h3>
                            <p>
                                Your dream property awaits you
                            </p>
                            <input 
                                type="text" 
                                name="fullName"
                                placeholder="Full Name" 
                                class="form-control"
                                required
                            />
                            <input 
                                type="email"
                                name="email"
                                placeholder="Email" 
                                class="form-control"
                                required
                            />
                            <input 
                                type="text" 
                                name="phone"
                                placeholder="Phone Number" 
                                class="form-control"
                            />
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Property</span>
                                </div>
                                <select name="property" class="form-control">
                                    <option>Select</option>
                                    <option>Villa</option>
                                    <option>Office</option>
                                    <option>Apartment</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">BHD</span>
                                </div>
                                <input 
                                    type="number" 
                                    name="budget"
                                    placeholder="Your Budget" 
                                    class="form-control"
                                />
                            </div>
                            <button>
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-11 col-lg-11 mx-auto">
                <div id="property-grid">
                    <?php
                        $properties = [1, 2, 3, 4, 5, 6, 7, 8];
                        foreach ($properties as $propNumber) {
                            $filePrefix = './assets/images/content/';
                            $file = '';
                            foreach (['.jpg', '.jpeg', '.gif', '.png'] as $ext) {
                                $testFile = $filePrefix.$propNumber.$ext;
                                if(file_exists($testFile)){
                                    $file = $testFile;
                                    break;
                                }
                            }
                    ?>
                    <div class="img-container">
                        <img src="<?php echo $file; ?>" width="100%" />
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="container">
                    <div id="convincing-note" class="text-center">
                        <h3>What are you waiting for?</h3>
                        <p>Submit your contact information. We will get back to you shortly</p>
                        <a class="link-button" href="#application-form">Submit Information</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="align-items-center justify-content-center d-flex">
            <p>Designed by <a target="_blank" href="https://je-kaypro.github.io">je-kaypro</a></p>
        </div>
    </body>
</html>