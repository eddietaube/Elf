<?php 
include(__DIR__.'/config.php'); 
 
  
$elf['title'] = "Hello World";
$elf['header'] = "<img class='sitelogo' src='img/elf.png' alt='elf Logo'/>".CNavigation::GenerateMenu($menu);
$elf['main'] = "";
$elf['header'] .= 
<<<EOD
	<hr /> 
	 
	
	<span class='sitetitle'>Elf webbtemplate</span>
	<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
	 
EOD;


 
 if(isset($_GET["p"])){
 	$page = $_GET["p"];
	
	switch ($page) {
		case 'your page':
			include("yourpage.php");
			break;
	 
	 
		default:
			include("example.php");
			break;
	} 
 }else {
 	include("example.php");
 }
  
 
$elf['footer'] = 

<<<EOD
 <footer>
<div class="container">
<span class='sitefooter'> <a href='https://github.com/edtau/Elf.git'>ELF på github</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span>
 
</div>
</footer>
EOD;
 
  
include(ELF_THEME_PATH);