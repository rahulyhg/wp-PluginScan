<?php
require("Header.php");
echo "\n 1- Import sites from txt file  \n";
echo " 2- Scan single site only  \n";
start1 : echo $green."\n    Choice :?> ";
$chos = trim(fgets(STDIN,1024));
echo "\n";
if($chos == 1){
echo "     Enter txt name : ";
$sitesF = fgets(STDIN,1024);
$sitesF = trim($sitesF);
system("clear");
print $banners[array_rand($banners)];
echo $end;
$contentS = file_get_contents("$sitesF");
$exp = explode("\n",$contentS);
$plugins = file_get_contents("plug.txt");
$explode = explode("\n",$plugins);
$counter1 = count($exp);
$counter2 = count($explode);
for($x=0;$x<$counter1;$x++){
$exp[$x] = trim($exp[$x]);	
	for($z=0;$z<$counter2;$z++){
$explode[$x] = trim($explode[$x]);	
$h = $exp[$x]."/wp-content/plugins/".$explode[$z];	
$srs = @file_get_contents("$h");
if(preg_match("/Index of/",$srs)){
$r = @fopen("result.txt","a+");
echo $red." [~] Target :$green $exp[$x] \n";	
fwrite($r," [~] Target : $exp[$x] ");
fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$z] \n";
fwrite($r," [~] plugin name : $exp[$x]");	
fwrite($r,"\n");	
echo $red." [+] Link :$green $h \n\n";
fwrite($r," [+] Link :$h");	
fwrite($r,"\n");	
}elseif(preg_match("/Directory/",$srs)){
$r = @fopen("result.txt","a+");
echo $red." [~] Target :$green $exp[$x] \n";	
fwrite($r," [~] Target : $exp[$x] ");
fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$z] \n";
fwrite($r," [~] plugin name : $exp[$x]");	
fwrite($r,"\n");	
echo $red." [+] Link :$green $h \n\n";
fwrite($r," [+] Link :$h");	
fwrite($r,"\n");

}elseif(preg_match("/readme/",$srs)){
$r = @fopen("result.txt","a+");
echo $red." [~] Target :$green $exp[$x] \n";	
fwrite($r," [~] Target : $exp[$x] ");
fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$z] \n";
fwrite($r," [~] plugin name : $exp[$x]");	
fwrite($r,"\n");	
echo $red." [+] Link :$green $h \n\n";
fwrite($r," [+] Link :$h");	
fwrite($r,"\n");
}
	}
	
}


// elseif
}elseif($chos == 2){
echo "\n     Target url : ";
$target = fgets(STDIN,1024);
$target = trim($target);
echo "\n"; 
system("clear");
print $banners[array_rand($banners)];
echo $end;
$plugins = @file_get_contents("big-plug.txt");
$explode = @explode("\n",$plugins);
$explode = @array_unique($explode);
$counter2 = count($explode);
for($x=0;$x<$counter2;$x++){	
$explode[$x] = @trim($explode[$x]);
$h = $target."/wp-content/plugins/".$explode[$x];	
$srs = @file_get_contents("$h");
if(@preg_match("/readme/",$srs)){
$r = @fopen("result.txt","a+");
@fwrite($r," [~] Target : $target");
@fwrite($r,"\n");
@fwrite($r," [~] plugin name :$explode[$x]");
@fwrite($r,"\n");
@fwrite($r," [+] Link :$h ");
@fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$x] \n";	
echo $red." [+] Link :$green $h \n\n";
}elseif(@preg_match("/Directory/",$srs)){
$r = @fopen("result.txt","a+");
@fwrite($r," [~] Target : $target");
@fwrite($r,"\n");
@fwrite($r," [~] plugin name :$explode[$x]");
@fwrite($r,"\n");
@fwrite($r," [+] Link :$h ");
@fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$x] \n";	
echo $red." [+] Link :$green $h \n\n";	
}elseif(@preg_match("/Index of/",$srs)){
$r = @fopen("result.txt","a+");
@fwrite($r," [~] Target : $target");
@fwrite($r,"\n");
@fwrite($r," [~] plugin name :$explode[$x]");
@fwrite($r,"\n");
@fwrite($r," [+] Link :$h ");
@fwrite($r,"\n");
echo $red." [~] plugin name :$green $explode[$x] \n";	
echo $red." [+] Link :$green $h \n\n";	
}
}

//else
}else{
echo $red."   Invild choice \n";
goto start1;
}




?>
