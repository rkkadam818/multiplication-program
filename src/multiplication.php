<?php

namespace rkadam01\Multiplication;
/**
 *
 */
class Multiplication
{
	public function getMultiplication( $data ) {
		$firstElement = array_shift($data);
		if( false == ctype_digit(implode('',$data))){
			return 'Please enter the valid parameters.';
		} else {
			return array_sum($data);
		}
	}
}
?>