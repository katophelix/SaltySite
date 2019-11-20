/*
*   Turin (HTML)
*   Copyright 2015, Limitless
*   www.limitless.company
*/


var windowHeight;
var windowWidth;
var settings;
var retina = false;

settings = {
	enableAnimations: true,
	enableLoader: true,
	portfolioAllText: "All",
	portfolioEnableHeader: true,
	portfolioEnableDetails: true,
	portfolioEnableFullscreen: true,
	portfolioEnableSharing: true,
	portfolioItemsPerPage: 20,
}

function loadPortfolio(e){(void 0!=e||null!=e)&&(currentSelector=e);var t=$("section.portfolio"),i=t.find(".grid > .content");i.attr("data-width",i.width()),t.css("min-height",windowHeight);var a=t.find(".filter .albums .content"),o=t.find(".filter .order .content");if(!a.children("select").length){a.append("<select></select>");var s=a.find("select");a.find("li").each(function(){var e=$(this).text(),t=$(this).attr("data-album");s.append($(this).hasClass("selected")?"<option data-album='"+t+"' selected>"+e+"</option>":"<option data-album='"+t+"'>"+e+"</option>")}),a.find("select").change(function(){loadPortfolio("select")})}var r;r="select"==currentSelector?a.find("select").find("option:selected").attr("data-album"):a.find("li.selected").attr("data-album");var l=!0;currentAlbum==r?l=!1:currentAlbum=r;var n=o.find("li.selected").attr("data-type");void 0===n&&(n="masonry"),t.removeClass("list masonry grid");var d=!0;currentOrder==n?d=!1:currentOrder=n,(l||d)&&i.find(".row").remove(),(l||d)&&i.find(".file").removeClass("visible active awake"),"all"==r?i.children(".file").addClass("active"):i.children(".file").each(function(){var e=$(this).find("span[data-album]").attr("data-album");e==r?$(this).addClass("active"):$(this).removeClass("active selected")});var c=settings.portfolioItemsPerPage,f=parseInt(i.children(".awake").length),v=parseInt(i.children(".active").length),p=f+c;p>v&&(p=v);for(var h=f;p>h;h++){var u=i.find(".active").eq(h),m=u.find("span[data-album]").attr("data-album");(m==r||"all"==r)&&u.addClass("selected")}t.find(".more.row").remove();var w='<svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a"><stop stop-color="#fff" stop-opacity="0" offset="0%"/><stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/><stop stop-color="#fff" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><g transform="translate(1 1)"><path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2"><animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" /></path><circle fill="#fff" cx="36" cy="18" r="1"><animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" /></circle></g></g></svg>';t.find(".grid").after("<div class='portfolio-loading row'><div class='loading-icon'>"+w+"</div></div>");var g=0;i.children(".selected").each(function(){{var e=$(this),a=$(this).find("span[data-type]").attr("data-type"),o=$(this).find("span[data-source]").attr("data-source");$("<img />").attr("src",o).load(function(){if(this.complete&&"undefined"!=typeof this.naturalWidth&&0!=this.naturalWidth){var o=this.naturalHeight,s=this.src,r=this.naturalWidth;e.css("background-image","url("+s+")"),e.addClass("awake"),e.attr("data-width",r).attr("data-height",o),e.addClass(a)}else console.log("("+this.src+") is broken :'(");if(g+=1,g==i.children(".selected").length){var l=i.children(".selected"),d=parseInt(i.attr("data-item-height")),c=0,p=i.attr("data-width"),h=0;0==i.find(".row").length&&i.append("<div class='row'></div>"),i.find(".row").length==i.find(".row.full").length?i.append("<div class='row'></div>"):i.find(".row").last().find(".file").each(function(){h+=parseInt($(this).attr("itemWidthRatio"))});var u=0;l.each(function(){var e=$(this),a=(e.find("span[data-source]").attr("data-source"),e.attr("data-width")),o=e.attr("data-height"),s=d*(a/o),r=a/d*100;r-=c,e.attr("itemWidthRatio",s).css("width",r);var l=p/h;if("masonry"==n){var f=1.5;if(0==u&&(f=2),l>f&&p>479){e.removeClass("selected");var v=e[0].outerHTML;i.find(".row").last().append(v),h+=s}else{h=s,e.removeClass("selected");var v=e[0].outerHTML;i.find(".row").last().append(v);var m=0;i.find(".row").last().find(".file").each(function(){m+=parseInt($(this).attr("itemWidthRatio"))});var w=m-p;p>m&&(w=p-m),i.find(".row").last().find(".file").each(function(){var e=parseInt($(this).attr("itemWidthRatio")),t=w*(e/m),i=e-t;p>m&&(i=e+t);var a=i/p*100;$(this).css("width",a+"%"),$(this).attr("data-width-adapted",i)}),i.find(".row").last().addClass("full"),i.append("<div class='row'></div>"),u+=1}}else{var f=0;"grid"==n&&(f=4),"list"==n&&(f=1),t.addClass(n);var g=i.find(".row").last().find(".file").length;if(f>g&&p>479){e.removeClass("selected");var v=e[0].outerHTML;i.find(".row").last().append(v)}else{i.find(".row").last().addClass("full"),i.append("<div class='row'></div>"),u+=1,e.removeClass("selected");var v=e[0].outerHTML;i.find(".row").last().append(v)}}}),i.find(".row").each(function(){$(this).find("div").removeClass("awake active"),$(this).find("div").addClass("view","slow","easeOutBack");var e="<div class='overlay'></div>";$(this).find(".video").append(e),$(this).find(".youtube").append(e),$(this).find(".vimeo").append(e),0==$(this).find("div").length&&$(this).remove(),$(this).find(".file").click(function(){previewImage($(this))})}),t.find(".portfolio-loading").remove(),f=parseInt(i.children(".awake").length),v=parseInt(i.children(".active").length),f==v?i.find(".row").last().addClass("full"):(t.find(".more.row").length||t.find(".grid").after("<div class='more row'><button class='button icon icon-more dark'></button></div>"),t.find(".row.more button").click(function(){loadPortfolio()})),firstLoad&&loadURL(),firstLoad=!1}})}})}function previewImage(e){function t(){var e=$.magnificPopup.instance;e.close()}function i(){$(".work-preview .frame").hasClass("full")?($(".work-preview .frame").css("height",windowHeight-130),$(".work-preview .frame").removeClass("full")):($(".work-preview .frame").css("height",windowHeight),$(".work-preview .frame").addClass("full"))}function a(){if(d>0){d--;{var e,t=$("section.portfolio .grid .full .file.view").eq(d),a=t.find(".properties span[data-source]").attr("data-source"),o=t.find(".properties span[data-type]").attr("data-type"),s=t.find(".properties span[data-url]").attr("data-url"),r=t.find(".properties span[data-caption]").attr("data-caption");t.find(".properties span[data-album]").attr("data-album")}if("image"==o&&(e="<div class='frame row' style='height:"+p+"px'>",e+="<div class='image' style='background-image: url("+a+")'></div>",e+="<div class='full-screen'></div></div>"),("video"==o||"youtube"==o||"vimeo"==o)&&(e="<div class='frame row' style='height:"+p+"px'>",e+="<div class='player'></div>",e+="<div class='full-screen'></div></div>"),$(".work-preview .frame").replaceWith(e),"youtube"==o||"vimeo"==o||"video"==o){var l=$(".work-preview .frame .player").width(),n=$(".work-preview .frame .player").height();if("video"===o)var f="<video autoplay controls poster='"+a+"'><source src='"+s+"' type='video/mp4'></video>";else if("youtube"===o)var f='<iframe width="'+l+'" height="'+n+'" src="//www.youtube.com/embed/'+s+'?rel=0" frameborder="0" allowfullscreen></iframe>';else if("vimeo"===o)var f='<iframe src="//player.vimeo.com/video/'+s+'?autoplay=1;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="'+l+'" height="'+n+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';$(".work-preview .frame .player").html(f)}var r="<div class='caption one-half column'><h3 class='title'>"+r+"</h3></div>";$(".work-preview .caption").replaceWith(r);var v="<div class='details one-half column'>";if(t.find(".details span").each(function(){"album"!=$(this).attr("data-title")&&"date"!=$(this).attr("data-title")&&(v+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),v+="</div>",$(".work-preview .meta > .details").replaceWith(v),v="<div class='details'>",t.find(".details span").each(function(){("album"==$(this).attr("data-title")||"date"==$(this).attr("data-title"))&&(v+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),v+="</div>",$(".work-preview .meta .links .details").replaceWith(v),settings.portfolioEnableSharing){var h=window.location.href,u=h+"?f="+a;fixSharing(u)}else $(".work-preview .social-links").addClass("disabled");0==d&&$(".work-preview .nav .prev").addClass("disabled"),c>d&&$(".work-preview .nav .next").removeClass("disabled"),$(".work-preview .full-screen").click(function(){i()}),$(".work-preview .frame").mousemove(function(){$(".work-preview .frame .full-screen").addClass("active")}),$(".work-preview .frame").mousestop(900,function(){$(".work-preview .frame .full-screen").removeClass("active")})}}function o(){if(c-1>d){d++;{var e=$("section.portfolio .grid .full .file.view").eq(d),t=e.find(".properties span[data-source]").attr("data-source"),a=e.find(".properties span[data-type]").attr("data-type"),o=e.find(".properties span[data-url]").attr("data-url"),s=e.find(".properties span[data-caption]").attr("data-caption");e.find(".properties span[data-album]").attr("data-album")}if("image"==a&&(v="<div class='frame row' style='height:"+p+"px'>",v+="<div class='image' style='background-image: url("+t+")'></div>",v+="<div class='full-screen'></div></div>"),("video"==a||"youtube"==a||"vimeo"==a)&&(v="<div class='frame row' style='height:"+p+"px'>",v+="<div class='player'></div>",v+="<div class='full-screen'></div></div>"),$(".work-preview .frame").replaceWith(v),"youtube"==a||"vimeo"==a||"video"==a){var r=$(".work-preview .frame .player").width(),l=$(".work-preview .frame .player").height();if("video"===a)var n="<video autoplay controls poster='"+t+"'><source src='"+o+"' type='video/mp4'></video>";else if("youtube"===a)var n='<iframe width="'+r+'" height="'+l+'" src="//www.youtube.com/embed/'+o+'?rel=0" frameborder="0" allowfullscreen></iframe>';else if("vimeo"===a)var n='<iframe src="//player.vimeo.com/video/'+o+'?autoplay=1;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="'+r+'" height="'+l+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';$(".work-preview .frame .player").html(n)}var s="<div class='caption one-half column'><h3 class='title'>"+s+"</h3></div>";$(".work-preview .caption").replaceWith(s);var f="<div class='details one-half column'>";if(e.find(".details span").each(function(){"album"!=$(this).attr("data-title")&&"date"!=$(this).attr("data-title")&&(f+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),f+="</div>",$(".work-preview .meta > .details").replaceWith(f),f="<div class='details'>",e.find(".details span").each(function(){("album"==$(this).attr("data-title")||"date"==$(this).attr("data-title"))&&(f+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),f+="</div>",$(".work-preview .meta .links .details").replaceWith(f),settings.portfolioEnableSharing){var h=window.location.href,u=h+"?f="+t;fixSharing(u)}else $(".work-preview .social-links").addClass("disabled");0==!d&&$(".work-preview .nav .prev").removeClass("disabled"),d==c-1&&$(".work-preview .nav .next").addClass("disabled"),$(".work-preview .full-screen").click(function(){i()}),$(".work-preview .frame").mousemove(function(){$(".work-preview .frame .full-screen").addClass("active")}),$(".work-preview .frame").mousestop(900,function(){$(".work-preview .frame .full-screen").removeClass("active")})}}var e=e,s=e.find(".properties span[data-source]").attr("data-source"),r=e.find(".properties span[data-type]").attr("data-type"),l=e.find(".properties span[data-url]").attr("data-url"),n=e.find(".properties span[data-caption]").attr("data-caption"),d=(e.find(".properties span[data-album]").attr("data-album"),$("section.portfolio .grid .full .file.view").index(e)),c=$("section.portfolio .grid .full .file.view").length,f=70;(settings.portfolioEnableHeader||settings.portfolioEnableDetails)&&(f=130);var v,p=windowHeight-f;"image"==r&&(v="<div class='frame row' style='height:"+p+"px'>",v+="<div class='image' style='background-image: url("+s+")'></div>",v+="<div class='full-screen'></div></div>"),("video"==r||"youtube"==r||"vimeo"==r)&&(v="<div class='frame row' style='height:"+p+"px'>",v+="<div class='player'></div>",v+="<div class='full-screen'></div></div>");var h="<div class='head row'><div class='caption one-half column'><h3 class='title'>"+n+"</h3></div><div class='nav one-half column'><div class='prev'></div><div class='close'></div><div class='next'></div></div></div>",u="<div class='row'><div class='devider'></div></div>",m="<div class='meta row'><div class='details one-half column'>";e.find(".details span").each(function(){"album"!=$(this).attr("data-title")&&"date"!=$(this).attr("data-title")&&(m+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),m+="</div><div class='links one-half column'><div class='details'>",e.find(".details span").each(function(){("album"==$(this).attr("data-title")||"date"==$(this).attr("data-title"))&&(m+="<div class='detail'><p class='name'>"+$(this).attr("data-title")+"</p><p class='value'>"+$(this).text()+"</p></div>")}),m+="</div><div class='social-links'><div><p class='name'>Share</p></div><div class='social facebook'></div><div class='social twitter'></div><div class='social google'></div></div></div>";var w=v;if(settings.portfolioEnableHeader&&(w+=h),settings.portfolioEnableDetails&&settings.portfolioEnableHeader&&(w+=u),settings.portfolioEnableDetails&&(w+=m),$.magnificPopup.open({items:{src:"<div class='work-preview'><div class='container'>"+w+"</div></div>",type:"inline"}}),$(".mfp-close").remove(),0==d&&$(".work-preview .prev").addClass("disabled"),d==c-1&&$(".work-preview .nav .next").addClass("disabled"),settings.portfolioEnableSharing){var g=window.location.href,b=g+"?f="+s;fixSharing(b)}else $(".work-preview .social-links").addClass("disabled");if("youtube"==r||"vimeo"==r||"video"==r){var k=$(".work-preview .frame .player").width(),y=$(".work-preview .frame .player").height();if("video"===r)var C="<video autoplay controls poster='"+s+"'><source src='"+l+"' type='video/mp4'></video>";else if("youtube"===r)var C='<iframe width="'+k+'" height="'+y+'" src="//www.youtube.com/embed/'+l+'?rel=0" frameborder="0" allowfullscreen></iframe>';else if("vimeo"===r)var C='<iframe src="//player.vimeo.com/video/'+l+'?autoplay=1;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="'+k+'" height="'+y+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';$(".work-preview .frame .player").html(C)}settings.portfolioEnableFullscreen||$(".work-preview .frame .full-screen").addClass("hidden"),$(".work-preview .frame").mousemove(function(){$(".work-preview .frame .full-screen").addClass("active")}),$(".work-preview .frame").mousestop(900,function(){$(".work-preview .frame .full-screen").removeClass("active")}),$(".work-preview .close").click(function(){t()}),$(".work-preview .full-screen").click(function(){i()}),$(".work-preview .prev").click(function(){a()}),$(".work-preview .next").click(function(){o()}),$(".work-preview .frame").on("swipeleft",function(){o()}),$(".work-preview .frame").on("swiperight",function(){a()}),$(document).keydown(function(e){var t=e.keyCode?e.keyCode:e.which;"37"==t&&a()}),$(document).keydown(function(e){var t=e.keyCode?e.keyCode:e.which;"39"==t&&o()})}function fixSharing(e){var e=e;$(".work-preview .social-links .facebook").click(function(){window.open("https://www.facebook.com/sharer/sharer.php?u="+e,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),$(".work-preview .social-links .twitter").click(function(){window.open("https://twitter.com/home?status="+e,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),$(".work-preview .social-links .google").click(function(){window.open("https://plus.google.com/share?url="+e,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),$(".work-preview .social-links .email").click(function(){window.open("mailto:?body="+e,"_parent")})}function loadURL(){var e=getUrlParameter("f");if(""==!e){var t=/%2F/gi;e=e.replace(t,"/");var i=$("span[data-source='"+e+"']"),a=i.parents(".file.view");1==a.length?previewImage(a):console.log("The file you are looking for doesn't exist :(")}else console.log("There was no file parameters.")}function playLoader(){if(settings.enableLoader){var e='<svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a"><stop stop-color="#fff" stop-opacity="0" offset="0%"/><stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/><stop stop-color="#fff" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><g transform="translate(1 1)"><path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2"><animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" /></path><circle fill="#fff" cx="36" cy="18" r="1"><animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" /></circle></g></g></svg>';$("body").append("<div class='loading'><div class='loading-icon'>"+e+"</div></div>"),$(".loading").delay(1e3).fadeOut(1e3,function(){$("body > .wrapper").animate({opacity:1},1e3),$("body > .loading").remove()})}else $("body > .wrapper").css("opacity",1)}function playAnimations(){if(settings.enableAnimations){var e=3e3;$(".animated").each(function(){var t=$(this),i=t.offset().top,a=windowHeight;t.css("opacity",0),a>i?(setTimeout(function(){t.addClass("fadeIn"),t.removeAttr("style")},e),e+=400):t.waypoint(function(){setTimeout(function(){t.addClass("fadeIn"),t.removeAttr("style")},400)},{offset:"100"})})}}function adjustSizes(){windowHeight=$(window).height(),windowWidth=$(window).width(),$(".fullscreen").css("height",windowHeight),$("div.work-preview .frame.full").css("height",windowHeight),adjustVideo(),$(".vertical-center").each(function(){$(this).css("margin-top",($(this).parent().height()-$(this).height())/2)}),$("nav.navigation .menu").css("margin-top",(windowHeight-$("nav.navigation .menu").height()-$("nav.navigation .header").height()-140-$("nav.navigation .links").height())/2),$("section.page").each(function(){var e=$(this).find(".content"),t=e.height()+132;t<windowHeight&&e.css("padding-top",(windowHeight-e.height())/2)});var e=$("section.portfolio"),t=e.find(".grid .content");t.attr("data-item-height",300),windowWidth<767&&t.attr("data-item-height",200),$(".background.video").each(function(){var e=windowHeight,t=windowWidth,i=t/e;if(i>16/9){var a=t*(16/9);$(this).find("video").css("width",t),$(this).find("video").css("height",a);var o=($(this).find("video").height()-e)/2;$(this).find("video").css("margin-top","-"+o+"px"),$(this).find("video").css("margin-left","0px")}else{var a=e*(16/9);$(this).find("video").css("height",e),$(this).find("video").css("width",a);var o=($(this).find("video").width()-t)/2;$(this).find("video").css("margin-top","0px"),$(this).find("video").css("margin-left","-"+o+"px")}})}function adjustVideo(){$(".js-video").each(function(){var e=$(this).attr("data-poster");""==!e&&$(this).css("background-image","url("+e+")")})}function playVideo(e){var t=e.attr("data-type"),i=e.attr("data-url"),a=e.attr("data-poster");if("video"==t){var o="<video autoplay poster='"+a+"'><source src='"+i+"' type='video/mp4'></video>";e.html(o);var o=e.height(),s=e.width(),r=s/o;if(r>16/9){var l=s*(16/9);e.find("video").css("width",s),e.find("video").css("height",l);var n=(e.find("video").height()-o)/2;e.find("video").css("margin-top","-"+n+"px"),e.find("video").css("margin-left","0px")}else{var l=o*(16/9);e.find("video").css("height",o),e.find("video").css("width",l);var n=(e.find("video").width()-s)/2;e.find("video").css("margin-top","0px"),e.find("video").css("margin-left","-"+n+"px")}}else if("youtube"==t){var o="<iframe src='https://www.youtube.com/embed/"+i+"?showinfo=0&controls=0&rel=0&color=black&autoplay=1' frameborder='0'></iframe>";e.html(o)}var d=e.parents(".item"),c=d.find(".controls");c.addClass("active")}function getUrlParameter(e){for(var t=window.location.search.substring(1),i=t.split("&"),a=0;a<i.length;a++){var o=i[a].split("=");if(o[0]==e)return o[1]}}jQuery(document).ready(function(e){"use strict";var t="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)",i="undefined"==typeof exports?window:exports;i.devicePixelRatio>1&&i.matchMedia&&i.matchMedia(t).matches&&(retina=!0),e(".background.image").each(function(){{var t=e(this).attr("data-url");e(this).attr("data-type")}return void 0==t?!1:void e(this).css("background-image","url("+t+")")}),e(".background.video").each(function(){var t=e(this).attr("data-url"),i=e(this).attr("data-poster");if(void 0==t)return!1;var a="<video autoplay loop poster='"+i+"'><source src='"+t+"' type='video/mp4'></video>";e(this).html(a)}),e(".background").each(function(){e(this).hasClass("overlay-dark")&&e(this).append("<div class='overlay-dark'></div>"),e(this).hasClass("overlay-light")&&e(this).append("<div class='overlay-light'></div>")}),e("a[href^='#']").click(function(t){t.preventDefault(),e("html,body").stop().animate({scrollTop:e(e(this).attr("href")).position().top-80},"slow")}),e("nav.navigation .header .close").click(function(){e("nav.navigation").removeClass("active"),adjustSizes()}),e("header.header .menu").append("<div class='select'></div><div class='toggle'></div>"),e("header.header .select").click(function(){e("header.header").toggleClass("active"),playAnimations(),e("nav.navigation").toggleClass("active"),adjustSizes()}),e("section.landing").hasClass("slider")&&e("section.landing.slider").flexslider({animation:"fade",animationLoop:!0,animationSpeed:1500,controlNav:!0,directionNav:!1,easing:"easeOutBack",pauseOnHover:!1,selector:".slides > .slide",slideshow:!0});var a=e("section.portfolio");if(a.length>0){if(!a.find(".filter .content ul .all").length){var o=a.find(".filter .albums .content ul");o.prepend("<li data-album='all' class='all selected'><span>"+settings.portfolioAllText+"</span></li>"),a.find(".filter .albums span.selected").text(settings.portfolioAllText)}e("section.portfolio.filterbar .filter .albums li").click(function(){e(this).hasClass("selected")||(e(this).addClass("selected").siblings().removeClass("selected"),loadPortfolio("filterbar"))}),e("section.portfolio.toolbar .filter .albums span.selected, section.portfolio.toolbar .filter .order span.selected").click(function(){var t=e("section.portfolio.toolbar .grid"),i=e(this).parent().find("ul");t.hasClass("blurred")?i.hasClass("active")?(i.removeClass("active"),setTimeout(function(){i.removeClass("visible")},600),t.removeClass("blurred")):(e("section.portfolio.toolbar .filter ul").removeClass("active"),e("section.portfolio.toolbar .filter ul").removeClass("visible"),i.addClass("visible"),setTimeout(function(){i.addClass("active")},100)):(t.addClass("blurred"),i.addClass("visible"),setTimeout(function(){i.addClass("active")},100))}),e("section.portfolio.toolbar .filter .albums li span").click(function(){if(e(this).parent().hasClass("selected"))e("section.portfolio.toolbar .grid").removeClass("blurred"),e("section.portfolio.toolbar .filter .albums ul").removeClass("active");else{var t=e(this).text(),i=e(this).parent();e("section.portfolio.toolbar .filter .albums span.selected").text(t),i.addClass("selected").siblings().removeClass("selected"),e("section.portfolio.toolbar .grid").removeClass("blurred"),e("section.portfolio.toolbar .filter .albums ul").removeClass("active"),loadPortfolio("toolbar")}}),e("section.portfolio.toolbar .filter .order li span").click(function(){if(e(this).parent().hasClass("selected")){e("section.portfolio.toolbar .grid").removeClass("blurred").addClass(i),e("section.portfolio.toolbar .filter .order ul").removeClass("active")}else{var t=e(this).text(),i=e(this).parent().attr("data-type"),a=e(this).parent();e("section.portfolio.toolbar .filter .order span.selected").text(t),a.addClass("selected").siblings().removeClass("selected");{e("section.portfolio.toolbar .grid").removeClass("blurred"),e("section.portfolio.toolbar .filter .order ul").removeClass("active")}loadPortfolio("toolbar")}}),e("section.portfolio.sidebar .filter .albums li").click(function(){(void 0!=e(this).attr("data-album")||null!=e(this).attr("data-album"))&&(e(this).hasClass("selected")||(e(this).addClass("selected").siblings().removeClass("selected"),loadPortfolio("sidebar")))})}e("section.social-sharing .facebook").click(function(){var t=e(location).attr("href");window.open("https://www.facebook.com/sharer/sharer.php?u="+t,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),e("section.social-sharing .twitter").click(function(){var t=e(location).attr("href");window.open("https://twitter.com/home?status="+t,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),e("section.social-sharing .google").click(function(){var t=e(location).attr("href");window.open("https://plus.google.com/share?url="+t,"Share","width=600, height=400, status=no, toolbar=no, menubar=no")}),e("section.social-sharing .email").click(function(){var t=e(location).attr("href");window.open("mailto:?body="+t,"_parent")})}),$(window).load(function(){adjustSizes(),loadPortfolio(),playLoader(),playAnimations()}),$(window).resize(function(){adjustSizes()});var currentAlbum,currentOrder,currentSelector,firstLoad=!0;!function(e){function t(){var t=this,i=e(this).data("mousestop");this.movement=!0,i.timeToStop&&(this.timeToStopTimer=window.setTimeout(function(){t.movement=!1,window.clearTimeout(t.timer)},i.timeToStop))}function i(){window.clearTimeout(this.timer),window.clearTimeout(this.timeToStopTimer)}function a(){var t=e(this),i=t.data("mousestop");this.movement&&(window.clearTimeout(this.timer),this.timer=window.setTimeout(function(){t.trigger("mousestop")},i.delay))}function o(t){return e.isNumeric(t)?t={delay:t}:"object"!=typeof t&&(t={}),e.extend({},e.fn.mousestop.defaults,t)}e.event.special.mousestop={setup:function(s){e(this).data("mousestop",o(s)).bind("mouseenter.mousestop",t).bind("mouseleave.mousestop",i).bind("mousemove.mousestop",a)},teardown:function(){e(this).removeData("mousestop").unbind(".mousestop")}},e.fn.mousestop=function(e,t){return"function"==typeof e&&(t=e),arguments.length>0?this.bind("mousestop",e,t):this.trigger("mousestop")},e.fn.mousestop.defaults={delay:300,timeToStop:null}}(jQuery);



/**
 * jquery.gridrotator.js v1.1.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {
	
	'use strict';

	/*
	* debouncedresize: special jQuery event that happens once after a window resize
	*
	* latest version and complete README available on Github:
	* https://github.com/louisremi/jquery-smartresize/blob/master/jquery.debouncedresize.js
	*
	* Copyright 2011 @louis_remi
	* Licensed under the MIT license.
	*/
	var $event = $.event,
	$special,
	resizeTimeout;

	$special = $event.special.debouncedresize = {
		setup: function() {
			$( this ).on( "resize", $special.handler );
		},
		teardown: function() {
			$( this ).off( "resize", $special.handler );
		},
		handler: function( event, execAsap ) {
			// Save the context
			var context = this,
				args = arguments,
				dispatch = function() {
					// set correct event type
					event.type = "debouncedresize";
					$event.dispatch.apply( context, args );
				};

			if ( resizeTimeout ) {
				clearTimeout( resizeTimeout );
			}

			execAsap ?
				dispatch() :
				resizeTimeout = setTimeout( dispatch, $special.threshold );
		},
		threshold: 100
	};

	// http://www.hardcode.nl/subcategory_1/article_317-array-shuffle-function
	Array.prototype.shuffle = function() {
		var i=this.length,p,t;
		while (i--) {
			p = Math.floor(Math.random()*i);
			t = this[i];
			this[i]=this[p];
			this[p]=t;
		}
		return this;
	};

	// HTML5 PageVisibility API
	// http://www.html5rocks.com/en/tutorials/pagevisibility/intro/
	// by Joe Marini (@joemarini)
	function getHiddenProp(){
		var prefixes = ['webkit','moz','ms','o'];

		// if 'hidden' is natively supported just return it
		if ('hidden' in document) return 'hidden';

		// otherwise loop over all the known prefixes until we find one
		for (var i = 0; i < prefixes.length; i++){
			if ((prefixes[i] + 'Hidden') in document) 
				return prefixes[i] + 'Hidden';
		}

		// otherwise it's not supported
		return null;
	}
	function isHidden() {
		var prop = getHiddenProp();
		if (!prop) return false;

		return document[prop];
	}

	function isEmpty( obj ) {
		return Object.keys(obj).length === 0;
	}

	// global
	var $window = $( window ),
		Modernizr = window.Modernizr;

	$.GridRotator = function( options, element ) {
		
		this.$el = $( element );
		if( Modernizr.backgroundsize ) {

			var self = this;
			this.$el.addClass( 'ri-grid-loading' );
			this._init( options );

		}
		
	};

	// the options
	$.GridRotator.defaults = {
		// number of rows
		rows : 4,
		// number of columns 
		columns : 10,
		w1024 : { rows : 3, columns : 8 },
		w768 : {rows : 3,columns : 7 },
		w480 : {rows : 3,columns : 5 },
		w320 : {rows : 2,columns : 4 },
		w240 : {rows : 2,columns : 3 },
		// step: number of items that are replaced at the same time
		// random || [some number]
		// note: for performance issues, the number "can't" be > options.maxStep
		step : 'random',
		// change it as you wish..
		maxStep : 3,
		// prevent user to click the items
		preventClick : true,
		// animation type
		// showHide || fadeInOut || 
		// slideLeft || slideRight || slideTop || slideBottom || 
		// rotateBottom || rotateLeft || rotateRight || rotateTop || 
		// scale ||
		// rotate3d ||
		// rotateLeftScale || rotateRightScale || rotateTopScale || rotateBottomScale || 
		// random
		animType : 'random',
		// animation speed
		animSpeed : 800,
		// animation easings
		animEasingOut : 'linear',
		animEasingIn: 'linear',
		// the item(s) will be replaced every 3 seconds
		// note: for performance issues, the time "can't" be < 300 ms
		interval : 3000,
		// if false the animations will not start
		// use false if onhover is true for example
		slideshow : true,
		// if true the items will switch when hovered
		onhover : false,
		// ids of elements that shouldn't change
		nochange : []
	};

	$.GridRotator.prototype = {

		_init : function( options ) {
			
			// options
			this.options = $.extend( true, {}, $.GridRotator.defaults, options );
			// cache some elements + variables
			this._config();

		},
		_config : function() {

			var self = this,
				transEndEventNames = {
					'WebkitTransition' : 'webkitTransitionEnd',
					'MozTransition' : 'transitionend',
					'OTransition' : 'oTransitionEnd',
					'msTransition' : 'MSTransitionEnd',
					'transition' : 'transitionend'
				};

			// support CSS transitions and 3d transforms
			this.supportTransitions = Modernizr.csstransitions;
			this.supportTransforms3D = Modernizr.csstransforms3d;

			this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.gridrotator';

			// all animation types for the random option
			this.animTypes = this.supportTransforms3D ? [
				'fadeInOut',
				'slideLeft', 
				'slideRight', 
				'slideTop', 
				'slideBottom', 
				'rotateLeft', 
				'rotateRight', 
				'rotateTop', 
				'rotateBottom', 
				'scale', 
				'rotate3d', 
				'rotateLeftScale', 
				'rotateRightScale', 
				'rotateTopScale', 
				'rotateBottomScale' ] :
				[ 'fadeInOut', 'slideLeft', 'slideRight', 'slideTop', 'slideBottom' ];

			this.animType = this.options.animType;

			if( this.animType !== 'random' && !this.supportTransforms3D && $.inArray( this.animType, this.animTypes ) === -1 && this.animType !== 'showHide' ) {

				// fallback to 'fadeInOut' if user sets a type which is not supported
				this.animType = 'fadeInOut';

			}

			this.animTypesTotal	= this.animTypes.length;

			// the <ul> where the items are placed
			this.$list = this.$el.children( 'ul' );
			// remove images and add background-image to anchors
			// preload the images before
			var loaded = 0,
				$imgs = this.$list.find( 'img' ),
				count = $imgs.length;

			$imgs.each( function() {

				var $img = $( this ), src = $img.attr( 'src' );

				$( '<img/>' ).load( function() {

					++loaded;
					$img.parent().css( 'background-image', 'url(' + src + ')' );

					if( loaded === count ) {

						$imgs.remove();
						self.$el.removeClass( 'ri-grid-loading' );
						// the items
						self.$items = self.$list.children( 'li' );
						// make a copy of the items
						self.$itemsCache = self.$items.clone();
						// total number of items
						self.itemsTotal = self.$items.length;
						// the items that will be out of the grid
						// actually the item's child (anchor element)
						self.outItems= [];
						self._layout( function() {
							self._initEvents();
						} );
						// replace [options.step] items after [options.interval] time
						// the items that go out are randomly chosen, while the ones that get in
						// follow a "First In First Out" logic
						self._start();

					}

				} ).attr( 'src', src )
				 
			} );

		},
		_layout : function( callback ) {

			var self = this;

			// sets the grid dimentions based on the container's width
			this._setGridDim();

			// reset
			this.$list.empty();
			this.$items = this.$itemsCache.clone().appendTo( this.$list );
			
			var $outItems = this.$items.filter( ':gt(' + ( this.showTotal - 1 ) + ')' ),
				$outAItems = $outItems.children( 'a' );

			this.outItems.length = 0;

			$outAItems.each( function( i ) {
				self.outItems.push( $( this ) );
			} );

			$outItems.remove();

				// container's width
			var containerWidth = ( document.defaultView ) ? parseInt( document.defaultView.getComputedStyle( this.$el.get( 0 ), null ).width ) : this.$el.width(),
				// item's width
				itemWidth = Math.floor( containerWidth / this.columns ),
				// calculate gap
				gapWidth = containerWidth - ( this.columns * Math.floor( itemWidth ) );

			for( var i = 0; i < this.rows; ++i ) {

				for( var j = 0; j < this.columns; ++j ) {

					var idx = this.columns * i + j,
						$item = this.$items.eq( idx );

					$item.css( {
						width : j < Math.floor( gapWidth ) ? itemWidth + 1 : itemWidth,
						height : itemWidth
					} );

					if( $.inArray( idx, this.options.nochange ) !== -1 ) {
						$item.addClass( 'ri-nochange' ).data( 'nochange', true );
					}

				}

			}

			if( this.options.preventClick ) {

				this.$items.children().css( 'cursor', 'default' ).on( 'click.gridrotator', false );

			}

			if( callback ) {
				callback.call();
			}

		},
		// set the grid rows and columns
		_setGridDim	 : function() {

			// container's width
			var c_w = this.$el.width();

			// we will choose the number of rows/columns according to the container's width and the values set in the plugin options 
			switch( true ) {
				case ( c_w < 240 ) : this.rows = this.options.w240.rows; this.columns = this.options.w240.columns; break;
				case ( c_w < 320 ) : this.rows = this.options.w320.rows; this.columns = this.options.w320.columns; break;
				case ( c_w < 480 ) : this.rows = this.options.w480.rows; this.columns = this.options.w480.columns; break;
				case ( c_w < 768 ) : this.rows = this.options.w768.rows; this.columns = this.options.w768.columns; break;
				case ( c_w < 1024 ) : this.rows = this.options.w1024.rows; this.columns = this.options.w1024.columns; break;
				default : this.rows = this.options.rows; this.columns = this.options.columns; break;
			}

			this.showTotal = this.rows * this.columns;

		},
		// init window resize event
		_initEvents : function() {

			var self = this;

			$window.on( 'debouncedresize.gridrotator', function() {
				self._layout();
			} );

			// use the property name to generate the prefixed event name
			var visProp = getHiddenProp();
			
			// HTML5 PageVisibility API
			// http://www.html5rocks.com/en/tutorials/pagevisibility/intro/
			// by Joe Marini (@joemarini)
			if (visProp) {

				var evtname = visProp.replace(/[H|h]idden/,'') + 'visibilitychange';
				document.addEventListener(evtname, function() { self._visChange(); } );

			}

			if( !Modernizr.touch && this.options.onhover ) {
				
				self.$items.on( 'mouseenter.gridrotator', function() {

					var $item = $( this );
					if( !$item.data( 'active' ) && !$item.data( 'hovered' ) && !$item.data( 'nochange' ) ) {
						$item.data( 'hovered', true );
						self._replace( $item );
					}

				} ).on( 'mouseleave.gridrotator', function() {

					$( this ).data( 'hovered', false );

				} );

			}

		},
		_visChange : function() {

			isHidden() ? clearTimeout( this.playtimeout ) : this._start();

		},
		// start rotating elements
		_start : function() {

			if( this.showTotal < this.itemsTotal && this.options.slideshow ) {
				this._showNext();
			}

		},
		// get which type of animation
		_getAnimType : function() {

			return this.animType === 'random' ? this.animTypes[ Math.floor( Math.random() * this.animTypesTotal ) ] : this.animType;

		},
		// get css properties for the transition effect
		_getAnimProperties : function( $out ) {

			var startInProp = {}, startOutProp = {}, endInProp = {}, endOutProp = {},
				animType = this._getAnimType(), speed, delay = 0;

			switch( animType ) {

				case 'showHide' :
					
					speed = 0;
					endOutProp.opacity = 0;
					break;

				case 'fadeInOut' :

					endOutProp.opacity = 0;
					break;

				case 'slideLeft' :
					
					startInProp.left = $out.width();
					endInProp.left = 0;
					endOutProp.left = -$out.width();
					break;

				case 'slideRight' :
					
					startInProp.left = -$out.width();
					endInProp.left = 0;
					endOutProp.left = $out.width();
					break;

				case 'slideTop' :
					
					startInProp.top = $out.height();
					endInProp.top = 0;
					endOutProp.top = -$out.height();
					break;

				case 'slideBottom' :
					
					startInProp.top = -$out.height();
					endInProp.top = 0;
					endOutProp.top = $out.height();
					break;

				case 'rotateLeft' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'rotateY(90deg)';
					endInProp.transform = 'rotateY(0deg)';
					delay = speed;
					endOutProp.transform = 'rotateY(-90deg)';
					break;

				case 'rotateRight' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'rotateY(-90deg)';
					endInProp.transform = 'rotateY(0deg)';
					delay = speed;
					endOutProp.transform = 'rotateY(90deg)';
					break;

				case 'rotateTop' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform= 'rotateX(90deg)';
					endInProp.transform = 'rotateX(0deg)';
					delay = speed;
					endOutProp.transform = 'rotateX(-90deg)';
					break;

				case 'rotateBottom' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'rotateX(-90deg)';
					endInProp.transform = 'rotateX(0deg)';
					delay = speed;
					endOutProp.transform = 'rotateX(90deg)';
					break;

				case 'scale' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'scale(0)';
					startOutProp.transform = 'scale(1)';
					endInProp.transform = 'scale(1)';
					delay = speed;
					endOutProp.transform = 'scale(0)';
					break;

				case 'rotateLeftScale' :
					
					startOutProp.transform = 'scale(1)';
					speed = this.options.animSpeed / 2;	
					startInProp.transform = 'scale(0.3) rotateY(90deg)';
					endInProp.transform = 'scale(1) rotateY(0deg)';
					delay = speed;
					endOutProp.transform = 'scale(0.3) rotateY(-90deg)';
					break;

				case 'rotateRightScale' :
					
					startOutProp.transform = 'scale(1)';
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'scale(0.3) rotateY(-90deg)';
					endInProp.transform = 'scale(1) rotateY(0deg)';
					delay = speed;
					endOutProp.transform = 'scale(0.3) rotateY(90deg)';
					break;

				case 'rotateTopScale' :
					
					startOutProp.transform = 'scale(1)';
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'scale(0.3) rotateX(90deg)';
					endInProp.transform = 'scale(1) rotateX(0deg)';
					delay = speed;
					endOutProp.transform = 'scale(0.3) rotateX(-90deg)';
					break;

				case 'rotateBottomScale' :
					
					startOutProp.transform = 'scale(1)';
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'scale(0.3) rotateX(-90deg)';
					endInProp.transform = 'scale(1) rotateX(0deg)';
					delay = speed;
					endOutProp.transform = 'scale(0.3) rotateX(90deg)';
					break;

				case 'rotate3d' :
					
					speed = this.options.animSpeed / 2;
					startInProp.transform = 'rotate3d( 1, 1, 0, 90deg )';
					endInProp.transform = 'rotate3d( 1, 1, 0, 0deg )';
					delay = speed;
					endOutProp.transform = 'rotate3d( 1, 1, 0, -90deg )';
					break;

			}

			return {
				startInProp : startInProp,
				startOutProp : startOutProp,
				endInProp : endInProp,
				endOutProp : endOutProp,				
				delay : delay,
				animSpeed : speed != undefined ? speed : this.options.animSpeed
			};

		},
		// show next [option.step] elements
		_showNext : function( time ) {

			var self = this;

			clearTimeout( this.playtimeout );

			this.playtimeout = setTimeout( function() {

				var step = self.options.step, max= self.options.maxStep, min = 1;
				
				if( max > self.showTotal ) {
					max = self.showTotal;
				}

					// number of items to swith at this point of time
				var nmbOut	= step === 'random' ? Math.floor( Math.random() * max + min ) : Math.min( Math.abs( step ) , max ) ,
					// array with random indexes. These will be the indexes of the items we will replace
					randArr	= self._getRandom( nmbOut, self.showTotal );

				for( var i = 0; i < nmbOut; ++i ) {

					// element to go out
					var $out = self.$items.eq( randArr[ i ] );

					// if element is active, which means it is currently animating,
					// then we need to get different positions.. 
					if( $out.data( 'active' ) || $out.data( 'nochange' ) ) {

						// one of the items is active, call again..
						self._showNext( 1 );
						return false;

					}

					self._replace( $out );

				}

				// again and again..
				self._showNext();

			}, time || Math.max( Math.abs( this.options.interval ) , 300 ) );

		},
		_replace : function( $out ) {

			$out.data( 'active', true );

			var self = this,
				$outA = $out.children( 'a:last' ),
				newElProp = {
					width : $outA.width(),
					height : $outA.height()
				};

			// element stays active
			$out.data( 'active', true );

			// get the element (anchor) that will go in (first one inserted in this.outItems)
			var $inA = this.outItems.shift();

			// save element that went out
			this.outItems.push( $outA.clone().css( 'transition', 'none' ) );
			
			// prepend in element
			$inA.css( newElProp ).prependTo( $out );

			var animProp = this._getAnimProperties( $outA );

			$inA.css( animProp.startInProp );
			$outA.css( animProp.startOutProp );
			
			this._setTransition( $inA, 'all', animProp.animSpeed, animProp.delay, this.options.animEasingIn );
			this._setTransition( $outA, 'all', animProp.animSpeed, 0, this.options.animEasingOut );

			this._applyTransition( $inA, animProp.endInProp, animProp.animSpeed, function() {

				var $el = $( this ),
					t = animProp.animSpeed === self.options.animSpeed && isEmpty( animProp.endInProp ) ? animProp.animSpeed : 0;
					
				setTimeout( function() {
					
					if( self.supportTransitions ) {
						$el.off( self.transEndEventName );
					}
					
					$el.next().remove();
					$el.parent().data( 'active', false );

				}, t );

			}, animProp.animSpeed === 0 || isEmpty( animProp.endInProp ) );
			this._applyTransition( $outA, animProp.endOutProp, animProp.animSpeed );

		},
		_getRandom : function( cnt, limit ) {

			var randArray = [];

			for( var i = 0; i < limit; ++i ) {
				randArray.push( i )
			}
			
			return randArray.shuffle().slice( 0, cnt );

		},
		_setTransition : function( el, prop, speed, delay, easing ) {

			setTimeout( function() {
				el.css( 'transition', prop + ' ' + speed + 'ms ' + delay + 'ms ' + easing );
			}, 25 );

		},
		_applyTransition : function( el, styleCSS, speed, fncomplete, force ) {

			var self = this;
			setTimeout( function() {
				$.fn.applyStyle = self.supportTransitions ? $.fn.css : $.fn.animate;

				if( fncomplete && self.supportTransitions ) {

					el.on( self.transEndEventName, fncomplete );

					if( force ) {
						fncomplete.call( el );					
					}

				}

				fncomplete = fncomplete || function() { return false; };

				el.stop().applyStyle( styleCSS, $.extend( true, [], { duration : speed + 'ms', complete : fncomplete } ) );
			}, 25 );

		}

	};
	
	var logError = function( message ) {

		if ( window.console ) {

			window.console.error( message );
		
		}

	};
	
	$.fn.gridrotator = function( options ) {

		var instance = $.data( this, 'gridrotator' );
		
		if ( typeof options === 'string' ) {
			
			var args = Array.prototype.slice.call( arguments, 1 );
			
			this.each(function() {
			
				if ( !instance ) {

					logError( "cannot call methods on gridrotator prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for gridrotator instance" );
					return;
				
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
				
				if ( instance ) {

					instance._init();
				
				}
				else {

					instance = $.data( this, 'gridrotator', new $.GridRotator( options, this ) );
				
				}

			});
		
		}
		
		return instance;
		
	};
	
} )( jQuery, window );
