/* -----------------------------------------------   Floating layer - v.1   (c) 2006 www.haan.net   contact: jeroen@haan.net   Upgraded by by Andrea S. - joomloversnet   Please inform us of any improvements made.   When usefull we will add your credits.  ------------------------------------------------ */  var myWidth = 0, myHeight = 0;  if( typeof( window.innerWidth ) == 'number' ) {    //Non-IE    myWidth = window.innerWidth;    myHeight = window.innerHeight;  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {    //IE 6+ in 'standards compliant mode'    myWidth = document.documentElement.clientWidth;    myHeight = document.documentElement.clientHeight;  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {    //IE 4 compatible    myWidth = document.body.clientWidth;    myWidth = document.body.clientHeight;  }function setVisible(obj){	obj = document.getElementById(obj);	obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';}function placeIt(obj){	obj = document.getElementById(obj);	if (document.documentElement)	{		theLeft = document.documentElement.scrollLeft;		theTop = document.documentElement.scrollTop;	}	else if (document.body)	{		theLeft = document.body.scrollLeft;		theTop = document.body.scrollTop;	}	theLeft += myWidth / 100 * 30;	theTop += myWidth / 100 * 5;	obj.style.left = theLeft + 'px' ;	obj.style.top = theTop + 'px' ;	setTimeout("placeIt('layer1')",500);}window.onscroll = setTimeout("placeIt('layer1')",500);