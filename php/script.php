<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
//$data = $_POST['data'];

$string = file_get_contents("../xml/comics.json");
$json_a = json_decode($string, true);

foreach ($json_a as $object) {

	$result = "<div class='light-box' id=".$object['id']."-box>";

	$result = $result.'<h1>'.$object['name'].'</h1>';

	$result = $result.'<ul><li>'.$object['stats']['born'].'</li><li>'.
					$object['stats']['mediums'].'</li><li>'.
					$object['stats']['born'].'</li></ul>';

	$result = $result.'<p class="bio">'.$object['bio'].'</p>';

	echo $result."</div>";
}


?>