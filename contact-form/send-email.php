<?php//----------------------Company Information---------------------$comany_name = "Nature Trails Unawatuna";$website_name = "www.naturetrailsunawatuna.com";$comConNumber = "+94 77 711 8616 /  +94 91 494 6666 ";$comEmail = "info@dreamroundtour.com";$from = 'info@dreamroundtour.com';//$comEmail = "info@islandwide.website";//$from = 'info@islandwide.website';//----------------------CAPTCHACODE---------------------session_start();$response = array();if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {    $response['status'] = 'incorrect';    $response['msg'] = 'Security Code is invalid';    echo json_encode($response);    exit();}//----------------------Visitor Information---------------------$visitor_name = $_POST['visitor_name'];$visitor_email = $_POST['visitor_email']; $find_us = $_POST['subject'];$subject = 'Contact Message - Nature Trails Unawatuna' ;$subject2 = 'Thank you - Nature Trails Unawatuna';$message = $_POST['message'];date_default_timezone_set('Asia/Colombo');$todayis = date("l, F j, Y, g:i a");$site_link = "http://" . $_SERVER['HTTP_HOST'];include("mail-template.php");// mandatory headers for email message, change if you need something different in your setting.$headers = "From: " . $from . "\r\n";$headers .= "Reply-To: " . $visitor_email . "\r\n";$headers .= "MIME-Version: 1.0\r\n";$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";$headers1 = "From: " . $from . "\r\n";$headers1 .= "Reply-To: " . $comEmail . "\r\n";$headers1 .= "MIME-Version: 1.0\r\n";$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";// Sending mailif (        mail($comEmail, $subject, $company_message, $headers) &&        mail($visitor_email, $subject2, $visitor_message, $headers1)) {    $response['status'] = 'correct';    $response['msg'] = "Your message has been sent successfully";//"Your message has been sent successfully"    echo json_encode($response);    exit();} else {    $response['status'] = 'correct';    $response['msg'] = "Could nod be sent your message";    echo json_encode($response);    exit();} 