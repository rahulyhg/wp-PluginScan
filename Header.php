<?php
$uname = php_uname();
if(preg_match("/Linux/",$uname)){
// if OS = linux do this command	
	system("clear");
	} else {
// else do this command	
		system("cls");
		}
#/////////////////////////////////////////////////////////|
#///////////////////////| End check |\\\\\\\\\\\\\\\\\\\\\|
#/////////////////////////////////////////////////////////|


#//////////////////////////////////////////////////////////|
#///////////////////////| Variables |\\\\\\\\\\\\\\\\\\\\\|
#//////////////////////////////////////////////////////////|
$version = "v1.0";
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$nbold = "\e[1;97m";
$banner1 = "
$green\----------------------------------\
 \   $red Name $yellow|$orange PluginsScan v1.0 $green      \        __
  \                                  \       | \
   >  $red Author $yellow|$orange MrSqar Hacker $green        >------|  \       ______
  /                                  /       --- \_____/**|_|_\____  |
 /      $red From $yellow|$orange Yemen  $green             /          \_______ --------- __>-}
/----------------------------------/              /  \_____|_____/   |
   $red Greetz $yellow | $orange KaHawk - ToRnaDo - ITGeeks $green             *        |
                                                            {0}MMMMMMMMMMMMMMMMMMMMMM,d88P'
    YMMMMMWW888888WWMMMMMMMMMMP''''    `'YMMMMMMMMMMMXMMMMMP
       `''YMMMMMMMMMMMMMP'''            mMMMm!XXXXX8888888e,
                                      ,d!!XXMM888888888888WW

                                                        \n";
$end =$red. "\n-==========================$white==========================$black==========================-\n".$green;
echo $banner1;
echo $end;
echo $white;
echo $bold."                              Wait ";
print ".";
sleep(1);
print ".";
sleep(1);
print ".";
sleep(1);
print ".";
sleep(1);
print ".";
sleep(1);
$uname = php_uname();
if(preg_match("/Linux/",$uname)){
// if OS = linux do this command	
	system("clear");
	} else {
// else do this command	
		system("cls");
		}
////////////////////////////////////////////////////////////////////////
$banners;
$banners[0] = $bold."
$red
  	 _____  _             _            _____                 
	|  __ \| |           (_)          / ____|                
	| |__) | |_   _  __ _ _ _ __  ___| (___   ___ __ _ _ __  
$white	|  ___/| | | | |/ _` | | '_ \/ __|\___ \ / __/ _` | '_ \ 
	| |    | | |_| | (_| | | | | \__ \____) | (_| (_| | | | |
$black	|_|    |_|\__,_|\__, |_|_| |_|___/_____/ \___\__,_|_| |_|
			   / |                                   
		         |___/ $green  By MrSqar                                 
";
$banners[1] = "
$red
       ___ _             _            __                  
      / _ \ |_   _  __ _(_)_ __  ___ / _\ ___ __ _ _ __   
$white     / /_)/ | | | |/ _` | | '_ \/ __|\ \ / __/ _` | '_ \  
    / ___/| | |_| | (_| | | | | \__ \_\ \ (_| (_| | | | | 
$black    \/    |_|\__,_|\__, |_|_| |_|___/\__/\___\__,_|_| |_| 
                   |___/ $green  By MrSqar                              
";
$banners[2] = "
$red
        ____  __            _            _____                     
       / __ \/ /_  ______ _(_)___  _____/ ___/_________ _____      
$white      / /_/ / / / / / __ `/ / __ \/ ___/\__ \/ ___/ __ `/ __ \     
     / ____/ / /_/ / /_/ / / / / (__  )___/ / /__/ /_/ / / / /     
$black    /_/   /_/\__,_/\__, /_/_/ /_/____//____/\___/\__,_/_/ /_/      
                  /____/ $green By MrSqar                                        
";
  print $banners[array_rand($banners)];
  echo $end;
