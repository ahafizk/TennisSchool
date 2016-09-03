jQuery(document).ready(function(){ 
jQuery("#list1").jqGrid({ 
url:'listxml.php',
//url: 'show', 
datatype: 'xml', 
mtype: 'GET', 
colNames:['Initial','Call Name','Middle Name','Last Name','Birth date','Post code','House no', 'Email'], 
colModel :[ 
{name:'INITIAL', index:'INITIAL',width:50},
{name:'CALL_NAME', index:'CALL_NAME',width:100},
{name:'MIDDLE_NAME', index:'MIDDLE_NAME',width:100},
{name:'LAST_NAME', index:'LAST_NAME',width:100},
{name:'DATE_OF_BIRTH', index:'DATE_OF_BIRTH',width:100},
{name:'POST_CODE', index:'POST_CODE',width:100},
{name:'HOUSE_NUMBER', index:'HOUSE_NUMBER',width:100},
{name:'EMAIL', index:'EMAIL',align:'left',width:150}
],  
pager: jQuery('#pager1'),
shrinkToFit: true,
height: 300,
rowNum:15, 
sortname: 'initial',
sortorder: "desc",
rowList:[15,30,45,60,75,90,105,120,135,150], 
viewrecords: true, 
toolbar : [false,"top"], 
imgpath: '../../lib/jqGrid_1/themes/basic/images', 
caption: 'Assigned Student List', 
footerrow : true, 
hiddengrid: false,
userDataOnFooter : true 
}).navGrid('#pager1',{edit:false,add:false,del:false,view:false,search:false});  



}); 