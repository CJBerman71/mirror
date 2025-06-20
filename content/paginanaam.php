<?php
function getPageName(): string
{
    return $_GET['page'] ?? 'home';
}

$page = getPageName();

include 'pages/' . $page . '.php';

//echo"$page";
?>
