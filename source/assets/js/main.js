!function(e){var t={};function n(i){if(t[i])return t[i].exports;var o=t[i]={i:i,l:!1,exports:{}};return e[i].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:i})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({0:function(e,t,n){n("A7k7"),n("9LOt"),n("JOVB"),n("E6dE"),e.exports=n("obHX")},"9LOt":function(e,t){},A7k7:function(t,n,i){jQuery(document).ready(function(){$(".quote-feature-img").each(function(){var e=$(this),t=$(this).find("img")[0];t.naturalWidth<t.naturalHeight&&e.addClass("vertical")}),$("[class*='col-sm-']:has('.card')").addClass("card-margin"),$("[class*='col-md-']:has('.card')").addClass("card-margin"),$("[class*='col-sm-']:has('p.card-link')").addClass("card-link-margin"),$("[class*='col-md-']:has('p.card-link')").addClass("card-link-margin"),$("body").on("click",".dropdown-toggle",function(e){e.preventDefault(),e.stopPropagation();var t=$(this).closest(".dropdown");console.log(t),t.hasClass("show")?(console.log("remove"),$(t).removeClass("show")):(console.log("add"),$(t).removeClass("show"),t.addClass("show"))}),$("body").on("click",".expand-button",function(e){e.preventDefault(),e.stopPropagation();var t=$(this).closest(".homepage-banner").siblings(".homepage-expand");t.hasClass("show")?($(this).parents(".homepage-banner-container").removeClass("expanded"),$(this).attr("aria-expanded","false").text("Expand"),$(t).removeClass("show"),$(t).find(".hero-expandcontent").attr("aria-hidden","true")):($(this).parents(".homepage-banner-container").addClass("expanded"),$(this).attr("aria-expanded","true").text("Close"),$(t).addClass("show"),$(t).find(".hero-expandcontent").attr("aria-hidden","false"),$("html, body").animate({scrollTop:$(t).offset().top-40},100))}),$(".collapse").on("shown.bs.collapse",function(){$(this).prev().addClass("active")}),$(".collapse").on("hidden.bs.collapse",function(){$(this).prev().removeClass("active")}),$(".header-actions .searchicon").click(function(e){$(this).hasClass("active")?""===$(".header-actions .searchbox input")[0].value&&(e.preventDefault(),$(".header-actions .searchbox input").hide(),$(this).removeClass("active")):($(this).addClass("active"),e.preventDefault(),$(".header-actions .searchbox input").show(),$(".header-actions .searchbox input").focus())}),$("a.scrollable").click(function(e){e.preventDefault();var t=$(this).attr("href");$(t).length&&($("html, body").animate({scrollTop:$($(this).attr("href")).offset().top-a.scrollableOffset},500),$(t).focus())}),document.onkeydown=function(t){e=t||window.event,e.target.parentNode.classList.contains("dropdown")&&(39!=e.keyCode&&40!=e.keyCode||e.target.parentNode.classList.add("show"),37!=e.keyCode&&38!=e.keyCode||e.target.parentNode.classList.remove("show"))},$(".dropdown>a").focus(function(){$(".dropdown.show").removeClass("show")}),$(".table-r1").each(function(e){var t=[],n=[];$(this).find("thead th").each(function(e,n){t.push(n.innerText)}),$(this).find("tbody th").each(function(e,t){n.push(t.innerText)}),$(this).find("tbody tr").each(function(e){$(this).children("th").text(n[e]),$(this).children("td").each(function(e){$(this).attr("data-title",t[e+1])})})})}),i("Ak/7");var o=i("Kgsj"),a={scrollableOffset:101,colorBox:function(){$(".video-lightbox").colorbox({iframe:!0,width:"80%",height:"60%",maxWidth:"1000",maxHeight:"750",transition:"none",onOpen:function(){$("body").addClass("menu-open")},onClosed:function(){$("body").removeClass("menu-open")}}),$(".lightbox").colorbox({maxWidth:"95%",maxHeight:"100%",transition:"none",rel:"lightbox",onOpen:function(){$("body").addClass("menu-open")},onClosed:function(){$("body").removeClass("menu-open")}})},changeScrollableOffset:function(e){this.scrollableOffset=e},twitterFeed:function(){o.fetch({profile:{screenName:"ahappcc"},domId:"twitter-feed",maxTweets:3,enableLinks:!0,showImages:!1,showInteraction:!1,showUser:!1})},scrollAccordion:function(){var e=$("header").height(),t=0,n=0,i=0,o=200,a=0;$(document).ready(function(){$(".accordion .btn-toggle").on("mousedown",function(e){i=0,e.target}).on("mouseup",function(s){if($(s.target).hasClass("active"))a=0,void 0,n=0;else{a=$(s.target).height();var r=$(s.target).offset().top;c=(l=r)-a-40,l>e+t&&(c-=t),n>l-i?($("html,body").animate({scrollTop:c},o),n=c):(c-=i,$("html,body").animate({scrollTop:c},o),n=c)}var l,c})})},loadNavChild:function(){$("ul#subnav_parent > li").each(function(e){if($(this).children("a").attr("href").toLowerCase().indexOf(ou_child.toLowerCase())>=0){$(this).children("a").first().attr("href");$(this).append($("ul#subnav_child")).addClass("current"),$("ul#subnav_child").show();var t=$(".left-nav").height();$(".content").css("minHeight",t+40)}})},highlightActiveNav:function(){$(".left-nav nav ul.nav a,.button-row a").each(function(e){var t=ou_path.toLowerCase().replace(ou_index,"");$(this).attr("href").toLowerCase().replace(ou_index,"")==t&&$(this).parent("li").addClass("current")})},navTabs:function(){$(document).ready(function(){$(".nav-link").on("click",function(e){$(e.target).parent("li").siblings().find("a").attr("aria-selected",!1),$(e.target).attr("aria-selected",!0)})})},unWrapDuplicateULs:function(){$(".list-wrapper ul > ul").children().unwrap()},tableHTML:function(){var e=!1,t=function(){if($(window).width()<9999&&!e)return e=!0,$("table.responsive").each(function(e,t){!function(e){e.wrap("<div class='table-wrapper' />");var t=e.clone();t.find("td:not(:first-child), th:not(:first-child)").css("display","none"),t.removeClass("responsive"),e.closest(".table-wrapper").append(t),t.wrap("<div class='pinned' />"),e.wrap("<div class='scrollable' />")}($(t))}),!0;e&&$(window).width()>9999&&(e=!1,$("table.responsive").each(function(e,t){var n;(n=$(t)).closest(".table-wrapper").find(".pinned").remove(),n.unwrap(),n.unwrap()}))};$(window).on("load",t),$(window).bind("resize",t),$(".table-r1").each(function(e){var t=[],n=[];$(this).find("thead th").each(function(e,n){t.push(n.innerText)}),$(this).find("tbody th").each(function(e,t){n.push(t.innerText)}),$(this).find("tbody tr").each(function(e){$(this).children("th").text(n[e]),$(this).children("td").each(function(e){$(this).attr("data-title",t[e+1])})})})},twoColNav:function(){if($(".option-explore-nav").length){var e=Math.ceil($(".option-explore-nav .card-body ul li").length/2);$($(".option-explore-nav .card-body ul li")[e]).addClass("list-top")}},addBreadcrumbPosition:function(){$(".breadcrumb li").each(function(e){$(this).append('<meta property="position" content="'+(e+1)+'" />')})}};a.colorBox(),$("#twitter-feed").length&&a.twitterFeed(),a.loadNavChild(),a.highlightActiveNav(),a.navTabs(),a.unWrapDuplicateULs(),a.tableHTML(),a.twoColNav(),a.addBreadcrumbPosition();var s=i("syIL");!function(e,t){var n={xs:e('<div class="d-xs-block d-sm-none d-md-none d-lg-none d-xl-none"></div>'),sm:e('<div class="d-none d-sm-block d-md-none d-lg-none d-xl-none"></div>'),md:e('<div class="d-none d-md-block d-sm-none d-lg-none d-xl-none"></div>'),lg:e('<div class="d-none d-lg-block d-sm-none d-md-none d-xl-none"></div>'),xl:e('<div class="d-none d-xl-block d-sm-none d-md-none d-lg-none"></div>')};t.use("custom",n);e(window).resize(t.changed(function(){t.is(">=md")?a.changeScrollableOffset(40):a.changeScrollableOffset(101)})).resize()}(jQuery,s)},"Ak/7":function(e,t){!function(e,t,n){var i,o,a,s,r,l,c,d,h,u,p,f,m,g,v,w,b,y,x,$,C,k,T,_,E,A,L,N,I,H,M,O,B,D={html:!1,photo:!1,iframe:!1,inline:!1,transition:"elastic",speed:300,fadeOut:300,width:!1,initialWidth:"600",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:"450",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!0,slideshowSpeed:2500,slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:"@2x.$1",current:"image {current} of {total}",previous:"previous",next:"next",close:"close",xhrError:"This content failed to load.",imgError:"This image failed to load.",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return e(this).attr("href")},title:function(){return this.title},createImg:function(){var t=new Image,n=e(this).data("cbox-img-attrs");return"object"==typeof n&&e.each(n,function(e,n){t[e]=n}),t},createIframe:function(){var n=t.createElement("iframe"),i=e(this).data("cbox-iframe-attrs");return"object"==typeof i&&e.each(i,function(e,t){n[e]=t}),"frameBorder"in n&&(n.frameBorder=0),"allowTransparency"in n&&(n.allowTransparency="true"),n.name=(new Date).getTime(),n.allowFullscreen=!0,n}},P="colorbox",W="cbox",j=W+"Element",S=W+"_open",F=W+"_load",R=W+"_complete",z=W+"_cleanup",q=W+"_closed",K=W+"_purge",U=e("<a/>"),Q="div",J=0,V={};function X(n,i,o){var a=t.createElement(n);return i&&(a.id=W+i),o&&(a.style.cssText=o),e(a)}function G(){return n.innerHeight?n.innerHeight:e(n).height()}function Z(t,n){n!==Object(n)&&(n={}),this.cache={},this.el=t,this.value=function(t){var i;return void 0===this.cache[t]&&(void 0!==(i=e(this.el).attr("data-cbox-"+t))?this.cache[t]=i:void 0!==n[t]?this.cache[t]=n[t]:void 0!==D[t]&&(this.cache[t]=D[t])),this.cache[t]},this.get=function(t){var n=this.value(t);return e.isFunction(n)?n.call(this.el,this):n}}function Y(e){var t=h.length,n=(A+e)%t;return n<0?t+n:n}function ee(e,t){return Math.round((/%/.test(e)?("x"===t?u.width():G())/100:1)*parseInt(e,10))}function te(e,t){return e.get("photo")||e.get("photoRegex").test(t)}function ne(e,t){return e.get("retinaUrl")&&n.devicePixelRatio>1?t.replace(e.get("photoRegex"),e.get("retinaSuffix")):t}function ie(e){"contains"in o[0]&&!o[0].contains(e.target)&&e.target!==i[0]&&(e.stopPropagation(),o.focus())}function oe(e){oe.str!==e&&(o.add(i).removeClass(oe.str).addClass(e),oe.str=e)}function ae(n){e(t).trigger(n),U.triggerHandler(n)}var se=function(){var e,t,n=W+"Slideshow_",i="click."+W;function a(){clearTimeout(t)}function s(){(C.get("loop")||h[A+1])&&(a(),t=setTimeout(O.next,C.get("slideshowSpeed")))}function r(){w.html(C.get("slideshowStop")).unbind(i).one(i,l),U.bind(R,s).bind(F,a),o.removeClass(n+"off").addClass(n+"on")}function l(){a(),U.unbind(R,s).unbind(F,a),w.html(C.get("slideshowStart")).unbind(i).one(i,function(){O.next(),r()}),o.removeClass(n+"on").addClass(n+"off")}function c(){e=!1,w.hide(),a(),U.unbind(R,s).unbind(F,a),o.removeClass(n+"off "+n+"on")}return function(){e?C.get("slideshow")||(U.unbind(z,c),c()):C.get("slideshow")&&h[1]&&(e=!0,U.one(z,c),C.get("slideshowAuto")?r():l(),w.show())}}();function re(a){var u,v;if(!H){if(u=e(a).data(P),C=new Z(a,u),v=C.get("rel"),A=0,v&&!1!==v&&"nofollow"!==v?(h=e("."+j).filter(function(){return new Z(this,e.data(this,P)).get("rel")===v}),-1===(A=h.index(C.el))&&(h=h.add(C.el),A=h.length-1)):h=e(C.el),!N){N=I=!0,oe(C.get("className")),o.css({visibility:"hidden",display:"block",opacity:""}),p=X(Q,"LoadedContent","width:0; height:0; overflow:hidden; visibility:hidden"),s.css({width:"",height:""}).append(p),k=r.height()+d.height()+s.outerHeight(!0)-s.height(),T=l.width()+c.width()+s.outerWidth(!0)-s.width(),_=p.outerHeight(!0),E=p.outerWidth(!0);var w=ee(C.get("initialWidth"),"x"),b=ee(C.get("initialHeight"),"y"),y=C.get("maxWidth"),B=C.get("maxHeight");C.w=Math.max((!1!==y?Math.min(w,ee(y,"x")):w)-E-T,0),C.h=Math.max((!1!==B?Math.min(b,ee(B,"y")):b)-_-k,0),p.css({width:"",height:C.h}),O.position(),ae(S),C.get("onOpen"),$.add(g).hide(),o.focus(),C.get("trapFocus")&&t.addEventListener&&(t.addEventListener("focus",ie,!0),U.one(q,function(){t.removeEventListener("focus",ie,!0)})),C.get("returnFocus")&&U.one(q,function(){e(C.el).focus()})}var D=parseFloat(C.get("opacity"));i.css({opacity:D==D?D:"",cursor:C.get("overlayClose")?"pointer":"",visibility:"visible"}).show(),C.get("closeButton")?x.html(C.get("close")).appendTo(s):x.appendTo("<div/>"),function(){var t,i,o,a=O.prep,s=++J;I=!0,L=!1,ae(K),ae(F),C.get("onLoad"),C.h=C.get("height")?ee(C.get("height"),"y")-_-k:C.get("innerHeight")&&ee(C.get("innerHeight"),"y"),C.w=C.get("width")?ee(C.get("width"),"x")-E-T:C.get("innerWidth")&&ee(C.get("innerWidth"),"x"),C.mw=C.w,C.mh=C.h,C.get("maxWidth")&&(C.mw=ee(C.get("maxWidth"),"x")-E-T,C.mw=C.w&&C.w<C.mw?C.w:C.mw);C.get("maxHeight")&&(C.mh=ee(C.get("maxHeight"),"y")-_-k,C.mh=C.h&&C.h<C.mh?C.h:C.mh);if(t=C.get("href"),M=setTimeout(function(){m.show()},100),C.get("inline")){var r=e(t).eq(0);o=e("<div>").hide().insertBefore(r),U.one(K,function(){o.replaceWith(r)}),a(r)}else C.get("iframe")?a(" "):C.get("html")?a(C.get("html")):te(C,t)?(t=ne(C,t),L=C.get("createImg"),e(L).addClass(W+"Photo").bind("error."+W,function(){a(X(Q,"Error").html(C.get("imgError")))}).one("load",function(){s===J&&setTimeout(function(){var t;C.get("retinaImage")&&n.devicePixelRatio>1&&(L.height=L.height/n.devicePixelRatio,L.width=L.width/n.devicePixelRatio),C.get("scalePhotos")&&(i=function(){L.height-=L.height*t,L.width-=L.width*t},C.mw&&L.width>C.mw&&(t=(L.width-C.mw)/L.width,i()),C.mh&&L.height>C.mh&&(t=(L.height-C.mh)/L.height,i())),C.h&&(L.style.marginTop=Math.max(C.mh-L.height,0)/2+"px"),h[1]&&(C.get("loop")||h[A+1])&&(L.style.cursor="pointer",e(L).bind("click."+W,function(){O.next()})),L.style.width=L.width+"px",L.style.height=L.height+"px",a(L)},1)}),L.src=t):t&&f.load(t,C.get("data"),function(t,n){s===J&&a("error"===n?X(Q,"Error").html(C.get("xhrError")):e(this).contents())})}()}}function le(){o||(B=!1,u=e(n),o=X(Q).attr({id:P,class:!1===e.support.opacity?W+"IE":"",role:"dialog",tabindex:"-1"}).hide(),i=X(Q,"Overlay").hide(),m=e([X(Q,"LoadingOverlay")[0],X(Q,"LoadingGraphic")[0]]),a=X(Q,"Wrapper"),s=X(Q,"Content").append(g=X(Q,"Title"),v=X(Q,"Current"),y=e('<button type="button"/>').attr({id:W+"Previous"}),b=e('<button type="button"/>').attr({id:W+"Next"}),w=e('<button type="button"/>').attr({id:W+"Slideshow"}),m),x=e('<button type="button"/>').attr({id:W+"Close"}),a.append(X(Q).append(X(Q,"TopLeft"),r=X(Q,"TopCenter"),X(Q,"TopRight")),X(Q,!1,"clear:left").append(l=X(Q,"MiddleLeft"),s,c=X(Q,"MiddleRight")),X(Q,!1,"clear:left").append(X(Q,"BottomLeft"),d=X(Q,"BottomCenter"),X(Q,"BottomRight"))).find("div div").css({float:"left"}),f=X(Q,!1,"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"),$=b.add(y).add(v).add(w)),t.body&&!o.parent().length&&e(t.body).append(i,o.append(a,f))}function ce(){function n(e){e.which>1||e.shiftKey||e.altKey||e.metaKey||e.ctrlKey||(e.preventDefault(),re(this))}return!!o&&(B||(B=!0,b.click(function(){O.next()}),y.click(function(){O.prev()}),x.click(function(){O.close()}),i.click(function(){C.get("overlayClose")&&O.close()}),e(t).bind("keydown."+W,function(e){var t=e.keyCode;N&&C.get("escKey")&&27===t&&(e.preventDefault(),O.close()),N&&C.get("arrowKey")&&h[1]&&!e.altKey&&(37===t?(e.preventDefault(),y.click()):39===t&&(e.preventDefault(),b.click()))}),e.isFunction(e.fn.on)?e(t).on("click."+W,"."+j,n):e("."+j).live("click."+W,n)),!0)}e[P]||(e(le),(O=e.fn[P]=e[P]=function(t,n){var i=this;return t=t||{},e.isFunction(i)&&(i=e("<a/>"),t.open=!0),i[0]?(le(),ce()&&(n&&(t.onComplete=n),i.each(function(){var n=e.data(this,P)||{};e.data(this,P,e.extend(n,t))}).addClass(j),new Z(i[0],t).get("open")&&re(i[0])),i):i}).position=function(t,n){var i,h,p,f=0,m=0,g=o.offset();function v(){r[0].style.width=d[0].style.width=s[0].style.width=parseInt(o[0].style.width,10)-T+"px",s[0].style.height=l[0].style.height=c[0].style.height=parseInt(o[0].style.height,10)-k+"px"}if(u.unbind("resize."+W),o.css({top:-9e4,left:-9e4}),h=u.scrollTop(),p=u.scrollLeft(),C.get("fixed")?(g.top-=h,g.left-=p,o.css({position:"fixed"})):(f=h,m=p,o.css({position:"absolute"})),!1!==C.get("right")?m+=Math.max(u.width()-C.w-E-T-ee(C.get("right"),"x"),0):!1!==C.get("left")?m+=ee(C.get("left"),"x"):m+=Math.round(Math.max(u.width()-C.w-E-T,0)/2),!1!==C.get("bottom")?f+=Math.max(G()-C.h-_-k-ee(C.get("bottom"),"y"),0):!1!==C.get("top")?f+=ee(C.get("top"),"y"):f+=Math.round(Math.max(G()-C.h-_-k,0)/2),o.css({top:g.top,left:g.left,visibility:"visible"}),a[0].style.width=a[0].style.height="9999px",i={width:C.w+E+T,height:C.h+_+k,top:f,left:m},t){var w=0;e.each(i,function(e){i[e]===V[e]||(w=t)}),t=w}V=i,t||o.css(i),o.dequeue().animate(i,{duration:t||0,complete:function(){v(),I=!1,a[0].style.width=C.w+E+T+"px",a[0].style.height=C.h+_+k+"px",C.get("reposition")&&setTimeout(function(){u.bind("resize."+W,O.position)},1),e.isFunction(n)&&n()},step:v})},O.resize=function(e){var t;N&&((e=e||{}).width&&(C.w=ee(e.width,"x")-E-T),e.innerWidth&&(C.w=ee(e.innerWidth,"x")),p.css({width:C.w}),e.height&&(C.h=ee(e.height,"y")-_-k),e.innerHeight&&(C.h=ee(e.innerHeight,"y")),e.innerHeight||e.height||(t=p.scrollTop(),p.css({height:"auto"}),C.h=p.height()),p.css({height:C.h}),t&&p.scrollTop(t),O.position("none"===C.get("transition")?0:C.get("speed")))},O.prep=function(n){if(N){var i,a="none"===C.get("transition")?0:C.get("speed");p.remove(),(p=X(Q,"LoadedContent").append(n)).hide().appendTo(f.show()).css({width:(C.w=C.w||p.width(),C.w=C.mw&&C.mw<C.w?C.mw:C.w,C.w),overflow:C.get("scrolling")?"auto":"hidden"}).css({height:(C.h=C.h||p.height(),C.h=C.mh&&C.mh<C.h?C.mh:C.h,C.h)}).prependTo(s),f.hide(),e(L).css({float:"none"}),oe(C.get("className")),i=function(){var n,i,s=h.length;function r(){!1===e.support.opacity&&o[0].style.removeAttribute("filter")}N&&(i=function(){clearTimeout(M),m.hide(),ae(R),C.get("onComplete")},g.html(C.get("title")).show(),p.show(),s>1?("string"==typeof C.get("current")&&v.html(C.get("current").replace("{current}",A+1).replace("{total}",s)).show(),b[C.get("loop")||A<s-1?"show":"hide"]().html(C.get("next")),y[C.get("loop")||A?"show":"hide"]().html(C.get("previous")),se(),C.get("preloading")&&e.each([Y(-1),Y(1)],function(){var n=h[this],i=new Z(n,e.data(n,P)),o=i.get("href");o&&te(i,o)&&(o=ne(i,o),t.createElement("img").src=o)})):$.hide(),C.get("iframe")?(n=C.get("createIframe"),C.get("scrolling")||(n.scrolling="no"),e(n).attr({src:C.get("href"),class:W+"Iframe"}).one("load",i).appendTo(p),U.one(K,function(){n.src="//about:blank"}),C.get("fastIframe")&&e(n).trigger("load")):i(),"fade"===C.get("transition")?o.fadeTo(a,1,r):r())},"fade"===C.get("transition")?o.fadeTo(a,0,function(){O.position(0,i)}):O.position(a,i)}},O.next=function(){!I&&h[1]&&(C.get("loop")||h[A+1])&&(A=Y(1),re(h[A]))},O.prev=function(){!I&&h[1]&&(C.get("loop")||A)&&(A=Y(-1),re(h[A]))},O.close=function(){N&&!H&&(H=!0,N=!1,ae(z),C.get("onCleanup"),u.unbind("."+W),i.fadeTo(C.get("fadeOut")||0,0),o.stop().fadeTo(C.get("fadeOut")||0,0,function(){o.hide(),i.hide(),ae(K),p.remove(),setTimeout(function(){H=!1,ae(q),C.get("onClosed")},1)}))},O.remove=function(){o&&(o.stop(),e[P].close(),o.stop(!1,!0).remove(),i.remove(),H=!1,o=null,e("."+j).removeData(P).removeClass(j),e(t).unbind("click."+W).unbind("keydown."+W))},O.element=function(){return e(C.el)},O.settings=D)}(jQuery,document,window)},E6dE:function(e,t){},JOVB:function(e,t){},Kgsj:function(e,t,n){var i,o,a;o=[],void 0===(a="function"==typeof(i=function(){var e="",t=20,n=!0,i=[],o=!1,a=!0,s=!0,r=null,l=!0,c=!0,d=null,h=!0,u=!1,p=!1,f=!0,m=!0,g=!1,v=null;function w(e){return e.replace(/<b[^>]*>(.*?)<\/b>/gi,function(e,t){return t}).replace(/class="(?!(tco-hidden|tco-display|tco-ellipsis))+.*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function b(e){for(var t=e.getElementsByTagName("a"),n=t.length-1;n>=0;n--)t[n].setAttribute("target","_blank"),t[n].setAttribute("rel","noopener")}function y(e,t){for(var n=[],i=new RegExp("(^| )"+t+"( |$)"),o=e.getElementsByTagName("*"),a=0,s=o.length;a<s;a++)i.test(o[a].className)&&n.push(o[a]);return n}function x(e){if(void 0!==e&&e.innerHTML.indexOf("data-image")>=0){var t=e.innerHTML.match(/data-image=\"([A-z0-9]+:\/\/[A-z0-9]+\.[A-z0-9]+\.[A-z0-9]+\/[A-z0-9]+\/[A-z0-9\-]+)/i)[1];return decodeURIComponent(t)+".jpg"}}var $={fetch:function(l){if(void 0===l.maxTweets&&(l.maxTweets=20),void 0===l.enableLinks&&(l.enableLinks=!0),void 0===l.showUser&&(l.showUser=!0),void 0===l.showTime&&(l.showTime=!0),void 0===l.dateFunction&&(l.dateFunction="default"),void 0===l.showRetweet&&(l.showRetweet=!0),void 0===l.customCallback&&(l.customCallback=null),void 0===l.showInteraction&&(l.showInteraction=!0),void 0===l.showImages&&(l.showImages=!1),void 0===l.useEmoji&&(l.useEmoji=!1),void 0===l.linksInNewWindow&&(l.linksInNewWindow=!0),void 0===l.showPermalinks&&(l.showPermalinks=!0),void 0===l.dataOnly&&(l.dataOnly=!1),o)i.push(l);else{o=!0,e=l.domId,t=l.maxTweets,n=l.enableLinks,s=l.showUser,a=l.showTime,c=l.showRetweet,r=l.dateFunction,d=l.customCallback,h=l.showInteraction,u=l.showImages,p=l.useEmoji,f=l.linksInNewWindow,m=l.showPermalinks,g=l.dataOnly;var w=document.getElementsByTagName("head")[0];null!==v&&w.removeChild(v),(v=document.createElement("script")).type="text/javascript",void 0!==l.list?v.src="https://syndication.twitter.com/timeline/list?callback=__twttrf.callback&dnt=false&list_slug="+l.list.listSlug+"&screen_name="+l.list.screenName+"&suppress_response_codes=true&lang="+(l.lang||"en")+"&rnd="+Math.random():void 0!==l.profile?v.src="https://syndication.twitter.com/timeline/profile?callback=__twttrf.callback&dnt=false&screen_name="+l.profile.screenName+"&suppress_response_codes=true&lang="+(l.lang||"en")+"&rnd="+Math.random():void 0!==l.likes?v.src="https://syndication.twitter.com/timeline/likes?callback=__twttrf.callback&dnt=false&screen_name="+l.likes.screenName+"&suppress_response_codes=true&lang="+(l.lang||"en")+"&rnd="+Math.random():v.src="https://cdn.syndication.twimg.com/widgets/timelines/"+l.id+"?&lang="+(l.lang||"en")+"&callback=__twttrf.callback&suppress_response_codes=true&rnd="+Math.random(),w.appendChild(v)}},callback:function(v){if(void 0===v||void 0===v.body)return o=!1,void(i.length>0&&($.fetch(i[0]),i.splice(0,1)));p||(v.body=v.body.replace(/(<img[^c]*class="Emoji[^>]*>)|(<img[^c]*class="u-block[^>]*>)/g,"")),u||(v.body=v.body.replace(/(<img[^c]*class="NaturalImage-image[^>]*>|(<img[^c]*class="CroppedImage-image[^>]*>))/g,"")),s||(v.body=v.body.replace(/(<img[^c]*class="Avatar"[^>]*>)/g,""));var C=document.createElement("div");function k(e){var t=e.getElementsByTagName("img")[0];if(t)t.src=t.getAttribute("data-src-2x");else{var n=e.getElementsByTagName("a")[0].getAttribute("href").split("twitter.com/")[1],i=document.createElement("img");i.setAttribute("src","https://twitter.com/"+n+"/profile_image?size=bigger"),e.prepend(i)}return e}C.innerHTML=v.body,void 0===C.getElementsByClassName&&(l=!1);var T=[],_=[],E=[],A=[],L=[],N=[],I=[],H=0;if(l)for(var M=C.getElementsByClassName("timeline-Tweet");H<M.length;)M[H].getElementsByClassName("timeline-Tweet-retweetCredit").length>0?L.push(!0):L.push(!1),(!L[H]||L[H]&&c)&&(T.push(M[H].getElementsByClassName("timeline-Tweet-text")[0]),N.push(M[H].getAttribute("data-tweet-id")),s&&_.push(k(M[H].getElementsByClassName("timeline-Tweet-author")[0])),E.push(M[H].getElementsByClassName("dt-updated")[0]),I.push(M[H].getElementsByClassName("timeline-Tweet-timestamp")[0]),void 0!==M[H].getElementsByClassName("timeline-Tweet-media")[0]?A.push(M[H].getElementsByClassName("timeline-Tweet-media")[0]):A.push(void 0)),H++;else for(M=y(C,"timeline-Tweet");H<M.length;)y(M[H],"timeline-Tweet-retweetCredit").length>0?L.push(!0):L.push(!1),(!L[H]||L[H]&&c)&&(T.push(y(M[H],"timeline-Tweet-text")[0]),N.push(M[H].getAttribute("data-tweet-id")),s&&_.push(k(y(M[H],"timeline-Tweet-author")[0])),E.push(y(M[H],"dt-updated")[0]),I.push(y(M[H],"timeline-Tweet-timestamp")[0]),void 0!==y(M[H],"timeline-Tweet-media")[0]?A.push(y(M[H],"timeline-Tweet-media")[0]):A.push(void 0)),H++;T.length>t&&(T.splice(t,T.length-t),_.splice(t,_.length-t),E.splice(t,E.length-t),L.splice(t,L.length-t),A.splice(t,A.length-t),I.splice(t,I.length-t));var O=[],B=(H=T.length,0);if(g)for(;B<H;)O.push({tweet:T[B].innerHTML,author:_[B]?_[B].innerHTML:"Unknown Author",author_data:{profile_url:_[B]?_[B].querySelector('[data-scribe="element:user_link"]').href:null,profile_image:_[B]?"https://twitter.com/"+_[B].querySelector('[data-scribe="element:screen_name"]').title.split("@")[1]+"/profile_image?size=bigger":null,profile_image_2x:_[B]?"https://twitter.com/"+_[B].querySelector('[data-scribe="element:screen_name"]').title.split("@")[1]+"/profile_image?size=original":null,screen_name:_[B]?_[B].querySelector('[data-scribe="element:screen_name"]').title:null,name:_[B]?_[B].querySelector('[data-scribe="element:name"]').title:null},time:E[B].textContent,timestamp:E[B].getAttribute("datetime").replace("+0000","Z").replace(/([\+\-])(\d\d)(\d\d)/,"$1$2:$3"),image:x(A[B]),rt:L[B],tid:N[B],permalinkURL:void 0===I[B]?"":I[B].href}),B++;else for(;B<H;){if("string"!=typeof r){var D=E[B].getAttribute("datetime"),P=new Date(E[B].getAttribute("datetime").replace(/-/g,"/").replace("T"," ").split("+")[0]),W=r(P,D);if(E[B].setAttribute("aria-label",W),T[B].textContent)if(l)E[B].textContent=W;else{var j=document.createElement("p"),S=document.createTextNode(W);j.appendChild(S),j.setAttribute("aria-label",W),E[B]=j}else E[B].textContent=W}var F="";n?(f&&(b(T[B]),s&&b(_[B])),s&&(F+='<div class="user">'+w(_[B].innerHTML)+"</div>"),F+='<p class="tweet">'+w(T[B].innerHTML)+"</p>",a&&(F+=m?'<p class="timePosted"><a href="'+I[B]+'">'+E[B].getAttribute("aria-label")+"</a></p>":'<p class="timePosted">'+E[B].getAttribute("aria-label")+"</p>")):(T[B].textContent,s&&(F+='<p class="user">'+_[B].textContent+"</p>"),F+='<p class="tweet">'+T[B].textContent+"</p>",a&&(F+='<p class="timePosted">'+E[B].textContent+"</p>")),h&&(F+='<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+N[B]+'" class="twitter_reply_icon"'+(f?' target="_blank" rel="noopener">':">")+'Reply</a><a href="https://twitter.com/intent/retweet?tweet_id='+N[B]+'" class="twitter_retweet_icon"'+(f?' target="_blank" rel="noopener">':">")+'Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id='+N[B]+'" class="twitter_fav_icon"'+(f?' target="_blank" rel="noopener">':">")+"Favorite</a></p>"),u&&void 0!==A[B]&&void 0!==x(A[B])&&(F+='<div class="media"><img src="'+x(A[B])+'" alt="Image from tweet" /></div>'),u?O.push(F):!u&&T[B].textContent.length&&O.push(F),B++}!function(t){if(null===d){for(var n=t.length,i=0,o=document.getElementById(e),a="<ul>";i<n;)a+="<li>"+t[i]+"</li>",i++;a+="</ul>",o.innerHTML=a}else d(t)}(O),o=!1,i.length>0&&($.fetch(i[0]),i.splice(0,1))}};return window.__twttrf=$,window.twitterFetcher=$,$})?i.apply(t,o):i)||(e.exports=a),[Element.prototype,Document.prototype,DocumentFragment.prototype].forEach(function(e){e.hasOwnProperty("prepend")||Object.defineProperty(e,"prepend",{configurable:!0,enumerable:!0,writable:!0,value:function(){var e=Array.prototype.slice.call(arguments),t=document.createDocumentFragment();e.forEach(function(e){var n=e instanceof Node;t.appendChild(n?e:document.createTextNode(String(e)))}),this.insertBefore(t,this.firstChild)}})})},obHX:function(e,t){},syIL:function(e,t){var n,i,o,a=(n=jQuery,i={detectionDivs:{bootstrap:{xs:n('<div class="device-xs visible-xs visible-xs-block"></div>'),sm:n('<div class="device-sm visible-sm visible-sm-block"></div>'),md:n('<div class="device-md visible-md visible-md-block"></div>'),lg:n('<div class="device-lg visible-lg visible-lg-block"></div>')},foundation:{small:n('<div class="device-xs show-for-small-only"></div>'),medium:n('<div class="device-sm show-for-medium-only"></div>'),large:n('<div class="device-md show-for-large-only"></div>'),xlarge:n('<div class="device-lg show-for-xlarge-only"></div>')}},applyDetectionDivs:function(){n(document).ready(function(){n.each(o.breakpoints,function(e){o.breakpoints[e].appendTo(".responsive-bootstrap-toolkit")})})},isAnExpression:function(e){return"<"==e.charAt(0)||">"==e.charAt(0)},splitExpression:function(e){var t=e.charAt(0),n="="==e.charAt(1),i=1+(n?1:0);return{operator:t,orEqual:n,breakpointName:e.slice(i)}},isAnyActive:function(e){var t=!1;return n.each(e,function(e,n){if(o.breakpoints[n].is(":visible"))return t=!0,!1}),t},isMatchingExpression:function(e){var t=i.splitExpression(e),n=Object.keys(o.breakpoints),a=n.indexOf(t.breakpointName);if(-1!==a){var s=0,r=0;"<"==t.operator&&(s=0,r=t.orEqual?++a:a),">"==t.operator&&(s=t.orEqual?a:++a,r=void 0);var l=n.slice(s,r);return i.isAnyActive(l)}}},o={interval:300,framework:null,breakpoints:null,is:function(e){return i.isAnExpression(e)?i.isMatchingExpression(e):o.breakpoints[e]&&o.breakpoints[e].is(":visible")},use:function(e,t){o.framework=e.toLowerCase(),"bootstrap"===o.framework||"foundation"===o.framework?o.breakpoints=i.detectionDivs[o.framework]:o.breakpoints=t,i.applyDetectionDivs()},current:function(){var e="unrecognized";return n.each(o.breakpoints,function(t){o.is(t)&&(e=t)}),e},changed:function(e,t){var n;return function(){clearTimeout(n),n=setTimeout(function(){e()},t||o.interval)}}},n(document).ready(function(){n('<div class="responsive-bootstrap-toolkit"></div>').appendTo("body")}),null===o.framework&&o.use("bootstrap"),o);void 0!==e&&e.exports&&(e.exports=a)}});