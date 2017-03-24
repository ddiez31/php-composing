<?php

function getContent() {
	if(isset($_GET['home'])) {
		include __DIR__.'/../pages/home.php';
	} if(empty($_GET)) {
		include __DIR__.'/../pages/home.php';
	} 
}

function getPart($name) {
		include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData() {
	$file = '../data/cs_figures.csv';
	$csv = file_get_contents($file, FILE_USE_INCLUDE_PATH);
    $arrayCsv = array_map("str_getcsv", explode("\n", $csv));
	foreach($arrayCsv as $key => $value) {
		if ($key > 0) {
			 echo '<div class="card">
            <div class="image">
                <img src="'.$value[5].'">
            </div>
			<div class="content">
                <div class="header">'.$value[0].'</div>
                <div class="meta">
                    <a>'.$value[2].'</a>
                </div>
                <div class="description">'.$value[3].'</div>
            </div>
			 <div class="extra content">
                <span class="right floated">Born in '.$value[1].'</span>
            </div>
        </div>';
		}
	}
}


            
           



?>
