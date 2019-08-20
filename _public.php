<?php
if (!defined('DC_RC_PATH')) { return; }
 
class publicGoogleAdsense
{
	public static function GoogleAdsense(&$w)
	{
		return '<script type="text/javascript"><!--
google_ad_client = "'.$w->client.'";
google_ad_slot = "'.$w->slot.'";
google_ad_width = '.$w->width.';
google_ad_height = '.$w->height.';
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
	}
}
?>