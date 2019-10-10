<?php

// define('NAMA','Aditya Muhammad Nurfauzi');

// echo NAMA;

// echo "<br>";
// const UMUR = 19;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Aditya';
// }

// echo Coba::NAMA;


// echo __LINE__;

// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();

class Coba{
	public $kelas = __CLASS__;

}
$obj = new Coba;
echo $obj->kelas;