<?php 
// findout hashtag from string;
function hashtag($string) {
	$hash = '#';
	$arr = explode(' ', $string);
	$i = 0;

	while ($i < count($arr)) {
		if (substr($arr[$i], 0, 1) === $hash) {
			$arr[$i] = "<a href='#'>{$arr[$i]}</a>";
		}
		$i++;
	}

	$string = implode(' ', $arr);
	return $string;
}

echo hashtag('Hello how are you Bangladesh? #visit #tour #bangladesh');

// create hash tag from string

function hashtagify($string) {
	$hash = '#';
	$arr = explode(' ', $string);
	$arr = implode('', $arr);
	$hasi =  $hash .= $arr;
	$hasi = "<a href='#'>{$hasi}</a>";
	return $hasi;
}

echo hashtagify('love joy');