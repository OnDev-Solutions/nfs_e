<?php

//Usado somente para gerar as classes do WSDL

require __DIR__ . '/../vendor/autoload.php';

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$generator = new Generator();
$generator->generate(
    new Config(array(
        'inputFile' => 'https://homolog.invoicy.com.br/arecepcao.aspx?wsdl',
        'outputDir' => 'src/invoicy'
    ))
);
