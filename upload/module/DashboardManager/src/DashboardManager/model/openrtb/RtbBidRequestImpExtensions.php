<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace model\openrtb;

class RtbBidRequestImpExtensions {
	

	/*
	 * DOCUMENTATION:
	 * The attribute strictbannersize of type integer will be provided in the placeholder object 
	 * Impression.ext in the bid request as to convey following information beyond the standard 
	 * defined in the OpenRTB 2.0 specification: if 1, only a banner of exactly the size as 
	 * specified in Banner.w and Banner.h will be accepted. If 0 or omitted, a banner of the size 
	 * as specified or smaller will be accepte
	 */
	
	/*
	 * NOTES:
	 * Default is that the height and width of the banner size should exactly match the RTB bid request
	 */ 
	public $strictbannersize = 1;
	
}
