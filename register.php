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
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id"
      content="69866233096-grvk53js3ltg11j0qo5luf9c2a0pfvf1.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Slick slider css -->
<link href="css/skdslider.css" rel="stylesheet">
<!-- Font awesome css -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- smooth animate css file -->
<link rel="stylesheet" href="css/animate.css">
<!-- Main style css -->
<link rel="stylesheet" href="style.css">
<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID

        var x = 2; //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="input_fields_wrap"><ul><input type="text" name="mytext[]" placeholder="Your device MAC Address " required>  <input type="text" name="mytext2[]" placeholder="Room NO." required><a href="#" class="remove_field">Remove</a></ul></div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('ul').remove();
            x--;
        })
    });
</script>
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

                    <!-- BEGAIN PRELOADER -->
                    <div id="preloader">
                        <div id="status">&nbsp;</div>
                    </div>
                    <!-- END PRELOADER -->


                    <!-- START HEADER SECTION -->

                    <section id="featuresSection">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="features_ara">
                                        <h1>Register Form</h1> <br>
                                    </div>
                                    <!-- START REGISTER SECTION -->
                                    <form name="form1" method="get" action="save_register.php">

                                        <table>
                                            <div>
                                                <tr>
                                                    <td>Google Account :</td>
                                                    <td><input name="txtGoogle" type="text" id="txtGoogle" required>
                                                    </td>
                                                </tr>
                                            </div>
                                        </table>
                                        <div class="input_fields_wrap">
                                            <td>Device Information</td>
                                            <ul>
                                                <button class="add_field_button">+ </button>
                                                <input type="text" name="mytext[]" placeholder="Serial Number" required>
                                                <input type="text" name="mytext2[]" placeholder="Room NO." required>
                                            </ul>
                                        </div>
                                        <input type="submit" name="Submit" value="Ok">
                                    </form>
                                    <!-- END REGISTER SECTION -->


                                </div>
                            </div>
                        </div>

                    </section>

</body>
</html>




