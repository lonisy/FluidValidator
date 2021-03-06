<?php
/**
 * @author hollodotme
 */

namespace hollodotme\FluidValidator;

/**
 * Class CheckMode
 * @package hollodotme\FluidValidator
 */
abstract class CheckMode
{
	const CONTINUOUS         = 1;

	const STOP_ON_FIRST_FAIL = 2;
}