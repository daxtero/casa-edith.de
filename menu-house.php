<div class="span2 sidebar">
    <h2>Menü</h2>
    <ul class="nav nav-tabs nav-stacked">
        <li <?php if (!$content_file_exists || $site == 'home') {echo 'class="active"'; } ?> ><a href="/index.php?s=home&m=house">Home</a></li>
        <li <?php if ($site == 'main') {echo 'class="active"'; } ?> ><a href="/index.php?s=main&m=house">Das Haus</a></li>
        <li <?php if ($site == 'rooms') {echo 'class="active"'; } ?> ><a href="/index.php?s=rooms&m=house">Die Zimmer</a></li>
        <li <?php if ($site == 'drive') {echo 'class="active"'; } ?> ><a href="/index.php?s=drive&m=house">Die Anfahrt</a></li>
    </ul>
</div>