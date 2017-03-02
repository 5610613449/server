<!DOCTYPE html>
<html>

<head>
    <title>Free HTML5 Templates</title>
    <meta name="description" content="website description"/>
    <meta name="keywords" content="website keywords, website keywords"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
<div id="main">

    <header>
        <div id="strapline">
            <div id="welcome_slogan">
                <h3>Welcome To Free HTML5 <span>Streets</span></h3>
            </div><!--close welcome_slogan-->
        </div><!--close strapline-->
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="register.php">Register</a></li>

                    <?php

                    require_once __DIR__ . '/vendor/autoload.php';
                    const CLIENT_ID = '69866233096-grvk53js3ltg11j0qo5luf9c2a0pfvf1.apps.googleusercontent.com';
                    const CLIENT_SECRET = '_EXgNk3m4vHAYH7rcqaqn_7x';
                    const REDIRECT_URI = 'http://localhost';
                    session_start();
                    /*
                     * INITIALIZATION
                     *
                     * Create a google client object
                     * set the id,secret and redirect uri
                     * set the scope variables if required
                     * create google plus object
                     */
                    $client = new Google_Client();
                    $client->setClientId(CLIENT_ID);
                    $client->setClientSecret(CLIENT_SECRET);
                    $client->setRedirectUri(REDIRECT_URI);
                    $client->setScopes('email');
                    $plus = new Google_Service_Plus($client);
                    /*
                     * PROCESS
                     *
                     * A. Pre-check for logout
                     * B. Authentication and Access token
                     * C. Retrive Data
                     */
                    /*
                     * A. PRE-CHECK FOR LOGOUT
                     *
                     * Unset the session variable in order to logout if already logged in
                     */
                    if (isset($_REQUEST['logout'])) {
                        session_unset();
                    }
                    /*
                     * B. AUTHORIZATION AND ACCESS TOKEN
                     *
                     * If the request is a return url from the google server then
                     *  1. authenticate code
                     *  2. get the access token and store in session
                     *  3. redirect to same url to eleminate the url varaibles sent by google
                     */
                    if (isset($_GET['code'])) {
                        $client->authenticate($_GET['code']);
                        $_SESSION['access_token'] = $client->getAccessToken();
                        $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                        header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
                    }
                    /*
                     * C. RETRIVE DATA
                     *
                     * If access token if available in session
                     * load it to the client object and access the required profile data
                     */
                    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
                        $client->setAccessToken($_SESSION['access_token']);
                        $me = $plus->people->get('me');
                        // Get User data
                        $id = $me['id'];
                        $name = $me['displayName'];
                        $email = $me['emails'][0]['value'];
                        $profile_image_url = $me['image']['url'];
                        $cover_image_url = $me['cover']['coverPhoto']['url'];
                        $profile_url = $me['url'];
                    } else {
                        // get the login url
                        $authUrl = $client->createAuthUrl();
                    }
                    ?>

                    <!-- HTML CODE with Embeded PHP-->

                    <?php
                    /*
                     * If login url is there then display login button
                     * else print the retieved data
                    */
                    if (isset($authUrl)) {
                        echo "<a class='login' href='" . $authUrl . "'><img src='/images/signin_button.png' height='50px'/></a>";

                    } else {
                        /*print "ID: {$id} <br>";
                        print "Name: {$name} <br>";

                        print "Image : {$profile_image_url} <br>";
                        print "Cover  :{$cover_image_url} <br>";
                        print "Url: {$profile_url} <br><br>"; */
                        echo "<li><a>Email : {$email } <br></a></li>";
                        //$url = parse_url(getenv("mysql://bb339f20cedef2:f199c67b@us-cdbr-iron-east-04.cleardb.net/heroku_bec432d2e173be1?reconnect=true"));

                        //$conn = new mysqli("us-cdbr-iron-east-04.cleardb.net", "bb339f20cedef2", "f199c67b", "heroku_bec432d2e173be1");
                        //$conn = new mysqli("localhost", "", "", "test");


                        /*$strSQL = "SELECT account FROM member WHERE account = '" . $email . "' ";
                        $objQuery = $conn->query($strSQL);

                        if ($objQuery->fetch_assoc() == $email) {*/
                            ?> <a class='logout' href='?logout'>
                                <button>Logout</button>
                            </a>
                            <?php
                       /* } else {
                            echo "Wrong Email or Password";
                        }*/


                    }
                    ?>


                </ul>
            </div><!--close menubar-->
        </nav>
    </header>

    <div id="slideshow_container">
        <div class="slideshow">
            <ul class="slideshow">
                <li class="show"><img width="940" height="250" src="images/home_1.jpg"
                                      alt="&quot;Enter your caption here&quot;"/></li>
                <li><img width="940" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;"/>
                </li>
            </ul>
        </div><!--close slideshow-->
    </div><!--close slideshow_container-->

    <div id="site_content">

        <div class="sidebar_container">
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>New Website</h2>
                    <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Latest Update</h2>
                    <h3>March 2013</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
            <div class="sidebar">
                <div class="sidebar_item">
                    <h3>February 2013</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Contact</h2>
                    <p>Phone: +44 (0)1234 567891</p>
                    <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->
        </div><!--close sidebar_container-->

        <div id="content">
            <div class="content_item">
                <h1>Welcome To Your Website</h1>
                <p>This standards compliant, simple, fixed width website template is released as an 'open source' design
                    (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and
                    use it for anything you want (including modifying and amending it). If you wish to remove
                    the &ldquo;website template by Free HTML5 Templates&rdquo;, all I ask is for a donation of &pound;20.00
                    GBP. Please feel free to contact me with any questions you may have about my free HTML5 website
                    templates or bespoke work.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit
                    volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est,
                    vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie
                    at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna.
                    Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>

                <div class="content_container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam
                        facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>
                    <div class="button_small">
                        <a href="#">Read more</a>
                    </div><!--close button_small-->
                </div><!--close content_container-->
                <div class="content_container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam
                        facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>
                    <div class="button_small">
                        <a href="#">Read more</a>
                    </div><!--close button_small-->
                </div><!--close content_container-->

            </div><!--close content_item-->
        </div><!--close content-->
    </div><!--close site_content-->

    <footer>
        <a href="index.html">Home</a> | <a href="ourwork.html">Our Work</a> | <a
                href="testimonials.html">Testimonials</a> | <a href="projects.html">Projects</a> | <a
                href="contact.html">Contact</a><br/><br/>
        <a href="http://fotogrph.com">Images</a> | <a href="http://www.heartinternet.co.uk/vps/">Virtual Server</a> |
        website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>

</div><!--close main-->

<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>
