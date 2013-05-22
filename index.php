<?php
$doc = JFactory::getDocument();
$doc->_generator = NULL;
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/common.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/nav-gnb.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/2012.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main-new.css');

$doc->_scripts = NULL;
$doc->addScript("http://yandex.st/jquery/1.8.0/jquery.min.js");
$doc->addScript("http://yug-avto.ru/js/jquery-cycle/jquery.cycle.all.js");
$doc->addScript("templates/".$this->template."/js/js.js");

//var_dump($doc);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <jdoc:include type="head" />
	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<meta name='keywords' content=""/>
	<meta name='description' content=""/>
	
<link type="text/css" rel="stylesheet" href="/inc/datepicker.css" />

<script type="text/javascript" language="Javascript" src="http://yandex.st/jquery/fancybox/1.3.4/jquery.fancybox.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://yug-avto.ru/js/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" language="Javascript" src="/js/jquery.lazyload.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
<link type="text/css" rel="stylesheet" href="/inc/css/sunny/jquery-ui-1.9.1.custom.css" />

</head>
<body>

<!-- Yandex.Metrika counter 
<script type="text/javascript">
var yaParams = {/*Здесь параметры визита*/};
</script>

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter6251896 = new Ya.Metrika({id:6251896,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true,params:window.yaParams||{ }});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/6251896" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 /Yandex.Metrika counter -->

<div id="co_header">
	<div id="GNBLayer-new">
		<div id="section-header" class="clearFloat png_bg">
		
			<div class="wrap-header">
				<a href="/"><img src="templates/ya/images/ya-logo-b.png" alt="Группа компаний Юг-Авто" class="ya-logo" title="Группа компаний Юг-Авто"></a>

				
				<div id="nav-GNB">
					<jdoc:include type="modules" name="menu-top" style="xhtml" />
				</div>								
				<div class="brands">
					<a href="http://jaguar.yug-avto.ru" target="_blank"><div id="jaguar"></div></a>
					<a href="http://landrover.yug-avto.ru" target="_blank"><div id="land-rover"></div></a>
					<a href="http://cadillac.yug-avto.ru" target="_blank"><div id="cadillac"></div></a>
					<a href="http://opel.yug-avto.ru" target="_blank"><div id="opel"></div></a>
					<a href="http://vw.yug-avto.ru" target="_blank"><div id="vw"></div></a>
					<a href="http://skoda.avtokomplex.ru" target="_blank"><div id="skoda"></div></a>
					<a href="http://peugeot.yug-avto.ru" target="_blank"><div id="peugeot"></div></a>
					<a href="http://yug-avto.citroen.ru" target="_blank"><div id="citroen"></div></a>
					<a href="http://hnd.yug-avto.ru" target="_blank"><div id="honda"></div></a>
					<a href="http://lada.yug-avto.ru" target="_blank"><div id="lada"></div></a>
					<a href="http://hyundai.yug-avto.ru" target="_blank"><div id="hyundai"></div></a>
					<a href="http://chevrolet.yug-avto.ru" target="_blank"><div id="chevrolet" class="last"></div></a>
				</div>
				
			</div>
		</div>
	</div><!--// GNB (General Navigation Block)-->

</div>
<div class="slider">
	<jdoc:include type="modules" name="slider" style="none" /> 
</div>
<div id="section-visual" class="start ">

<div class="promo-top"></div>
<div class="promo">
	<div id="side-banner">
		<jdoc:include type="modules" name="promo" style="xhtml" /> 
	</div>
</div>
<div class="promo-shadow"></div>

<div id="cont-add">
	<jdoc:include type="component" />
</div>
</div>				
     <!--Footer Area-->
<div id="footer">
	<div id="section-footer">
		
		<div class="social">
			<div class='SocialShareBtns'>
				<noindex>
					<a href="http://www.facebook.com/sharer/sharer.php?u=http://yug-avto.ru/&amp;t=Группа компаний Юг-Авто – новые автомобили в Краснодаре, покупка/продажа, автосалоны." target='_blank' onClick="popupWin = window.open(this.href, 'Facebook Share', 'location,width=640,height=370,top=200,left=200'); popupWin.focus(); return false;"><img alt='' src='templates/ya/images/24fb.png' /></a>
					<a href='http://twitter.com/share?url=http://yug-avto.ru/&amp;text=%D0%93%D1%80%D1%83%D0%BF%D0%BF%D0%B0+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B9+%D0%AE%D0%B3-%D0%90%D0%B2%D1%82%D0%BE+%E2%80%93+%D0%BD%D0%BE%D0%B2%D1%8B%D0%B5+%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8+%D0%B2+%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B4%D0%B0%D1%80%D0%B5%2C+%D0%BF%D0%BE%D0%BA%D1%83%D0%BF%D0%BA%D0%B0%2F%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%2C+%D0%B0%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%D1%8B.&amp;via=yugavto&amp;related=yugavto' target='_blank' onClick=\"popupWin = window.open(this.href, 'Tweet', 'location,width=550,height=250,top=200,left=300'); popupWin.focus(); return false;\"><img src='templates/ya/images/24tw.png' alt=''/></a>
					<a href="http://vkontakte.ru/share.php?url=http://yug-avto.ru/" target='_blank' onClick=\"popupWin = window.open(this.href, 'Vkontakte Поделиться', 'location,width=550,height=400,top=200,left=300'); popupWin.focus(); return false;\"><img src='templates/ya/images/24vk.png' alt='' /></a>
				</noindex>
			</div>
			<p>Мы в социальных сетях: 
				<a href="http://www.facebook.com/yugavto" target="_blank">Facebook</a>, 
				<a href="http://vk.com/yugavto" target="_blank">ВКонтакте</a>, 
				<a href="https://twitter.com/yugavto" target="_blank">Twitter</a>, 
				<a href="http://www.youtube.com/user/webyugavto" target="_blank">YouTube</a>
			</p>
		</div>

		<!--Sitemap-->
		<div id="article-sitemap" class="clearFloat">
			<div class="column">
				<h2>АВТОМОБИЛИ</h2>
				<ul style="float: left; margin: 0px 70px 0px 0px;">
					<li><a href="http://cadillac.yug-avto.ru" target="_blank">Cadillac</a></li>
					<li><a href="http://chevrolet.yug-avto.ru" target="_blank">Chevrolet</a></li>
					<li><a href="http://yug-avto.citroen.ru" target="_blank">Citroёn</a></li>
					<li><a href="http://hnd.yug-avto.ru" target="_blank">Honda</a></li>
					<li><a href="http://hyundai.yug-avto.ru" target="_blank">Hyundai</a></li>
					<li><a href="http://jaguar.yug-avto.ru" target="_blank">Jaguar</a></li>
				</ul>
				<ul>
					<li><a href="http://lada.yug-avto.ru" target="_blank">LADA</a></li>
					<li><a href="http://landrover.yug-avto.ru" target="_blank">Land Rover</a></li>
					<li><a href="http://opel.yug-avto.ru" target="_blank">Opel</a></li>
					<li><a href="http://peugeot.yug-avto.ru" target="_blank">Peugeot</a></li>
					<li><a href="http://skoda.avtokomplex.ru" target="_blank">ŠKODA</a></li>
					<li><a href="http://vw.yug-avto.ru" target="_blank">Volkswagen</a></li>
				</ul>
			</div>
			<jdoc:include type="modules" name="menu-bottom" style="xhtml" />
		</div>
		<!--//Sitemap-->

		<!--footer-->
		<div class="seo_text clearFloat">
			<jdoc:include type="modules" name="seo" style="none" />
		</div>
		<div id="article-footer" class="clearFloat">
			<p>© 1997-2013 <a href="http://юг-авто.рф">&laquo;Юг-Авто&raquo;</a></p>
		</div>
		<!--//footer-->
	</div>
</div>
<!--//Footer Area-->

<!-- GetClicky START -->
<script type="text/javascript">
	var clicky_site_ids = clicky_site_ids || [];
	clicky_site_ids.push(100538116);
	(function() {
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = '//static.getclicky.com/js';
		( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
	})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100538116ns.gif" /></p></noscript>
<!-- GetClicky END -->

</body>