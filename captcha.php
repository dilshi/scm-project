<?php
session_start();
if(isset($_SESSION['my_captcha']))
{
unset($_SESSION['my_captcha']); 
}
$string="abcdefghijklmnopqrstuvwxyz1234567890";
$string= str_shuffle($string);
$random_text= substr($string,0,5); 
$_SESSION['my_captcha'] =$random_text; 
$im=imagecreatetruecolor(80,20) or die("Cannot Initialize Captcha");
$background_color=imagecolorallocate($im,204,204,204); 
$text_color=imagecolorallocate($im,0,255,0);     
imagestring($im,5,5,2,$random_text,$text_color);/*$_SESSION['my_captcha']*/
header("Content-type:image/png");
imagepng($im);
?>
