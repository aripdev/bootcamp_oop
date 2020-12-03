<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
   ->files()
   ->name('*.php')
   ->in(__DIR__.'/app');

return new Sami($iterator,[
      'build_dir'=>'../../doc'
      ]);

/**
 * Current path vendor/bin
 * 
 * execute sami.php.bat update ..\..\config-doc.php
 */