<div class="span2 sidebar">
    <h2>Menü</h2>
    <ul class="nav nav-tabs nav-stacked">
        <li <?php if (!$content_file_exists || $site == 'home') {echo 'class="active"'; } ?> ><a href="/index.php?s=home&m=house">Home</a></li>
        <li <?php if ($site == 'main') {echo 'class="active"'; } ?> ><a href="/index.php?s=main&m=house">Haus und Umgebung</a></li>
        <li <?php if ($site == 'rooms') {echo 'class="active"'; } ?> ><a href="/index.php?s=rooms&m=house">Zimmer</a></li>
        <li <?php if ($site == 'food') {echo 'class="active"'; } ?> ><a href="/index.php?s=food&m=house">Edith kocht</a></li>
        <li <?php if ($site == 'prices') {echo 'class="active"'; } ?> ><a href="/index.php?s=prices&m=house">Preise</a></li>
        <li <?php if ($site == 'drive') {echo 'class="active"'; } ?> ><a href="/index.php?s=drive&m=house">Anfahrt und Kontakt</a></li>
        <li <?php if ($site == 'drive') {echo 'class="active"'; } ?> ><a href="/index.php?s=main&m=sights">Sehenswertes und Ausflüge</a></li>
    </ul>
</div>