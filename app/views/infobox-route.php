<?
$steps = array(
    'manifest'   => _('Grunddaten'),
    'details'    => _('Weitere Angaben'),
    'assets'     => _('Zus�tzliche Dateien'),
    'navigation' => _('Navigation'),
    'icon'       => _('Icon'),
    'polyfill'   => _('Kompatibilit�t'),
);
?>
<ul class="steps">
<? foreach ($steps as $action => $title): ?>
    <li class="<? if ($_SESSION['plugin-generator']['passed'][$action]) echo 'passed'; ?><? if ($step == $action) echo ' current'; ?>">
        <a href="<?= $controller->url_for('generator', $action) ?>"><?= $title ?></a>
    </li>
<? endforeach; ?>
</ul>
