<?php 
include "news.php";

if ($_SERVER["REQUEST_URI"] == "/") {
	include "homepage.php";
} else {
	$new;
	foreach ($news as $item) {
		if ($item["url"] == $_SERVER["REQUEST_URI"]) {
			$new = $item;
		}
	}
	include "new.php";
}

