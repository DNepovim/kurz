<?php
/*
PROMENNE
*/
$name = "Dominik"; // String
$number1 = 3; // Integer
$number2 = 349; // Integer
$number3 = 349; // Integer
$number4 = 4.5; // Float
$number5 = 0.3456; // Float
$number6 = -7.9; // Float
$isItTrue = false; // Bool
$isItTrue2 = false; // Bool
$colors = ["green", "yellow", "red"];
$number = [1, 3, 5, 5.7];
$mess = ["door", 4, 3.4, false, ["fray", "gray"]];
$people = [
	[
		"name" => "Dominik",
		"age" => 27,
		"gender" => "male",
		"isScout" => true
	],
	[
		"name" => "David",
		"age" => 29,
		"gender" => "male",
		"isScount" => false
	],
	[
		"name" => "Anezka",
		"age" => 31,
		"gender" => "female",
		"isScount" => false
	]
];
/*
PODMINKY
*/
/*
OPERATORY
vetsi nez         >
mensi nez         <
vetsi nebo rovno  >=
mensi nebo rovno  <=
rovna se          ==
nerovna se        !=
negace            !
*/
if ($name == "Karel") {
	echo "This is true";
} else if ($name == "Dominik") {
	echo "This is totaly true";
} else {
	echo "This is false";
}
echo "<br>";
switch ($name) {
	case "Karel":
		echo "I am Karel";
		break;
	case "Dominik":
	case "Ruprd":
		echo "I am Ruprd or Dominik";
		break;
	default:
		echo "I am nobody";
}
echo "<br>";
/*
CYKLY
*/
for ($i = 0; $i <= 5; $i++) {
	echo "Value of i is $i<br>";
}
foreach ($people as $person) {
	echo $person["name"] . " je " . $person["age"] . " stary.<br>";
}
// while
// do..while
?>
<nav class="head">
    <div class="head-float">
    	<?php for ($i = 0; $i < 3; $i++) { ?>
        	<a href="/"><img src="../images/Logo.png" alt="logo" class="logo"></a>
	<?php } ?>
    <ul class="navbar">
    	<?php $menu_items = [
		[
			"name" => "O nas",
			"link" => "/",
			"active" => false
		],
		[
			"name" => "Druzina",
			"link" => "/druzina",
			"active" => true
		],
		[
			"name" => "Akce",
			"link" => "/akce",
			"active" => false
		],
		[
			"name" => "Fotky",
			"link" => "/fotky",
			"active" => false
		],
		[
			"name" => "Odkazy",
			"link" => "/odkazy",
			"active" => false
		]
	];
	foreach ($menu_items as $item) {
	?>
        	<li class="navbar-item <?php if ($item["active"]) { ?> is-active <?php } ?>"><a href="<?php echo $item["link"]; ?>" class="navbar-link"><?php echo $item["name"]; ?></a></li>
	<?php } ?>
    </ul>
    <strong>
    	<?php
	echo date('d. m.');
	$current_date = date('d. m.');
	if ($current_date == "17. 11.") {
	   echo "Dnes je " . $current_date . " a to je statni svatek.";
	 } else {
	   echo "Dnes není státní svátek.";
	 }
	?>
    </strong>
    </div>
</nav>