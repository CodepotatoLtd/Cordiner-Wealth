/*
* Copyright 2020-2021, www.SuperSignature.com
* This code is not a freeware. You need to buy it before use!
* ver 1.5.0.4 September 2019
*/
var $ = jQuery.noConflict();

ValidateSignature=function(b){var g=!0;if(null==b||"undefined"==b||""==b)for(b=0;b<signObjects.length;b++){var k=signObjects[b];eval("obj"+k).IsValid()||(g=!1,isMobileIE||(document.getElementById(k).style.borderColor="red"))}else g=eval("obj"+b).IsValid(),isMobileIE||0!=g||(document.getElementById(b).style.borderColor="red");return g};ClearSignature=function(b){if(null==b||"undefined"==b||""==b)for(var g=0;g<signObjects.length;g++)b=signObjects[g],eval("obj"+b).ResetClick();else eval("obj"+b).ResetClick()};
ResizeSignature=function(b,g,k){eval("obj"+b).ResizeSignature(g,k)};SignatureColor=function(b,g){eval("obj"+b).SignatureColor(g)};SignatureBackColor=function(b,g){eval("obj"+b).SignatureBackColor(g)};SignaturePen=function(b,g){eval("obj"+b).SignaturePen(g)};SignatureEnabled=function(b,g){eval("obj"+b).SignatureEnabled(g)};SignatureStatusBar=function(b,g){eval("obj"+b).SignatureStatusBar(g)};SignatureTotalPoints=function(b){return eval("obj"+b).CurrentTotalpoints()};
UndoSignature=function(b){eval("obj"+b).UndoSignature()};LoadSignature=function(b,g){eval("obj"+b).LoadSignature(g)};TextSignature=function(b,g,k,n,h){eval("obj"+b).TextSignature(g,k,n,h)};var msie=window.navigator.userAgent.toUpperCase().indexOf("MSIE "),isIE=!1,isIENine=!1,isIETen=!1,isMobileIE=!1,isOperaMini=!1,isIETablet=!1,winTabletPointerEvt=!1,iever=getInternetExplorerVersion(),isPointer=!1,isAndroid=!1;0<window.navigator.userAgent.toUpperCase().indexOf("OPERA MINI")&&(isOperaMini=!0);
0<window.navigator.userAgent.toUpperCase().indexOf("OPERA MOBI")&&(isOperaMini=!0);function supports_canvas(){try{return document.createElement("canvas").getContext("2d"),!0}catch(b){return!1}}function getInternetExplorerVersion(){var b=-1;"Microsoft Internet Explorer"==window.navigator.appName&&null!=/MSIE ([0-9]{1,}[.0-9]{0,})/.exec(window.navigator.userAgent)&&(b=parseFloat(RegExp.$1));return b}
0<msie&&(isIE=!0,supports_canvas()&&(isIE=!1,9<=iever&&(isIENine=!0)),0<window.navigator.userAgent.toUpperCase().indexOf("IEMOBILE ")&&(isMobileIE=!0));isIETablet=/Tablet PC/i.test(window.navigator.userAgent);winTabletPointerEvt=!!window.navigator.msPointerEnabled;isIETablet||(0<window.navigator.userAgent.toUpperCase().indexOf("WINDOWS PHONE ")&&(isIETablet=!0),window.navigator.msMaxTouchPoints&&(isIETablet=!0));
function SuperSignature(b){function g(a,c,d){a.myEvents||(a.myEvents={});a.myEvents[c]||(a.myEvents[c]=[]);a=a.myEvents[c];a[a.length]=d}function k(a){return a.replace(/\s*((\S+\s*)*)/,"$1")}function n(a){return a.replace(/((\s*\S+)*)\s*/,"$1")}function h(a){if(null!=V&&"undefined"!=V)try{V.innerHTML=a+"...<br/>"+V.innerHTML}catch(c){alert(c.description)}}function p(a){a=a.replace("undefined ","");a=a.replace("undefined","");var c="",d,f=0;a=a.replace(/\x0d\x0a/g,"\n");var l="";for(d=0;d<a.length;d++){var u=
a.charCodeAt(d);128>u?l+=String.fromCharCode(u):(127<u&&2048>u?l+=String.fromCharCode(u>>6|192):(l+=String.fromCharCode(u>>12|224),l+=String.fromCharCode(u>>6&63|128)),l+=String.fromCharCode(u&63|128))}for(a=l;f<a.length;){var A=a.charCodeAt(f++);l=a.charCodeAt(f++);d=a.charCodeAt(f++);u=A>>2;A=(A&3)<<4|l>>4;var Y=(l&15)<<2|d>>6;var v=d&63;isNaN(l)?Y=v=64:isNaN(d)&&(v=64);c=c+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(u)+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(A)+
"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(Y)+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(v)}return c}function r(){w[0]=0;for(var a=1;a<w.length;a++)w[0]+=w[a];qa=w[0]>=ra?!0:!1;sa=w[0];a="";J[0]="1,"+W+","+ta+","+F+","+G+","+oa+","+w[0]+","+C+";";for(var c=0;c<J.length;c++)a+=J[c];H.value=1<J.length?p(a):"";if(!isIE&&ia)if(c="",0<P.length){for(var d=0;d<P.length;d++){var f=P[d];if(f.length)for(a=0;a<f.length;a++)c+=f[a].x+" "+f[a].y+
",";else c=c+f.x+" "+f.y+",";c+=";"}R.value=p(c);a=document.getElementById(C).toDataURL();S.value="data:,"==a?"":a}else R.value="",S.value=""}function t(a){a.splice(0,1);for(var c=[],d=0;d<a.length;d++){var f=a[d].split(",");c.push({x:parseInt(f[0]),y:parseInt(f[1])})}return c}function q(a){e.clearRect(0,0,F,G);if(0<T.length){var c=new Image;$(c).bind("load",function(){});c.src=T}else SignatureBackColor(C,W);for(c=0;c<P.length;c++){var d=P[c],f=ba[c].split(","),l=f[0];f=f[1];if(d.length)for(e.beginPath(),
e.lineWidth=l,e.moveTo(d[0].x*a,d[0].y*a),l=1;l<=d.length-3;l+=3)e.bezierCurveTo(d[l].x*a,d[l].y*a,d[l+1].x*a,d[l+1].y*a,d[l+2].x*a,d[l+2].y*a),e.strokeStyle=f,e.stroke(),e.beginPath(),e.moveTo(d[l+2].x*a,d[l+2].y*a);else e.beginPath(),e.moveTo(d.x*a,d.y*a),e.arc(d.x*a,d.y*a,l/2,0,2*Math.PI,!1),e.strokeStyle=f,e.fill(),e.stroke();e.closePath()}}function y(a){var c=curtop=0;if(ja)c=$("#"+a.id).offset().left,curtop=$("#"+a.id).offset().top;else if(a.offsetParent){do c+=a.offsetLeft,curtop+=a.offsetTop;
while(a=a.offsetParent)}return[c,curtop]}function X(){ka=!0;pa=!1;if(0<K.length&&(J[B]=" "+K.join(" ")+";",!isIE&&ia)){ba.push(K[0]);var a=t(K);0<a.length&&(a=new BezierCurves(a,30),P.push(a),q(1))}r();Q.innerHTML=w[0]<ra?Aa:Ba;isIE?e.innerHTML=e.innerHTML:(e.closePath(),e.restore());D&&(la=ma=0)}function M(a){a.preventManipulation&&a.preventManipulation();a.preventDefault?a.preventDefault():a.returnValue&&(a.returnValue=!1);a.stopPropagation&&a.stopPropagation()}this.SignObject="";this.PenSize=3;
this.PenColor="#D24747";this.ClearImage=this.PenCursor="";this.BorderWidth="2px";this.BorderStyle="dashed";this.BorderColor="#DCDCDC";this.BackColor="#ffffff";this.BackImageUrl="";this.SignzIndex="99";this.SignWidth=450;this.SignHeight=250;this.CssClass="";this.ApplyStyle=!0;this.SignToolbarBgColor="transparent";this.RequiredPoints=50;this.ErrorMessage="Please continue your signature.";this.StartMessage="Please sign";this.SuccessMessage="Signature OK.";this.ImageScaleFactor=.5;this.Visible=this.Enabled=
this.TransparentSign=!0;this.Edition="Trial";this.IsCompatible=!1;this.LicenseKey=this.InternalError="";this.IeModalFix=!1;this.ResetFunction=this.ErrorFunction=this.SuccessFunction="";this.SmoothSign=!0;this.forceMouseEvent=this.jQueryEvent=!1;for(var N in b)this[N]=b[N];var B=0,D=!1,e=null,O=null,m=null,Q=null,z=null,H=null,R=null,S=null,V=null,I=this.Enabled,pa=!1,ka=!1,J=[],K=[],w=[],P=[],ba=[],ua=!1,L=this.PenSize,U=this.PenColor,W=this.BackColor,Ca=this.BorderColor,C=this.SignObject,F=this.SignWidth,
G=this.SignHeight,va=this.StartMessage,Aa=this.ErrorMessage,Ba=this.SuccessMessage,T=this.BackImageUrl,qa=!1,ta=this.ImageScaleFactor,oa=this.TransparentSign,ra=this.RequiredPoints,sa=0,Z=0,aa=0,ma=0,la=0,ja=this.IeModalFix,na=null,wa=0,xa=0,ia=this.SmoothSign,Da=this.jQueryEvent,ca=!1,da=!1,ea=!1,fa=!1,ha=!1,ya=!1;if(isMobileIE){var E=new jsGraphics(C+"_Container");if(null!=E&&"undefined"!=E)try{E.clear(),E.paint()}catch(a){alert("Graphics object error "+a.description)}else alert("Graphics object error")}this.IsValid=
function(){return qa};this.CurrentTotalpoints=function(){return sa};this.ReturnFalse=function(a){a.preventManipulation&&a.preventManipulation();a.preventDefault?a.preventDefault():a.returnValue=!1};this.XBrowserAddHandler=function(a,c,d){if(a.addEventListener)a.addEventListener(c,d,!1);else if(a.attachEvent)a.attachEvent("on"+c,d);else try{g(a,c,d),a["on"+c]=function(){if(a&&a.myEvents&&a.myEvents[c])for(var f=a.myEvents[c],l=0,u=f.length;l<u;l++)f[l]()}}catch(f){alert("Event attaching exception, "+
f.description)}};this.DisableSelection=function(){isIE||("undefined"!=typeof m.style.MozUserSelect?m.style.MozUserSelect="none":m.style.cursor="default")};this.ResizeSignature=function(a,c){m.style.width=a+"px";m.style.height=c+"px";z.style.width=a+"px";if(isIE)e.style.width=a+"px",e.style.height=c+"px";else{var d=document.getElementById(this.SignObject);d.width=parseInt(a,0);d.height=parseInt(c,0);d.style.width=a+"px";d.style.height=c+"px"}this.ResetClick();this.SignWidth=a;this.SignHeight=c;F=a;
G=c};this.SignatureColor=function(a){U=this.PenColor=a};this.SignatureBackColor=function(a){W=this.BackColor=a;isIE?e.style.backgroundColor=a:(e.fillStyle=a,e.fillRect(0,0,F,G))};this.SignaturePen=function(a){L=this.PenSize=a};this.SignatureEnabled=function(a){I=this.Enabled=a};this.SignatureStatusBar=function(a){a?$("#"+z.id).show("slow"):$("#"+z.id).hide("slow")};this.UndoSignature=function(){if(2>=J.length)this.ResetClick();else{J.pop();P.pop();w.pop();ba.pop();r();var a="'"+H.value+"'";var c=
"",d=0;/[^A-Za-z0-9\+\/=]/g.exec(a);a=a.replace(/[^A-Za-z0-9\+\/=]/g,"");do{var f="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(d++));var l="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(d++));var u="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(d++));var A="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(d++));f=f<<2|l>>4;l=(l&15)<<4|u>>2;var Y=(u&
3)<<6|A;c+=String.fromCharCode(f);64!=u&&(c+=String.fromCharCode(l));64!=A&&(c+=String.fromCharCode(Y))}while(d<a.length);a=unescape(c);this.LoadSignature(a,1)}};this.LoadSignature=function(a,c){this.ResetClick();a=a.replace("undefined ","");a=a.replace("undefined","");if(null==c||"undefined"==c)c="1.0";c=parseFloat(c);y(m);var d=n(k(a)).split(";");J[0]="";for(var f=0;f<d.length-1;f++)J[f]=d[f]+";";for(f=0;f<d.length-1;f++){var l=n(k(d[f])).split(" ");3==l.length&&l[2]==l[1]&&l.pop();ba[f]=l[0];P[f]=
new BezierCurves(t(l),30)}f=d[0].split(",");W=f[1];F=f[3];G=f[4];oa=f[5];0==T.length&&this.SignatureBackColor(W);w[0]=0;f=1;for(l=d.length;f<l-1;f++){var u=n(k(d[f])).split(" ");w[f]=parseInt(u.length,0)-1;w[0]=parseInt(w[0],0)+parseInt(u.length,0);for(var A=0,Y=u.length;A<Y;A++){var v=u[A].split(","),x=v[0];v=v[1];if(0==A)this.SignaturePen(x),this.SignatureColor(v),e.strokeStyle=v,e.lineWidth=x;else if(1==A){x=Math.abs(parseInt(x,0)*c);v=Math.abs(parseInt(v,0)*c);if(isIE)if(isMobileIE)Z=x,aa=v;else{var za=
'"m'+x+","+v+" l"+x+","+v,Ea='<SuperSignature:shape id="'+C+"_l_"+(f-1)+'" style="position: absolute; left:0px; top:0px; width:'+F+"px; height: "+G+'px;" coordsize="'+F+","+G+'"><SuperSignature:path v='+za+' e" /><SuperSignature:fill on="false" /><SuperSignature:stroke weight="'+(L+'" color="'+U+'" /></SuperSignature:shape>');e.pathCoordString=za;e.insertAdjacentHTML("beforeEnd",Ea)}else e.beginPath(),e.lineJoin="round",e.lineCap="round",e.moveTo(x,v);2==u.length&&eval("obj"+C).DrawDot(x,v)}else if(x=
Math.abs(parseInt(x,0)*c),v=Math.abs(parseInt(v,0)*c),isIE||ia){if(e.pathCoordString+=" "+x+","+v,x=document.getElementById(C+"_l_"+(f-1)))if(x=x.firstChild)try{x.setAttribute("v",e.pathCoordString+" e")}catch(Fa){}}else e.strokeStyle=U,e.lineWidth=L,e.lineTo(x,v),e.stroke(),e.moveTo(x,v);isIE?e.innerHTML=e.innerHTML:(e.closePath(),e.restore())}B++}!isIE&&ia&&q(c);r()};this.TextSignature=function(a,c,d,f){da&&(e.font=a,e.fillText(c,d,f))};this.CheckCompatibility=function(){if(isIE)this.IsCompatible=
!0,isMobileIE||document.namespaces.SuperSignature||document.namespaces.add("SuperSignature","urn:schemas-microsoft-com:vml","#default#VML");else{try{da=!!document.createElement("canvas").getContext("2d")}catch(a){da=!!document.createElement("canvas").getContext}da?this.IsCompatible=!0:document.write("Your browser does not support our signature control.")}};this.MouseMove=function(a){if(I&&pa){"undefined"!==typeof a.originalEvent&&(a=a.originalEvent);M(a);var c=$("#"+m.id).offset();if(D&&"undefined"!==
typeof a.targetTouches){var d=a.targetTouches[0];var f=d.clientX-ma;d=d.clientY-la;ja&&(d-=parseInt($(document).scrollTop()),f-=parseInt($(document).scrollLeft()))}else a.originalEvent?a.pageX?(f=parseInt(a.pageX-c.left),d=parseInt(a.pageY-c.top)):(f=parseInt(a.originalEvent.pageX-c.left),d=parseInt(a.originalEvent.pageY-c.top)):isIE||isIENine?(f=parseInt(a.x),d=parseInt(a.y),9<=iever&&(f=parseInt(a.pageX-c.left),d=parseInt(a.pageY-c.top))):(f=parseInt(a.pageX-c.left),d=parseInt(a.pageY-c.top));fa&&
ha&&(f=parseInt(a.offsetX||a.layerX),d=parseInt(a.offsetY||a.layerY));(ca||ea)&&-1==a.type.indexOf("touch")&&(f=a.clientX-O.getBoundingClientRect().left,d=a.clientY-O.getBoundingClientRect().top);isMobileIE?K.push(Math.abs(parseInt(f)-parseInt(m.offsetLeft))+","+Math.abs(parseInt(d)-parseInt(m.offsetTop))):K.push(Math.abs(parseInt(f))+","+Math.abs(parseInt(d)));w[B]++;if(isIE)if(isMobileIE){if(a=f-Z,c=d-aa,64<a*a+c*c){if(null!=E&&"undefined"!=E)try{E.setStroke(L),E.setColor(U),E.drawLine(Z,aa,f,d),
E.paint()}catch(l){h("Drawing error: "+l.description)}else h("Graphics object NULL");Z=f;aa=d}}else{if(e.pathCoordString+=" "+f+","+d,f=document.getElementById(C+"_l_"+B))if(f=f.firstChild){try{f.setAttribute("v",e.pathCoordString+" e")}catch(l){}ua&&0==w[B]%8&&(e.innerHTML=e.innerHTML)}}else e.lineTo(f,d),e.stroke()}};this.DrawDot=function(a,c){w[B]++;isIE?e.insertAdjacentHTML("beforeEnd",'<SuperSignature:oval id="'+C+"_l_"+B+'" style="position: absolute; left:'+a+"px; top:"+c+"px; width:"+L+"px; height: "+
L+'px;""><SuperSignature:stroke weight="'+(L+'" color="'+U+'" /></SuperSignature:oval>')):(e.arc(a,c,L/2,0,2*Math.PI,!1),e.fill(),e.stroke())};this.MouseOut=function(a){I&&(M(a),h("Mouse out"),ka||X())};this.MouseUp=function(a){if(I){"undefined"!==typeof a.originalEvent&&(a=a.originalEvent);M(a);h("Mouse up");if(null!=na){var c=parseInt(new Date-na);if(125>c){h("Time diff "+c);if(D)c=wa,a=xa;else{var d=$("#"+m.id).offset();a.originalEvent?a.pageX?(c=parseInt(a.pageX-d.left),a=parseInt(a.pageY-d.top)):
(c=parseInt(a.originalEvent.pageX-d.left),a=parseInt(a.originalEvent.pageY-d.top)):isIE||isIENine?(c=parseInt(a.x),a=parseInt(a.y)):(c=parseInt(a.pageX-d.left),a=parseInt(a.pageY-d.top))}isIE&&(h("Drawing Dot At ("+c+","+a+")"),eval("obj"+C).DrawDot(c,a))}na=null}ka||X()}};this.MouseDown=function(a){if(I){"undefined"!==typeof a.originalEvent&&(a=a.originalEvent);M(a);na=new Date;pa=!0;ka=!1;if(D&&"undefined"!==typeof a.targetTouches){var c=a.targetTouches[0];ma=O.getBoundingClientRect().left;la=O.getBoundingClientRect().top;
var d=c.clientX-ma;c=c.clientY-la;ja&&(c-=parseInt($(document).scrollTop()),d-=parseInt($(document).scrollLeft()));wa=d;xa=c}else{var f=$("#"+m.id).offset();a.originalEvent?a.pageX?(d=parseInt(a.pageX-f.left),c=parseInt(a.pageY-f.top)):(d=parseInt(a.originalEvent.pageX-f.left),c=parseInt(a.originalEvent.pageY-f.top)):isIE||isIENine?9>iever?(d=parseInt(a.x),c=parseInt(a.y)):isIENine&&(d=parseInt(a.pageX)-parseInt(f.left)+parseInt($("html").css("margin-left")),c=parseInt(a.pageY)-parseInt(f.top)+parseInt($("html").css("margin-top")),
10<=iever&&(d=parseInt(a.pageX-f.left),c=parseInt(a.pageY-f.top))):(d=parseInt(a.pageX-f.left),c=parseInt(a.pageY-f.top))}fa&&ha&&(d=parseInt(a.offsetX||a.layerX),c=parseInt(a.offsetY||a.layerY));(ca||ea)&&-1==a.type.indexOf("touch")&&(d=a.clientX-O.getBoundingClientRect().left,c=a.clientY-O.getBoundingClientRect().top);h("Down ("+d+","+c+")");B++;w[B]=0;K.length=0;K[0]=L+","+U;isMobileIE?K.push(Math.abs(parseInt(d)-parseInt(m.offsetLeft))+","+Math.abs(parseInt(c)-parseInt(m.offsetTop))):K.push(Math.abs(parseInt(d))+
","+Math.abs(parseInt(c)));isIE?isMobileIE?(Z=d,aa=c):(a='"m'+d+","+c+" l"+d+","+c,d='<SuperSignature:shape id="'+C+"_l_"+B+'" style="position: absolute; left:0px; top:0px; width:'+F+"px; height: "+G+'px;" coordsize="'+F+","+G+'"><SuperSignature:path v='+a+' e" /><SuperSignature:fill on="false" /><SuperSignature:stroke weight="'+(L+'" color="'+U+'" /></SuperSignature:shape>'),e.pathCoordString=a,e.insertAdjacentHTML("beforeEnd",d)):(e.save(),e.beginPath(),e.lineJoin="round",e.lineCap="round",e.strokeStyle=
U,e.lineWidth=L,e.moveTo(d,c));return!1}};this.ResetClick=function(a){I&&(isMobileIE||(document.getElementById(C).style.borderColor=Ca),isIE?(e.innerHTML="",isMobileIE&&(aa=Z=0,null!=E&&"undefined"!=E&&(E.clear(),E.paint())),0<T.length&&(e.style.backgroundImage='url("'+T+'")')):(e.clearRect(0,0,F,G),0<T.length?isIE?e.style.backgroundImage='url("'+T+'")':(a=new Image,$(a).bind("load",function(){e.drawImage(this,0,0)}),a.src=T):SignatureBackColor(C,W)),J=[],K=[],w=[],P=[],ba=[],r(),B=0,Q.innerHTML=
va)};this.Init=function(){if(this.Visible){if(this.CheckCompatibility(),this.IsCompatible){if(da){if("DIV"==document.getElementById(this.SignObject).nodeName.toUpperCase()){var a="<canvas ID='"+this.SignObject+"' width='"+F+"' height='"+G+"' style='left:0px;top:0px;position:absolute;'></canvas>";$("#"+this.SignObject).replaceWith(a);h("DIV changed to CANVAS");isIE=!1}}else"CANVAS"==document.getElementById(this.SignObject).nodeName.toUpperCase()&&(a="<div ID='"+this.SignObject+"' style='width:"+F+
"px;height:"+G+"px;left:0px;top:0px;'></div>",$("#"+this.SignObject).replaceWith(a),h("CANVAS changed to DIV"),isIE=!0);V=document.getElementById(this.SignObject+"_Debug");e=document.getElementById(this.SignObject);m=document.getElementById(this.SignObject+"_Container");if(e.addEventListener)h("addEventListener supported");else if(e.attachEvent)h("attachEvent supported");else{h("Mouse events are not supported");return}this.mouseMoved=!1;if(null!=e&&"undefined"!=e){h("Objects OK");isIE&&!isMobileIE&&
(ua=document.documentMode?8<=document.documentMode:!1);isMobileIE&&h("Mobile IE");isIENine&&h("IE 9 Or Above");isOperaMini&&h("Opera Mini, not supported.");w[0]=0;J[0]="1,"+W+","+ta+","+F+","+G+","+oa+","+w[0]+","+C+";";if(this.ApplyStyle){h("Setting up style");m.style.zIndex=this.SignzIndex;try{isMobileIE?(m.style.borderWidth=this.BorderWidth,m.style.borderStyle=this.BorderStyle,m.style.borderColor=this.BorderColor,m.style.backgroundColor=this.BackColor,0<this.PenCursor.length&&(m.style.cursor="url('"+
this.PenCursor+"'), pointer"),0<this.BackImageUrl.length&&(m.style.backgroundImage='url("'+this.BackImageUrl+'")')):(e.style.borderWidth=this.BorderWidth,e.style.borderStyle=this.BorderStyle,e.style.borderColor=this.BorderColor,e.style.backgroundColor=this.BackColor,0<this.PenCursor.length&&(e.style.cursor="url('"+this.PenCursor+"'), pointer"),0<this.BackImageUrl.length&&(e.style.backgroundImage='url("'+this.BackImageUrl+'")'),""!=this.CssClass&&(e.className=this.CssClass),e.style.width=this.SignWidth+
"px",e.style.height=this.SignHeight+"px","auto"==e.style.cursor&&(e.style.cursor="url('"+this.PenCursor+"'), hand")),h("Style OK")}catch(A){h("Style Error : "+A.description)}}a='<div id="'+this.SignObject+'_toolbar" style="margin:5px;position:relative;height:20px;width:'+this.SignWidth+"px;background-color:"+this.SignToolbarBgColor+';"><img  id="'+this.SignObject+'_resetbutton" src="'+this.ClearImage+'" style="cursor:pointer;float:right;height:24px;width:24px;border:0px solid transparent" alt="Clear Signature" />';
a+='<div id="'+this.SignObject+'_status" style="color:blue;height:20px;width:auto;padding:2px;font-family:verdana;font-size:12px;float:left;margin-right:30px;">'+this.StartMessage+"</div>";a+=null==document.getElementById(this.SignObject+"_data")?'<input type="hidden" id="'+this.SignObject+'_data" name="'+this.SignObject+'_data" value="">':"";a+=null==document.getElementById(this.SignObject+"_data_smooth")?'<input type="hidden" id="'+this.SignObject+'_data_smooth" name="'+this.SignObject+'_data_smooth" value="">':
"";a+=null==document.getElementById(this.SignObject+"_data_canvas")?'<input type="hidden" id="'+this.SignObject+'_data_canvas" name="'+this.SignObject+'_data_canvas" value="">':"";a+="</div>";h("Setting up tools");$("#"+m.id).after(a);B=0;a="mousedown";var c="mouseup",d="mousemove",f="mouseout";isIE&&(f="mouseleave");isAndroid=-1<navigator.userAgent.toLowerCase().indexOf("android");!0===isAndroid&&h("Android device");window.PointerEvent&&!isAndroid?(h("Pointer events supported"),isPointer=!0,a="pointerdown",
c="pointerup",d="pointermove",f="pointerleave"):h("NO Pointer events supported");D=/iPhone/i.test(navigator.userAgent)||/iPad/i.test(navigator.userAgent)||/Android/i.test(navigator.userAgent)||/playbook/i.test(navigator.userAgent)||/symbian/i.test(navigator.userAgent);D||isIE||(D="ontouchstart"in window||0<navigator.maxTouchPoints||0<navigator.msMaxTouchPoints,h("Touch check "+D));isIETablet&&h("Found Tablet 2.0 or Windows Phone or Touch Screen Device");winTabletPointerEvt?(h("MSPointer supported"),
a="MSPointerDown",c="MSPointerUp",d="MSPointerMove",f="MSPointerOut"):h("MSPointer NOT supported");"undefined"!=typeof e.style.msTouchAction&&(e.style.msTouchAction="none",$("#"+e.id).css("-ms-touch-action","none"),h("MS Touch CSS added"));"undefined"!=typeof m.style.msTouchAction&&(m.style.msTouchAction="none",$("#"+m.id).css("-ms-touch-action","none"));isIE||(O=document.getElementById(this.SignObject),e=document.getElementById(this.SignObject).getContext("2d"),e.width=this.SignWidth,e.height=this.SignHeight);
Q=document.getElementById(this.SignObject+"_status");Q.innerHTML=va;z=document.getElementById(this.SignObject+"_toolbar");H=document.getElementById(this.SignObject+"_data");R=document.getElementById(this.SignObject+"_data_smooth");S=document.getElementById(this.SignObject+"_data_canvas");var l=document.getElementById(this.SignObject+"_resetbutton");null!=l&&this.XBrowserAddHandler(l,"click",this.ResetClick);h("Attaching events");fa=/Tablet PC 2.0/i.test(navigator.userAgent);ha=/rv:11.0/i.test(navigator.userAgent);
ya=/Edge/i.test(navigator.userAgent);fa&&ha&&h("IE Surface Fix");l=/Windows NT/i.test(navigator.userAgent);var u=/Chrome/i.test(navigator.userAgent);ca=l&&u;ya&&(ca=!1,ea=!0);l&&fa&&ha&&(ea=!0);ca&&(h("Chrome Surface Fix"),this.IeModalFix=!1);ea&&(h("EDGE Surface Fix"),this.IeModalFix=!1);this.XBrowserAddHandler(e,"contextmenu",this.ReturnFalse);this.XBrowserAddHandler(m,"contextmenu",this.ReturnFalse);this.XBrowserAddHandler(m,"contextmenu",this.ReturnFalse);this.XBrowserAddHandler(m,"selectstart",
this.ReturnFalse);this.XBrowserAddHandler(m,"dragstart",this.ReturnFalse);this.XBrowserAddHandler(e,"contextmenu",this.ReturnFalse);this.XBrowserAddHandler(e,"selectstart",this.ReturnFalse);this.XBrowserAddHandler(e,"dragstart",this.ReturnFalse);ja=this.IeModalFix;h("IeModalFix "+this.IeModalFix);!this.IeModalFix||D||isIETablet?(isIE&&!isMobileIE?(this.XBrowserAddHandler(e,a,this.MouseDown),this.XBrowserAddHandler(e,c,this.MouseUp),this.XBrowserAddHandler(e,d,this.MouseMove)):(this.XBrowserAddHandler(m,
a,this.MouseDown),this.XBrowserAddHandler(m,c,this.MouseUp),this.XBrowserAddHandler(m,d,this.MouseMove),this.XBrowserAddHandler(m,f,this.MouseOut)),this.XBrowserAddHandler(e,f,this.MouseOut)):(this.XBrowserAddHandler(m,a,this.MouseDown),this.XBrowserAddHandler(m,c,this.MouseUp),this.XBrowserAddHandler(m,d,this.MouseMove),this.XBrowserAddHandler(m,f,this.MouseOut),h("ModalFix event attached"));D&&(h("Found iPhone, iPad, Android or Touch Screen Device"),this.XBrowserAddHandler(m,"touchstart",this.MouseDown),
this.XBrowserAddHandler(m,"touchend",this.MouseUp),this.XBrowserAddHandler(m,"touchmove",this.MouseMove));Da&&(h("Attaching jQuery Events"),$(m).bind(a,this.MouseDown),$(m).bind(c,this.MouseUp),$(m).bind(d,this.MouseMove),D||$(m).bind(f,this.MouseOut));h("isIE "+isIE);h("isIE 9+ "+isIENine);(isIE||isIENine||isIETablet)&&h("IE Ver - "+iever);supports_canvas()&&h("Canvas - Yes");I||h("Control is disabled");h("Ready")}else h("Error initializing signature control")}}else h("Control hidden")}}
BezierCurves=function(b,g){if(2>b.length)return b[0];this.points=[];for(var k=0;k<b.length;k++){var n=new Smooth(b[k].x,b[k].y);n.CheckValid(h)||this.points.push(n);var h=n;this.offSet=0;this.error=g;this.result=[];this.result.push({x:b[0].x,y:b[0].y+this.offSet})}return this.fit()};
BezierCurves.prototype={fit:function(){this.processFitPoints(0,this.points.length-1,this.points[1].MathFunc2(this.points[0]).nOR(),this.points[this.points.length-2].MathFunc2(this.points[this.points.length-1]).nOR());return this.result},processFitPoints:function(b,g,k,n){var h,p,r;if(1==g-b){b=this.points[b];g=this.points[g];var t=b.MathFunc6(g)/3;this.savePoints([b,b.MathFunc1(k.nOR(t)),g.MathFunc1(n.nOR(t)),g])}else{var q=this.cLP(b,g);var y=Math.max(this.error,this.error*this.error);for(h=0;4>=
h;h++){if(p=this.gB(b,g,q,k,n),r=this.fM(b,g,p,q),r.error<this.error){this.savePoints(p);return}if(t=r.index,r.error>=y)break;this.rP(b,g,q,p);y=r.error}q=this.points[t-1].MathFunc2(this.points[t]);y=this.points[t].MathFunc2(this.points[t+1]);q=q.MathFunc1(y).MathFunc4(2).nOR();this.processFitPoints(b,t,k,q);this.processFitPoints(t,g,q.MathFunc5(),n)}},savePoints:function(b){this.result.push({x:this.r2(b[1].x),y:this.r2(b[1].y+this.offSet)});this.result.push({x:this.r2(b[2].x),y:this.r2(b[2].y+this.offSet)});
this.result.push({x:this.r2(b[3].x),y:this.r2(b[3].y+this.offSet)})},r2:function(b){return Math.round(100*b)/100},gB:function(b,g,k,n,h){var p=1E-11,r=this.points[b],t=this.points[g],q=[[0,0],[0,0]],y=[0,0],X,M,N,B,D,e,O,m,Q=0;for(g=g-b+1;Q<g;Q++){var z=k[Q],H=1-z,R=3*z*H,S=H*H*H;H*=R;R*=z;var V=z*z*z;z=n.nOR(H);var I=h.nOR(R);S=this.points[b+Q].MathFunc2(r.MathFunc3(S+H)).MathFunc2(t.MathFunc3(R+V));q[0][0]+=z.dot(z);q[0][1]+=z.dot(I);q[1][0]=q[0][1];q[1][1]+=I.dot(I);y[0]+=z.dot(S);y[1]+=I.dot(S)}return X=
q[0][0]*q[1][1]-q[1][0]*q[0][1],Math.abs(X)>p?(B=q[0][0]*y[1]-q[1][0]*y[0],D=y[0]*q[1][1]-y[1]*q[0][1],M=D/X,N=B/X):(e=q[0][0]+q[0][1],O=q[1][0]+q[1][1],M=Math.abs(e)>p?N=y[0]/e:Math.abs(e)>p?N=y[1]/O:N=0),m=t.MathFunc6(r),p*=m,(M<p||N<p)&&(M=N=m/3),[r,r.MathFunc1(n.nOR(M)),t.MathFunc1(h.nOR(N)),t]},rP:function(b,g,k,n){for(var h=b;h<=g;h++)k[h-b]=this.fR(n,this.points[h],k[h-b])},fR:function(b,g,k){for(var n=[],h=[],p=0;2>=p;p++)n[p]=b[p+1].MathFunc2(b[p]).MathFunc3(3);for(p=0;1>=p;p++)h[p]=n[p+
1].MathFunc2(n[p]).MathFunc3(2);b=this.eV(3,b,k);n=this.eV(2,n,k);h=this.eV(1,h,k);g=b.MathFunc2(g);h=n.dot(n)+g.dot(h);return 1E-5>Math.abs(h)?k:k-g.dot(n)/h},eV:function(b,g,k){g=g.slice();for(var n,h=1;h<=b;h++)for(n=0;n<=b-h;n++)g[n]=g[n].MathFunc3(1-k).MathFunc1(g[n+1].MathFunc3(k));return g[0]},cLP:function(b,g){for(var k=[0],n,h=b+1;h<=g;h++)k[h-b]=k[h-b-1]+this.points[h].MathFunc6(this.points[h-1]);h=1;for(n=g-b;h<=n;h++)k[h]/=k[n];return k},fM:function(b,g,k,n){for(var h=Math.floor((g-b+
1)/2),p=0,r=b+1;r<g;r++){var t=this.eV(3,k,n[r-b]).MathFunc2(this.points[r]);t=t.x*t.x+t.y*t.y;t>=p&&(p=t,h=r)}return{error:p,index:h}}};Smooth=function(b,g){this.x=b;this.y=g};
Smooth.prototype={CheckPtArray:function(b){return"number"==typeof b?{x:b,y:b}:b},MathFunc1:function(b){b=this.CheckPtArray(b);return SmoothRet(this.x+b.x,this.y+b.y)},MathFunc2:function(b){b=this.CheckPtArray(b);return SmoothRet(this.x-b.x,this.y-b.y)},MathFunc3:function(b){b=this.CheckPtArray(b);return SmoothRet(this.x*b.x,this.y*b.y)},MathFunc4:function(b){b=this.CheckPtArray(b);return SmoothRet(this.x/b.x,this.y/b.y)},MathFunc5:function(){return SmoothRet(-this.x,-this.y)},MathFunc6:function(b,
g){var k=b.x-this.x,n=b.y-this.y;k=k*k+n*n;return g?k:Math.sqrt(k)},getLength:function(b){var g=this.x*this.x+this.y*this.y;return b?g:Math.sqrt(g)},nOR:function(b){void 0===b&&(b=1);var g=this.getLength();b=0!=g?b/g:0;return SmoothRet(this.x*b,this.y*b)},CheckValid:function(b){return null==b?!1:this.x==b.x&&this.y==b.y},dot:function(b){return this.x*b.x+this.y*b.y}};var SmoothRet=function(b,g){return new Smooth(b,g)};
Compress=function(b,g){var k=0,n=0,h=b.length,p="",r;g=Math.pow(10,g);for(r=0;r<h;r++){var t=Math.round(b[r].y*g);var q=Math.round(b[r].x*g);p+=EncodeStr(t-k);p+=EncodeStr(q-n);k=t;n=q}k=[["?","0"],["@","1"],["[","2"],["\\","3"],["]","4"],["^","5"],["`","6"],["{","7"],["|","8"],["}","9"]];for(r=0;r<k.length;r++)p=p.replaceAll(k[r][0],k[r][1]);return p};EncodeStr=function(b){b<<=1;var g;0>b&&(b=~b);for(g="";32<=b;)g+=String.fromCharCode((32|b&31)+63),b>>=5;return g+String.fromCharCode(b+63)};
String.prototype.replaceAll=function(b,g,k){return this.replace(new RegExp(b.replace(/([\/,!\\\^\$\{\}\[\]\(\)\.\*\+\?\|<>\-&])/g,"\\$&"),k?"gi":"g"),"string"==typeof g?g.replace(/\$/g,"$$$$"):g)};

/* End */
