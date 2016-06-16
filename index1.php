<?php

class PostOffice{
	/*function mailFiler(){
		$fp=fopen("string.txt","r");
		fscanf($fp, "%s %s", $n, $str);
		fclose($fp);
		echo "$n $str";             
	}*/

	function mailFiler(){
		$filename="string.txt";
		$fp=fopen($filename,"r");
		$contents=fread($handle,filsize($filename));
		fclose($handle);             
	}


	function mailRegex(){
		$fp=fopen("string.txt","r");
		$standard_D = "/^([A-Za-z]+)$/";
		fscanf($fp, "%s %s", $n, $str);
		fclose($fp);
		echo "$n $str";
	}

	function spiltroad(){

	}
/*
	public function mailFiler(){
		$filename = ‘string.txt’;
		$fp = fopen($filename, ‘r’);
		fread($fp, iconv("UTF-8", "BIG5", "測試文件"));
		fclose($fp);                  
	}

	public function mailFiler(){
		$filename = ‘string.txt’;
		$fp = fopen($filename, ‘r’);
		fread($fp, iconv("UTF-8", "BIG5", "測試文件"));
		fclose($fp);                  
	}	
	*/
}




?>