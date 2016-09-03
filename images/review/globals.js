window.setTimeout('keepalive()', 540000)

function keepalive() {
	xhtmlReq('keepalive.asp')

	window.setTimeout('keepalive()', 2400000)
}

function fixUglyIE() { 
    for (a in document.links)
        document.links[a].onfocus = document.links[a].blur
}

if (document.all) {
    document.onmousedown = fixUglyIE
}

function xhtmlReq(f_sUrl) {
	var oXMLHTTP

	if (window.XMLHttpRequest) {
		oXMLHTTP = new XMLHttpRequest()
		oXMLHTTP.open("GET", f_sUrl, false)
		try {
			oXMLHTTP.send(null)
			return oXMLHTTP.responseText
		} catch(e) {
			alert('mislukt: ' + e)
		}
	} else if (window.ActiveXObject) {
		oXMLHTTP = new ActiveXObject("Microsoft.XMLHTTP")
		if (oXMLHTTP) {
			oXMLHTTP.open("GET", f_sUrl, false)
			try  {
				oXMLHTTP.send()
				return oXMLHTTP.responseText
			} catch (e) {
				alert('mislukt: ' + e)
			}
		}
	}
}

window.onload = function() {
	getWidthHeight()

    if(typeof init =='function')
        init()
}


function getWidthHeight() {
	var myWidth = 0, myHeight = 0;
	if( typeof( window.innerWidth ) == 'number' ) {
	//Non-IE
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
	} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
	    //IE 6+ in 'standards compliant mode'
	    myWidth = document.documentElement.clientWidth;
	    myHeight = document.documentElement.clientHeight;
	} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	    //IE 4 compatible
	    myWidth = document.body.clientWidth;
	    myHeight = document.body.clientHeight; 
	}
	document.getElementById("content").style.height = (myHeight - 225) + 'px'
}