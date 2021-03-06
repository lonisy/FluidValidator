<?php
/**
 * @author hollodotme
 */

namespace hollodotme\FluidValidator\Interfaces;

/**
 * Interface ProvidesDataForValidation
 * @package hollodotme\FluidValidator\Interfaces
 */
interface ProvidesValuesToValidate
{
	/**
	 * @param mixed $var
	 *
	 * @return mixed
	 */
	public function getValueToValidate( $var );
}