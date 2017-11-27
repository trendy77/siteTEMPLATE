<?php

	function tPlat($title,$blurb, $img1,$col,$content,$tfit,$tfif,$col,$img2,$col2){
		if(!$col){ $col = 'black';};
		if(!$img1){ $img1 = '9.jpg';};
		if(!$img2){ $img2 = 'b.jpg';};
		if(!$title){ $title = 'TrendyPublishing';};
		if(!$tfit){ $tfit = '';};
		if(!$tfif){ $tfif = '';};
		if(!$col2){ $col2 = 'teal';};
		if(!$blurb){ $blurb = '...';};

		tHead($title,$blurb, $img1,$col);
		tMain($content,$tfit,$tfif,$col,$img2);
		tFoot($col2);
	}

	function tHead($title,$blurb, $img1,$col){
		echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
		include ('tHeader.php');
		echo ' </head><body><header>';
		include ('navi.php');
		echo '<div class="parallax-container valign-wrapper"><div class="parallax"><img src="/timg/' . $img1 . '" alt="p1"></div><div class="container black"><div class="section no-pad-bot black">
			<h1 class="header center white-text">' . $title . '</h1><br><br><h4 style="font-family:tinyHands; src:("fonts/tinyHands.woff")" class="header center grey-text">'.$blurb.'</h4><br><br>
			 </div></div></div></header><main>';
	}	

	function tMain($content,$tfit,$tfif,$col,$img2){		
		echo '<div class="section"><div class="container ' . $col . '"><div class="parallax-container valign-wrapper"><div class="section no-pad-bot"><div class="container">
	 <div class="row center"></div></div></div><div class="parallax"><img src="timg/' . $img2 . '" alt="p2"></div></div><div class="container"><div class="section"><div class="row">
	<div class="col s12 center"><h3><i class="mdi-content-send brown-text"></i></h3><p class="left-align light">'.$content .
	'</p></div></div></div></div><div class="parallax-container valign-wrapper"><div class="section no-pad-bot"><div class="container"><div class="row center">
	  <h5 class="header col s12 light">'.$tfit.'</h5>'. $tfif . '</div></div></div>';
	  }

function tFoot($col2){
  echo '<footer class="container ' . $col2 . '" id="footer"><div class="container">';			 //<div class="footer-main">
  include('footer.php');	
  echo '</div></footer>';												// also </div>';
	include_once('js.php');
	echo '</body></html>';
}