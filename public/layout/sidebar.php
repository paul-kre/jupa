<?php


$viewLinks = [
    ['<span class="small">vom</span> Aussen', 'aussen'],
    ['<span class="small">zum</span> Innen', 'innen'],
    ['<span class="small">zur</span> Küche', 'kueche'],
    ['<span class="small">ins</span> Bad', 'bad'],
    ['<span class="small">mit</span> Einbauten', 'einbauten'],
    ['<span class="small">durch</span> Farbe <span class="small">ins</span> Licht', 'licht']
];

$pageLinks = [
    ['Konzept & Kontakt', ''],
    ['Ansichten', $viewLinks[0][1]]
];


function arrToString($arr=[]) {
    $str = '';
    $str .= '<a href="'.URL.$arr[1].'" class="vertical-center">';
    $str .= '<div class="vertical-el"><span>'.$arr[0].'</span></div></a>';
    return $str;
}


$linkString = '';
foreach ($pageLinks as $pageLink) {
    $linkString .= '<li>';
    $linkString .= arrToString($pageLink);
    if(strcmp($pageLink[0], "Ansichten") == 0) {
        $linkString .= '<ul>';
        foreach($viewLinks as $viewLink) {
            $linkString .= '<li>';
            $linkString .= arrToString($viewLink);
            $linkString .= '</li>';
        }
        $linkString .= '</ul>';
    }
    $linkString .= '</li>';
}

?>

<div id="sidebar">
    <header>
        <div id="logo">
            <img alt="Logo" src="<?php echo URL; ?>public/img/layout/logo.svg">
            <div class="header-title">
                Julia <strong>Paschos</strong><br>
                <span class="small">Architektur</span>
            </div>
            <a class="link-area" href="<?php echo URL; ?>"></a>
        </div>
    </header>
    <nav>
        <ul class="nav-main">
            <?php echo $linkString; ?>
        </ul>
    </nav>
</div>