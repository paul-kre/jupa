<?php 
require_once("../includes/initialize.php");

if(isset($_GET['p'])) $page->title($_GET['p']);
$page->description("This is the main description");

include_layout_template("head");

include_layout_template("body");

include_layout_template("footer");

