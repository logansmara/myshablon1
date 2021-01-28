<?php foreach ($previews as $preview): ?>
<h2><?= $preview->title ?></h2>
<?php
$content = str_replace("\n", "<br>", $preview->content);
?>
<p><?= $content ?></p>
<?php endforeach; ?>