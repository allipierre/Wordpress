<?php
namespace TYPO3\CMS\Extbase\Validation\Validator;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Validator for DateTime objects.
 *
 * @api
 */
class DateTimeValidator extends AbstractValidator {

	/**
	 * Checks if the given value is a valid DateTime object.
	 *
	 * If at least one error occurred, the result is FALSE.
	 *
	 * @param mixed $value The value that should be validated
	 * @return boolean TRUE if the value is valid, FALSE if an error occurred
	 */
	public function isValid($value) {
		$this->errors = array();
		if ($value instanceof \DateTime) {
			return;
		}
		$this->addError(
			$this->translateErrorMessage(
				'validator.datetime.notvalid',
				'extbase',
				array(
					gettype($value)
				)
			), 1238087674, array(gettype($value)));
	}
}
