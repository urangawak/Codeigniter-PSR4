<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);
$arr=array(
	'Folder\Class1'=>APPPATH.DIRECTORY_SEPARATOR.'libraries/FolderClass1',
	'Folder\Class2'=>APPPATH.DIRECTORY_SEPARATOR.'libraries/FolderClass2',
);


include_once('Psr4AutoloaderClass.php');


$ps=new Psr4AutoloaderClass();
$ps->register();
foreach($arr as $namespace=>$file)
{
	$ps->addNamespace($namespace,$file,TRUE);
}
