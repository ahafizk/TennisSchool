<html>
<TITLE>WEB BASED USB FORMAT TOOL</TITLE>
<head>
<link href="acer.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
function showInstruction(type)
{
	var msg = "";
	if(type=='0')
	{
		var instruction = ["The Applet got an error with your current Plugin settings","Please go through the following steps:","1) Open Contol Panel","2) Click on Java" , "3) Select the Advanced Tab","4) Expand \"Java Plug-in Option\"","5) Uncheck \"Next Generation Java Plugin\" Option", "6) Restart the Browser"]; 
		for(var i=0; i<8;i++)
		{
			if(i==1)
				msg += "<p style='color:#00655A;font-size:16px;font-weight:bold;margin-top:0px;margin-bottom:8px;'>"+instruction[i]+"</p>";
			else	
				msg += "<p style='color:#00655A;font-size:16px;font-weight:bold;margin-top:0px;margin-bottom:4px;'>"+instruction[i]+"</p>";
			if(i==0)
			  msg += "<p></p>";
		}
	}else
	{
		msg = "<p style='color:#00655A;font-size:16px;font-weight:bold;margin-top:0px;margin-bottom:8px;'>Hello World</p>";		
	}
	var el = document.getElementById("instr_div");
	if(el!=null)
	{
		///alert(el.style.display);
		el.style.display='';
		el.innerHTML = msg;
	}
///		alert("I am here too");
}
function getNavigatorType() ///0=IE,1=Netscape,2=Opera etc..
{
	browsername = navigator.appName;
	if(browsername.indexOf("Netscape")!= -1) 
	{ 
		return 2;
	}
	else
	{
		if(browsername.indexOf("Microsoft")!=-1) 
		{
			return 1;
		}
		else 
		{
			return 3;
		}
	}
}
function isPluginInstalled()
{
	var type = getNavigatorType(); 
	///alert("Navigator: "+type);
	if(type==2)
	{
		for (i=0; i < navigator.plugins.length; i++)
		{
			for (j = 0; j < navigator.plugins[i].length; j++)
			{
			    var myType = navigator.plugins[i][j].type;  
				///alert(myType);
				if(myType.indexOf("application/x-java-applet") >= 0 )
				{
					return true;
				}
			}
		}
		return false;
	}else if(type==1)
	{
		var applet = document.getElementById("myApplet");
		if(applet == null)
		{
			return false;
		};
		try
		{
			var version = applet.getJavaVersion();
		}catch(e)
		{
			return false;
		}
		return true;
   }else
   {
	    for (i=0; i < navigator.plugins.length; i++)
		{
			for (j = 0; j < navigator.plugins[i].length; j++)
			{
				if(navigator.plugins[i][j].type == "application/x-java-applet;version=1.3")
				{
					
					return true;
				}
			}
		}
		return false;
   }
}
function checkAndWriteApplet()
{	
	
	var msg = '';
	var el = document.getElementById("applet_div");
	if(isPluginInstalled()==false)
	{
		if(el!=null)
			el.style.background = "#00FF00";
		msg += "<p style='color:#ff0000;font-size:14px;font-weight:bold;margin-top:150px;margin-bottom:4px;margin-left:2px;margin-right:2px;'>You do not have any JRE Installed</p>";
		msg += "<p style='color:#ff0000;font-size:14px;font-weight:bold;margin-top:8px;margin-bottom:4px;margin-left:2px;margin-right:2px;'>Please install the plugin and try again</p>";
	}else
	{	
		msg += "<p style='color:#00655A; font-size:20px; font-weight:bold; margin-bottom:0px;'> USB Device List </p>";
		msg += "<object id = 'USBApplet' classid='clsid:8AD9C840-044E-11D1-B3E9-00805F499D93' width = 400 height = 500 codebase='http://java.sun.com/products/plugin/autodl/jinstall-1_3-win.cab#Version=1,3,0,0'>";		
    	msg += "<param name = 'code' value = USBApplet>";
    	msg +=	"<param name='type' value='application/x-java-applet;version=1.3'>";
    	msg += "<param name='scriptable' value='true'>"
    	msg += "<param name = 'archive' value ='USBApplet.jar,jna.jar'>";
		///msg += "</object>";
    	msg += "<comment>";
   		msg += "<embed type='application/x-java-applet;version=1.3' code = USBApplet archive = USBApplet.jar,jna.jar width = 400 height = 500 scriptable=false pluginspage='http://java.sun.com/products/plugin/index.html#download'>";
        msg += "<noembed>";
        msg += "</noembed>";
   		msg += "</embed>";
    	msg += "</comment>";
		msg += "</object>";
		///alert(el.style.display);
	}
	
	if(el!=null)
		el.innerHTML = msg;
}
</script>
</head>
<body id="acerHomePublic">
<div id="page_content">
  <div id="page_header">
                    <div id="logo"></div>
                    <div id="slogan">Empowering people</div>
                    <div id="header_sub"> <span class=""> WorldWide </span> </div>
  </div>

  <div id="page_main" class="page_content_main" style="background:url(map.jpg) center left no-repeat;margin-top:5px;">
  <H1>WEB BASED USB FORMAT TOOL</H1>
  
  <div id="check_plugin">
   <object id="myApplet" classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93" WIDTH = 1 HEIGHT = 1 >
	<param name = "code" value = DetectPluginApplet.class >
	<param name="scriptable" value="true" > 
   </object>
   </div>

  <table width="100%">
  	<tr>
	<td width="50%">
  	<div id="applet_div" >
	</div>
	</td>
	<td width="50%">
		<div id="instr_div" style="display:none;">
		</div>
	</td>
	</tr>
  </table>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
 </div>
 <script type="text/javascript">
 	checkAndWriteApplet();
 </script>
</body>
</html>