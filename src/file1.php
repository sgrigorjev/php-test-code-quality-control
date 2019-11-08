<?php

namespace Core;

class Foo
{
	private $list=[];

	public function __construct() {$this->list =[];}

	public function f1($a)
	{
		if ( ! $a)
			$b =    1;
		elseif ($a=== 2) {$b = 2;}
		elseif ($a ===3) {
			$b = 3;
		} else if ($a === 4)
		{
			$b = 4;
		}

		return $b;
	}

	public function f2(){
		$arr =["e1", "e2"  ,"e3","e4","e5" ];
		return "[" . implode( ',', $arr)."]";

	}
}
