<?php
$numwords = $_POST['numwords'] ?: "4";
$numspec = $_POST['numspec'] ?: "0";
$numnum = $_POST['numnum'] ?: "0";
$hyphensep = $_POST['hyphen'];
$allcaps = $_POST['allcaps'];
/* special chars */
$specials = array("!", "#", "$", "%", "^", "&", "*", "?");
shuffle($specials);
$specialpw = array_slice($specials, 0, $numspec);
/* numbers */
$numbers = range(0, 99);
shuffle($numbers);
$numpw = array_slice($numbers, 0, $numnum);
shuffle($numpw);
/* words */
$words = array("mode",	"context",	"communication",	"failure",	"poetry",	"chest",	"description",	"refrigerator",	"revenue",	"finding");
shuffle($words);
$wordspw = array_slice($words, 0, $numwords);
/* combine options into one array */
$total_obj = count($numpw)+count($specialpw)+count($wordspw);

$passwordcomps = array_merge($numpw, $specialpw, $wordspw);
shuffle($passwordcomps);
/* account for checkboxes*/
$hyphen_separated = implode("-", $passwordcomps);
$passreg = implode(" ", $passwordcomps);
?>
