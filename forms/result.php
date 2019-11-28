
<?php
echo '<h5 class="pink-text center-align">'.$title.' '.$firstName.' '.$lastName.'</h5>';
if ($fileName) {
    echo '<h5 class="pink-text center-align">The file you uploaded is named <em>'.$fileName.'</em> and its extension is <em>'.$fileExtension.'</em></h5>';
}
?>
<div class="center">
    <a href="index.php" class="btn btn-small pink center">Back to the form</a>
</div>