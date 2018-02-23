<?php

$html_files = glob('*.html');

foreach ($html_files as $key => $html_file) {

	$php_file = str_replace('.html', '.php', $html_file);

	echo $html_file.' => '.$php_file.'<br>';

	rename($html_file, $php_file);
}

echo '<pre>';
print_r($html_files);
echo '</pre>';
