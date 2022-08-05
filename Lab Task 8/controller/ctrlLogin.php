<?php 
$name  =  $pass = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data = file_get_contents ("../DATA/data.json");

    $data = json_decode ($data, true);

    foreach($data as $row)
    {
        if($row['username']==$_POST['uname'] && $row ['password'] == $_POST['pass'])
                {
                    $_SESSION['flag'] = 1;
                    $_SESSION['uname'] = $_POST['uname'];
                    $_SESSION['passkey'] = $row['password'];
                    header("location: Dashboard.php");

                    break;
                }
    }

    if($_SESSION['flag']!=1) $error = "Invalid Username or Password";

    $_COOKIE['us'] = "";
    $_COOKIE['password'] = "";

    if(isset($_POST['remember']))
    {

        setcookie('us', $_POST['uname'], time()+30);
        setcookie('password',$_POST['pass'], time()+30);
    }
    
}


?>