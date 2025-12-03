<?php

	print "Build indul...<br>";
	$source = 'src/index.php';
	exec("php -l " . $source, $out, $ret);

	if ($ret === 0) {
		print "Szintaxis OK.<br>"; 
	} else {
		exit(1); 
	}

	if ( !is_dir('dist') )
		mkdir('dist');
		copy($source, 'dist/index.php');
		print "Build KÉSZ.<br>";

?>