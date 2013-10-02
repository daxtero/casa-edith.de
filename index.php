<?php

include_once("config.php");

header('Content-Type: text/html; charset=UTF-8');
$menu = $_REQUEST['m'];
$site = $_REQUEST['s'];

if (!$menu) {
    $menu = 'house';
}
if (!$site) {
    $site = 'home';
}
$content_file_exists = file_exists($menu . '-' . $site . '.php');

function include_extra_meta($menu, $site)
{

    if ($menu == 'house' && $site == 'drive') {
        return '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script><script type="text/javascript" src="js/house-drive.js"></script>';
    }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Casa Edith</title>

    <base href="<?php echo $base; ?>">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="css/casa-edit.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            $("a.grouped_elements").fancybox({
                'transitionIn'		: 'elastic',
                'transitionOut'		: 'elastic',
                'titlePosition' 	: 'over',
                'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Bild: ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; &nbsp; ' + title : '') + '</span>';
                }
            });

        });

    </script>
    <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />


    <?php echo include_extra_meta($menu, $site); ?>

</head>
<body>
<div id="wrap" class="container">
    <h1 class="logo schnoerkel">Casa Edith</h1>

    <div class="navbar navbar-inverse">
        <div class="navbar-inner nav-collapse" style="height: auto;">
            <ul class="nav">
                <li <?php if (!$content_file_exists || $menu == 'house') {
                    echo 'class="active"';
                } ?> >
                    <a href="/index.php?s=home&m=house">Home</a>
                </li>
            </ul>
        </div>
    </div>

    <?php
    if (file_exists('menu-' . $menu . '.php')) {
        include_once('menu-' . $menu . '.php');
    } else {
        include_once('menu-house.php');
    }
    ?>

    <div id="content" class="row-fluid">

        <?php
        if ($content_file_exists) {
            include_once($menu . '-' . $site . '.php');
        } else {
            include_once('house-main.php');
        }
        ?>

    </div>
</div>
</body>
</html>