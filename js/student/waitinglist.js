jQuery(document).ready(function(){ 
jQuery("#list1").jqGrid({ 
url:'waitingxml.php',
//url: 'show', 
datatype: 'xml', 
mtype: 'GET', 
colNames:['Initial','Call Name','Middle Name','Last Name','Street','House No','Location', 'Email'], 
colModel :[ 
{name:'INITIAL', index:'INITIAL',width:50},
{name:'CALL_NAME', index:'CALL_NAME',width:100},
{name:'MIDDLE_NAME', index:'MIDDLE_NAME',width:100},
{name:'LAST_NAME', index:'LAST_NAME',width:100},
{name:'STREET', index:'STREET',width:100},
{name:'HOUSE_NO', index:'HOUSE_NO',width:100},
{name:'LOCATION', index:'LOCATION',width:100},
{name:'EMAIL', index:'EMAIL',align:'left',width:150}
],  
pager: jQuery('#pager1'),
shrinkToFit: true,
height: 300,
rowNum:15, 
rowList:[15,30,45,60,75,90,105,120,135,150], 
viewrecords: true, 
toolbar : [false,"top"], 
imgpath: '../../lib/jqGrid_1/themes/basic/images', 
caption: 'Waiting List', 
footerrow : true, 
hiddengrid: false,
userDataOnFooter : true 
}).navGrid('#pager1',{edit:false,add:false,del:false,view:false});  



}); 