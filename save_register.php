<?php
$url = parse_url(getenv("mysql://bb339f20cedef2:f199c67b@us-cdbr-iron-east-04.cleardb.net/heroku_bec432d2e173be1?reconnect=true"));

//$conn = new mysqli("us-cdbr-iron-east-04.cleardb.net", "bb339f20cedef2", "f199c67b", "heroku_bec432d2e173be1");
$conn = new mysqli("localhost","","","test");
if(trim($_GET["txtUsername"]) == "")
{
    echo "Please input Username!";
    exit();
}

if(trim($_GET["txtPassword"]) == "")
{
    echo "Please input Password!";
    exit();
}

if($_GET["txtPassword"] != $_GET["txtConPassword"])
{
    echo "Password not Match!";
    exit();
}


$strSQL = "SELECT * FROM member WHERE Username = '".trim($_GET['txtUsername'])."' ";
$objQuery = $conn -> query($strSQL);

if($objQuery->fetch_assoc() == trim($_GET["txtUsername"]))
{
    echo "Username already exists!";
}
else
{


    if(isset($_GET["mytext"]) && is_array($_GET["mytext"] ) && isset($_GET["mytext2"]) && is_array($_GET["mytext2"] )){

        foreach (array_combine($_GET["mytext"] ,$_GET["mytext2"] )  as $mac => $room){

            $strSQL = "INSERT INTO member (Username,Password,GoogleAC,MAC,Room) VALUES ('".$_GET["txtUsername"]."', '".$_GET["txtPassword"]."', '".$_GET["txtGoogle"]."', '".$mac."', '".$room."')";
            $conn -> query($strSQL);

        }
        echo "Register Completed!<br>";

    }





    echo "<br> Go to <a href='login.php'>Login page</a>";

}
$conn->close();

?>