<?php

class Foo
{
	private $list=[];

	public function __construct() {$this->list =[];}

	public function f1()
	{

		return "f1";
	}

	public function f2(){
		$arr =["e1", "e2"  ,"e3","e4","e5" ];
		return "[" . implode( ',', $arr)."]";

	}
}
