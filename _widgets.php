<?php
if (!defined('DC_RC_PATH')) { return; }
 
$core->addBehavior('initWidgets',
	array('googleAdsense','initWidgets'));
 
class googleAdsense
{
	public static function initWidgets(&$w)
	{
		$w->create('GoogleAdsense',__('Google Adsense'),
			array('publicGoogleAdsense','GoogleAdsense'));
	}
}
?>