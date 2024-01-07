<?php

require_once 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$lang = $_GET['lang'];
$text = $_GET['text'];
$tr = new GoogleTranslate($lang);
echo json_encode(["result"=>$tr->translate($text), "detect"=>$tr->getLastDetectedSource(),"devloper page"=> 'MoroccoAI']);
?>