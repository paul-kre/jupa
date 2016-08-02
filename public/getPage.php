<?php
require_once LIB_PATH."initialize.php";
global $activePage;
?>

<article class="view" id="<?php echo $activePage->urlname; ?>">


    <div class="page-title">
        <span><?php echo $activePage->nicename;?></span>
    </div>

<?php
$filePath = SITE_ROOT."public".DS."page".DS.$activePage->urlname.".php";
if(file_exists($filePath)) include $filePath;
?>

</article>
