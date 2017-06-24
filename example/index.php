<?php

	use Rypsx\LaravelBackupFolder\Lbf;

	require __DIR__ . '/../vendor/autoload.php';

	try {
		$source = '/data/toBackup/';
		$dest = '/data/toRestore/';
	    $lbf = new Lbf($source, $dest, true);

	} catch (\Exception $e) {
	    print $e->getMessage();
	}

	var_dump($lbf);
