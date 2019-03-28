<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries'.DIRECTORY_SEPARATOR.'Autoloader.php');
use Folder\Class1;
use Folder\Class2;
class Welcome extends CI_Controller {

	public function index()
	{
		$classA=new \Folder\Class1\ClassA;
		echo $classA->test();
		echo '<br/>';
		$classB=new \Folder\Class1\ClassB;
		echo $classB->test();
		echo '<br/>';
		$classC=new \Folder\Class2\ClassC;
		echo $classC->test();
		echo '<br/>';
		$classD=new \Folder\Class2\ClassD;
		echo $classD->test();
	}
}
