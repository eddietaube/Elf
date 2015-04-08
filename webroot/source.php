<?php 
/**
 * This is a Elf pagecontroller.
 *
 */
// Include the essential config-file which also creates the $elf variable with its defaults.
 
 
// Do it and store it all in variables in the Elf container.
$elf['title'] = "Hello World";
$elf['stylesheets'] = array('css/style.css','css/source.css');

 
$elf['stylesheets'] = array('css/style.css','css/source.css','css/normalize.css','css/skeleton.css');
  
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..')); 

$view = $source->View();
$currrentDir = $source->ReadCurrentDir();
$fileContent = $source->GetFileContent();
$breadcrumbFromPath = $source->GetBreadcrumbFromPath().$source->message;
$elf['main']  = 
<<<EOD
<div class="container">

<div class="row">
<div class="two columns">
$breadcrumbFromPath
$currrentDir
</div>
<div class="ten columns">
$fileContent
</div>
</div>
 
</div>
EOD;

