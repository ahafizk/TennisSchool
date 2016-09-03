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