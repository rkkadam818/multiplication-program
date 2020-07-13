<?php

namespace rkadam01\Multiplication;
/**
 *
 */
class Multiplication
{
	public function getMultiplication() {
		$firstElement = array_shift($argv);
		if( false == ctype_digit(implode('',$argv))){
			return 'Please enter the valid parameters.';
		} else {
			return array_sum($argv);
		}
	}
}
?>