<?php
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "portfolio";
$titleSuffix = "";

switch ($params[1]) {

    case 'projects':
        $titleSuffix = ' | Projects';
        include_once "./Templates/projects.php";
        break;

    case 'bte':
        $titleSuffix = ' | bte';
        include_once "./Templates/bte.php";
        break;

    case 'contact';
        $titleSuffix = ' | contact';
        include_once "./Templates/contact.php";
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "./Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}