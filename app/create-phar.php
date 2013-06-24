<?php

$stub       = 'webserver_logpipe.php';
$projectDir = realpath(__DIR__ . '/..');

$phar = new Phar($projectDir . "/bin/logpipe.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "logpipe.phar");
$phar->buildFromDirectory($projectDir);
$phar->setStub($phar->createDefaultStub($stub));