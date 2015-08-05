<?php

namespace TYPO3\CMS\Calajax\Hooks;

/**
 * *************************************************************
 * Copyright notice
 *
 * (c) 2010-2015 Mario Matzulla (mario(at)matzullas.de)
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 * *************************************************************
 */


class AdditionalFields {

	public function addAdditionalField(&$insertFields, &$eventService){
		if($eventService->rightsObj->isAllowedTo('edit','event','image')){
			if(is_array($eventService->controller->piVars['ajax_image'])){
				$insertFields['image'] = implode(',',$eventService->controller->piVars['ajax_image']);
			}
		}
	}
}

?>