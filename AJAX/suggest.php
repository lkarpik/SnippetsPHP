<?php
$people[] = "Steve";
$people[] = "Stefan";
$people[] = "Marek";
$people[] = "Katarzyna";
$people[] = "Ukasz";
$people[] = "Łukasz";
$people[] = "Leszek";

//get query string

$q = $_REQUEST['q'];

$suggestion = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;

?>