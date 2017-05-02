<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
$data = $_POST['data'];
//$data = 'Joan Rivers';

$string = file_get_contents("../json/comics.json");
$json_a = json_decode($string, true);

$dom = new DOMDocument('1.0', "UTF-8");

foreach ($json_a as $object) {
	if ($object['name'] === $data) {
		buildBox($object);
	}
}

function buildBox($object) {

$name    = $object['name'];
$id      = $object['id'];
$born    = $object['stats']['born'];
$mediums = $object['stats']['mediums'];
$active  = $object['stats']['years-active'];
$bio     = $object['bio'];
$died    = $object['stats']['died'];
$vid_link = $object['link'];
$vid_header = $object['link-header'];
$link_cap = $object['link-caption'];
$quote = $object['quote'];

if ($died != '') {
	$full_died = '<li><span class="color-c">Died:</span> '.$died.'</li>';
}

if ($vid_link != '') {
	$full_link = '<iframe width="100%" height="280px" style="margin-bottom: 1em" src="'.$vid_link.'?controls=0&amp;showinfo=0&amp;start=10" frameborder="0" allowfullscreen></iframe>';
}

echo <<<RESULT
<div class="light-box" id="$id-box">
	<div class="col12 color-b">
		<h1>$name</h1>
	</div>
	<div class="content">
		<div class="col5 text">
			<ul class="color-c">
				<li><span class="color-c">Born:</span> $born</li>
				$full_died
				<li><span class="color-c">Mediums:</span> $mediums</li>
				<li><span class="color-c">Years Active:</span> $active</li>
			</ul>
			<p>$bio</p>
		</div>
		<div class="media last">
			<h3 class="video-title color-c">$vid_header</h3>
			$full_link
			<p class="f-caption">$link_cap</p>
			<br><br>
			<p class="quote">"$quote" <br><br>- <span>$name</span></p>
			<br><br>
		</div>
	</div>
</div>
RESULT;
}

?>