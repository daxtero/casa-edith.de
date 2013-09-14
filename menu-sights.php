<div class="span2 sidebar">
    <h2>Menü</h2>
    <ul class="nav nav-tabs nav-stacked">
        <li <?php if (!$content_file_exists || $site == 'main') {echo 'class="active"'; } ?> ><a href="/index.php?s=main&m=sights">Übersicht</a></li>
        <li <?php if ($site == 'belluno') {echo 'class="active"'; } ?> ><a href="/index.php?s=belluno&m=sights">Belluno</a></li>
        <li <?php if ($site == 'feltre') {echo 'class="active"'; } ?> ><a href="/index.php?s=feltre&m=sights">Feltre</a></li>
        <li <?php if ($site == 'lagodelmis') {echo 'class="active"'; } ?> ><a href="/index.php?s=lagodelmis&m=sights">Lago del Mis</a></li>
        <li <?php if ($site == 'soffia') {echo 'class="active"'; } ?> ><a href="/index.php?s=soffia&m=sights">Die Fälle von Soffia</a></li>
        <li <?php if ($site == 'cadini') {echo 'class="active"'; } ?> ><a href="/index.php?s=cadini&m=sights">Cadini</a></li>
        <li <?php if ($site == 'venedig') {echo 'class="active"'; } ?> ><a href="/index.php?s=venedig&m=sights">Venedig</a></li>
        <li <?php if ($site == 'garda') {echo 'class="active"'; } ?> ><a href="/index.php?s=garda&m=sights">Gardasee</a></li>
        <li <?php if ($site == 'cortina') {echo 'class="active"'; } ?> ><a href="/index.php?s=cortina&m=sights">Cortina d' Ampezzo</a></li>
    </ul>
</div>