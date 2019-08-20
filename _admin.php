<?php
if (!defined('DC_CONTEXT_ADMIN')) { return; }
 
$core->addBehavior('initWidgets',
	array('googleAdsense','initWidgets'));
 
class googleAdsense
{
	public static function initWidgets(&$w)
	{
		$w->create('GoogleAdsense',__('Google Adsense'),
			array('publicGoogleAdsense','GoogleAdsense'));
 
		$w->GoogleAdsense->setting('client',__('google_ad_client:'),
			'','text');
 
		$w->GoogleAdsense->setting('slot',__('google_ad_slot:'),
			'','text');
 
		$w->GoogleAdsense->setting('width',__('google_ad_width:'),
			'','text');
 
		$w->GoogleAdsense->setting('height',__('google_ad_height:'),
			'','text');
 
	}
}
?>