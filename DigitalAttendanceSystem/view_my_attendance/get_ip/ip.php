<?php
if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}
echo "<center>
        <p>Your Ip Address Is: <font color='#ff9999'>".$ip."</font> </p>
    </center>";
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "<center>
        <p>Your Hostname Is: <font color='#ff9999'>".$host."</font> </p>
    </center>";
?>