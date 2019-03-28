- First add library Psr4AutoloaderClass.php
- Create a file for fetch library from folder and class
- Create a class with namespace before ci_header. See Class in FolderClass

```php
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
```

How to Use :

```php
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

```