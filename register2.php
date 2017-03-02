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
                    <li><a href="ourwork.html">Our Work</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="projects.html">Projects</a></li>




                    <li><a href="/register2.php">Register</a></li>
                </ul>
            </div><!--close menubar-->
        </nav>
    </header>

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
                    $(wrapper).append('<div class="input_fields_wrap"><ul><input type="text" name="mytext[]" placeholder="Your device MAC Address " required>  <input type="text" name="mytext2[]" placeholder="Room NO." required><a href="#" class="remove_field">Remove</a></ul></div>');
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
    <table>
        <tr>
            <td>Google Account :</td>
            <td><input name="txtGoogle" type="text" id="txtGoogle" required></td>
        </tr>
        <tr>
            <td></td>

        </tr>

    </table>
    <div class="input_fields_wrap">
        <td>Device Information</td>
        <ul>
            <button class="add_field_button">+</button>
            <ul><button class="add_field_button">+</button><input type="text" name="mytext[]" placeholder="Your device MAC Address " required>  <input type="text" name="mytext2[]" placeholder="Room NO." required> </ul>
    </div>
    <input type="submit" name="Submit" value="Ok">
    </form>
    </body>
</div><!--close site_content-->




</div><!--close main-->

<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>