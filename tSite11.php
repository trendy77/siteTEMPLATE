<?php
if(!$IDENTIFIER){
$IDENTIFIER = 'tpau';
}
echo '<input type="hidden" name="identifier" value="'. $IDENTIFIER . '">';	
	$PATH = getSiteD($IDENTIFIER, 'path');
	$URL= getSiteD($IDENTIFIER, 'url');
	$ADDY = getSiteD($IDENTIFIER, 'addy');
	if (!$ADDY){ $ADDY == $URL; }
	$TIT= getSiteD($IDENTIFIER, 'tit');
	$FBAPPID=getSiteD($IDENTIFIER,'fbappid');
	$FBPAGEID=getSiteD($IDENTIFIER,'fbpageid');
	$HASH= getSiteD($IDENTIFIER, 'hash');
	$UA = getSiteD($IDENTIFIER, 'ua');
	$USER = getSiteD($IDENTIFIER,'user');

    function getSiteD($IDENTIFIER, $attr)
    {
		if ($IDENTIFIER =='fnr'){
	            switch ($attr)
                {
                    case 'path': 		return '/home/organ151/public_html/fakenews'; break;
                    case 'dbuser':		return 'organ_remote';	break;
                    case 'dbpass':		return 'organRemotePassword'; break;
                    case 'dbname':		return 'newOb'; break;
                    case 'url': 		return 'fakenewsregistry.org'; break;
                    case 'wpuser':		return 'theCreator'; break;
                    case 'wpemail': 	return 'thecreator@orgmy.biz'; break;
                    case 'wppass': 		return '5ekoeXMFRIXuJ&lWLA'; break;
                   	case 'tit': 		return 'Fake News Registry.org'; break;
                }
			}
			if ($IDENTIFIER =='vape'){
                switch ($attr)
				{
					case 'path': 		return '/home/organ151/public_html/fakenews'; break;
					case 'url': 		return 'fakenewsregistry.org'; break;
					case 'wpuser':		return 'theCreator'; break;
					case 'wpemail': 	return 'thecreator@orgmy.biz'; break;
					case 'wppass': 		return '5ekoeXMFRIXuJ&lWLA'; break;
					case 'tit': 		return 'Fake News Registry.org'; break;
					case 'path':			return '/home/organ151/public_html/vapedirectory';		break;
					case 'user':			return 'trendyvape';			break;
					case 'pass':			return 't0mzdez2!';			break;
					case 'addy':			return 'vapedirectory.co';			break;
					case 'ua':			return 'UA-84079763-9';			break;
					case 'hash':		return '@VapeDirectoryCo';break;
					case 'fbappid':   return '1829696163961982';break;
				}
			}
      	if ($IDENTIFIER =='orgbizes'){
				switch ($attr)
				{
					case 'path':		return '/home/organ151/public_html/es';		break;
					case 'user':		return 'elorganise';		break;
					case 'pass':			return 'arribaarribaFuego';			break;
					case 'addy':			return 'es.organisemybiz.com';			break;
					case 'ua':			return 'UA-84079763-10';			break;
					case 'fbappId' : return '1209167032497461'; break;
					case 'fbpageId': return '259565577769881'; break;
					case 'twitcnkey' : return '2vOkc55DN1UbX6NJjJawC7UNM'; break;
					case 'twitcnsrt' : return "tcXIP5xPmXqNRgmiLLBVoEfY1hyKiAaDhhbi4bzrmbB3Urdl6V"; break;
					case 'twitkey': return "817542417788194816-RpuUbfOb3j8hm5v0HRny4XcQ4Ffv0Lq"; break;
					case 'twitscrt': return "6NL6sJ30NN14L36GiODkA69yvn352hnQtkCtttItGAeI5";break;
				}
		}
		if ($IDENTIFIER =='orgbiz'){
				switch ($attr)
				{
					case 'path':			return '/home/organ151/public_html';			break;
					case 'wpuser':			return 'headlines';			break;
					case 'wppass':			return 'ExtJCJn%jRMzl1(5L5W*JBP#';			break;
					case 'addy':			return 'organisemybiz.com';			break;
					case 'ua':			return 'UA-84079763-6';			break;
					case 'fbappId' : return '1209167032497461'; break;
					case 'fbpageId' : return '259565577769881'; break;
					case 'twitcnkey' : return '2vOkc55DN1UbX6NJjJawC7UNM'; break;
					case 'twitcnsrt' : return "tcXIP5xPmXqNRgmiLLBVoEfY1hyKiAaDhhbi4bzrmbB3Urdl6V"; break;
					case 'twitkey' : return "817542417788194816-RpuUbfOb3j8hm5v0HRny4XcQ4Ffv0Lq"; break;
					case 'twitscrt' : return "6NL6sJ30NN14L36GiODkA69yvn352hnQtkCtttItGAeI5";break;
				}
		}
			if ($IDENTIFIER =='style'){
                switch ($attr)
                {
                    case 'path': 		return '/home/organ151/public_html/fakenews'; break;
                    case 'dbuser':		return 'organ_remote';	break;
                    case 'dbpass':		return 'organRemotePassword'; break;
                    case 'dbname':		return 'newOb'; break;
                    case 'url': 		return 'fakenewsregistry.org'; break;
                    case 'wpuser':		return 'theCreator'; break;
                    case 'wpemail': 	return 'thecreator@orgmy.biz'; break;
                    case 'wppass': 		return '5ekoeXMFRIXuJ&lWLA'; break;
                      }
				}
            if(($IDENTIFIER =='tpau') || ($IDENTIFIER =='tp')||($IDENTIFIER =='omb')){
				if (($attr == 'addy') || ($attr == 'url')  || ($attr == 'path')){
					if($IDENTIFIER =='tpau'){
					    switch ($attr)
						{
							case 'addy':		return 'trendypublishing.com.au';		break;
							case 'path':		return '/home/organ151/public_html/au';	break;
							case 'url':			return 'trendypublishing.com.au';		break;
						}
					} else if($IDENTIFIER =='omb'){
						switch ($attr)
						{
							case 'addy':		return 'orgmy.biz';		break;
							case 'url':			return 'orgmy.biz';		break;
							case 'path':		return '/home/organ151/public_html/ombiz';	break;
						}
					} else if($IDENTIFIER =='tp'){
					switch ($attr)
						{
							case 'addy':		return 'trendypublishing.com';		break;
							case 'url':			return 'trendypublishing.com';		break;
							case 'path':		return '/home/organ151/public_html/trendypublishing';	break;
						}
					}
				}
				switch ($attr)		// merged attributes for tp, tpau and omb - aka orgmy.biz
                {
					case 'wpuser':		return 'theCreator';			break;
					case 'wppass':		return 't0mzdez2!Q';			break;
					case 'ua':			return 'UA-84079763-11';			break;
					case 'fbpageid':	return '1209167032497461';				break;
					case 'fbappid':		return '867691370038214';		break;
					case 'hash':		return '@TrendyPublishin';			break;
					case 'tit' : 		return 'Trendy Publishing'; break;
					case 'twitcnsrt' : 	return ""; break;
					case 'twitkey': 	return ""; break;
					case 'twitscrt':	return ""; break;
				}
			}		
			if ($IDENTIFIER =='glo'){
				switch ($attr)
				{
					case 'tit' : return 'GlobeTravelSearch'; break;
					case 'path':			return '/home/organ151/public_html/travelsearch';			break;
					case 'user':			return 'trendyTravel';			break;
					case 'pass':			return 't0mzdez2!t0mzdez2!';			break;
					case 'addy':			return 'globetravelsearch.co';			break;
					case 'hash': 	return '@GlobeTravelSrch'; break;
					case 'ua':			return 'UA-84079763-13';	break;
					case 'fbscrt': return '598188680454c7e4fe3ace0d5267ed1d'; break;
					case 'fbcltk': return '6013598acf467d04ee5115b4a27421de'; break;
					case 'fbappid':			return '232122247192377';			break;
					case 'twitcnkey' : return 'uQvDVa4L687Bc4ushiKPS11m7'; break;
					case 'twitcnsrt' : return "4mmOskv7nGhWFSVRh5QI4rQjRMvGZCJO2apwPJlGNWTVJ3RrQm"; break;
					case 'twitkey' : return "848746022876598272-KvrowCYanCMFI7832EgyhyJYIlvtR03"; break;
					case 'twitscrt' : return "1eF9ZjfHYj7YPf0qfykJGsXPKYuBwyltJCmbbGnfgqn4N";break;
				}
	}
			if ($IDENTIFIER =='gov'){
				switch ($attr)
				{
					case 'tit' : return 'Govfeed.info'; break;
					case 'path':	return '/home/organ151/public_html/govnews';		break;
					case 'user':			return 'govfeed'; break;
					case 'pass':			return '0Q!L!Y34G^$kO8tQuS@INZg0';			break;
					case 'addy':			return 'govnews.info';			break;
					case 'ua':			return 'UA-84079763-8';			break;
					case 'fbappid':		return '1645038759139286';			break;
					case 'fbscrt':		return '06e7300c47ae4a4d1db42f87d0b2e186';			break;
					case 'fbappid':		return '1645038759139286';			break;
				}
			}
	}
    

    function getSiteDeets($attr)
    {
		$url = $_SERVER['SERVER_NAME'];
		switch ($idn)
        {
            case '@fnr':
                switch ($attr)
                {
                    case 'path': 		return '/home/organ151/public_html/fakenews'; break;
                    case 'dbuser':		return 'organ_remote';	break;
                    case 'dbpass':		return 'organRemotePassword'; break;
                    case 'dbname':		return 'newOb'; break;
                    case 'url': 		return 'fakenewsregistry.org'; break;
                    case 'wpuser':		return 'theCreator'; break;
                    case 'wpemail': 	return 'thecreator@orgmy.biz'; break;
                    case 'wppass': 		return '5ekoeXMFRIXuJ&lWLA'; break;
	                case 'tit': 		return 'Fake News Registry.org'; break;
                }
            break;
            case '@tp':
                switch ($attr)
                {
					case '$path':		return '/home/organ151/public_html/tp';		break;
					case '$user':		return 'theCreator';						break;
					case '$pass':		return 'Joker999!';							break;
					case '$addy':		return 'trendypublishing.com';				break;
					case '$ua':		return 'UA-84079763-11';					break;
					case '$gtm':	return '';									break;
					case '$fbpageid':return '1209167032497461';					break;
					case '$fbappid':return '867691370038214';		break;
					case '$hash':return '@TrendyPublishin';	break;
                }
            break;
			case '@ckww':
				switch ($attr)
				{
						case 'twitscrt':	return "6NL6sJ30NN14L36GiODkA69yvn352hnQtkCtttItGAeI5"; break;
				}
			break;
			case '@orgbizes':
				switch ($attr)
				{
					case 'path':		return '/home5/organli6/public_html/es';		break;
					case 'twitscrt':return "6NL6sJ30NN14L36GiODkA69yvn352hnQtkCtttItGAeI5"; break;
				}
			break;
	        case '@vape':
                switch ($attr)
                {
					case 'path':			return '/home/organ151/public_html/vapedirectory';		break;
					case 'user':			return 'trendyvape';			break;
					case 'pass':			return 't0mzdez2!';			break;
					case 'addy':			return 'vapedirectory.co';			break;
					case 'ua':			return 'UA-84079763-9';			break;
					case 'hash':		return '@VapeDirectoryCo';break;
					case 'fbappid':   return '1829696163961982';break;
				}
            break;
            case '@tp':
                switch ($attr)
                {

                }
            break;

			case '@glo':
				switch ($attr)
				{
					case 'path':			return '/home/organ151/public_html/travelsearch';			break;
					case 'user':			return 'trendyTravel';			break;
					case 'pass':			return 't0mzdez2!t0mzdez2!';			break;
					case 'addy':			return 'globetravelsearch.co';			break;
					case 'hash': 	return '@GlobeTravelSrch'; break;
					case 'ua':			return 'UA-84079763-13';	break;
					case 'fbscrt': return '598188680454c7e4fe3ace0d5267ed1d'; break;
					case 'fbcltk': return '6013598acf467d04ee5115b4a27421de'; break;
					case 'fbappid':			return '232122247192377';			break;
					case 'twitcnkey' : return 'uQvDVa4L687Bc4ushiKPS11m7'; break;
					case 'twitcnsrt' : return "4mmOskv7nGhWFSVRh5QI4rQjRMvGZCJO2apwPJlGNWTVJ3RrQm"; break;
					case 'twitkey' : return "848746022876598272-KvrowCYanCMFI7832EgyhyJYIlvtR03"; break;
					case 'twitscrt' : return "1eF9ZjfHYj7YPf0qfykJGsXPKYuBwyltJCmbbGnfgqn4N";break;
				}
			break;
		}
    }




function tHead($title,$blurb){
	echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
include ('header.php');
echo ' </head><body><header>';
include ('navi.php');
echo '<div class="parallax-container valign-wrapper">
   		<div class="parallax"><img src="/timg/9.jpg" alt="lib"></div>
				<div class="container black">
					<div class="section no-pad-bot black">
					<h1 class="header center white-text">' . $title . '</h1>
				 <br><br>
					<h4 style="font-family:tinyHands; src:("fonts/tinyHands.woff")" class="header center grey-text">'.$blurb.'</h4>
				 <br><br>
				 </div>
			</div>
		</div>
	</header>
	<main>
<div class="section">
<div class="container black">
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">';
}	

function tMain($content,$tfit,$tfif)
{		
	echo '</div>
      </div>
    </div>
    <div class="parallax"><img src="timg/b.jpg" alt="bottom"></div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
       	   <h4>Contact Us</h4>
          <p class="left-align light">'.$content .'</p>
		  </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
       
	   <h5 class="header col s12 light">'.$tfit.'</h5>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=trendypublish-20&marketplace=amazon&region=US&placement=B071KGRXRG&asins=B071KGRXRG&linkId=5843ad1e580c605eeb6e3c518802cc8c&show_border=true&link_opens_in_new_window=true"></iframe>
'. $tfif . '</div>
      </div>
    </div>';
}

function tFoot()
{
  echo '<footer class="container teal" id="footer">
    <div class="footer-copyright">
      <div class="container">';
        include('footer.php');	
	    echo '</div>
    </div>';
	include_once('js.php');
	echo '</body></html>';
}