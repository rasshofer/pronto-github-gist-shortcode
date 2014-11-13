<?php

use Pronto\ShortcodeContainer;

ShortcodeContainer::add('gist', function($attributes) {
	$gist = array_shift($attributes);
	return '<script src="https://gist.github.com/'.$gist.'.js"></script>';
});

?>
