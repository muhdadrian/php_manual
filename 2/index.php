<?php 
echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; 
?>

<?php
echo '<br>';
echo '<br>';
?>

<!-- You can use the short echo tag to -->
<?= 'print this string' ?>

<?php
echo '<br>';
echo '<br>';
?>

<? echo 'this code is within short tags, but will only work '.
            'if short_open_tag is enabled'; ?>

// Short tags (third example above) are available by default but can be disabled either via the short_open_tag php.ini configuration file directive, or are disabled by default if PHP is built with the --disable-short-tags configuration. Look at note.txt