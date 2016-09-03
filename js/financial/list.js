jQuery(document).ready(function(){ 
jQuery("#list1").jqGrid({ 
url:'payxml.php',
//url: 'show', 
datatype: 'xml', 
mtype: 'GET', 
colNames:['Initial','Call Name','Middle Name','Last Name','Payment Id','Amount','Pay Date', 'Payment Type'], 
colModel :[ 
{name:'INITIAL', index:'INITIAL',width:50},
{name:'CALL_NAME', index:'CALL_NAME',width:100},
{name:'MIDDLE_NAME', index:'MIDDLE_NAME',width:100},
{name:'LAST_NAME', index:'LAST_NAME',width:100},
{name:'PAYMENT_ID', index:'PAYMENT_ID',width:100},
{name:'AMOUNT', index:'AMOUNT',width:100},
{name:'PAY_DATE', index:'PAY_DATE',width:100},
{name:'PAYMENT_TYPE', index:'PAYMENT_TYPE',align:'left',width:150}
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
caption: 'Paid Student List', 
footerrow : true, 
hiddengrid: false,
userDataOnFooter : true 
}).navGrid('#pager1',{edit:false,add:false,del:false,view:false,search:false});  



}); 