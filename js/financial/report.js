jQuery(document).ready(function(){ 
jQuery("#list1").jqGrid({ 
url:'reportxml.php',
//url: 'show', 
datatype: 'xml', 
mtype: 'GET', 
colNames:['User Id','Initial','Call Name','Middle Name','Last Name','Payment Id','Amount','Date', 'Payment Status'], 
colModel :[ 
{name:'USER_ID', index:'USER_ID',width:50},		   
{name:'INITIAL', index:'INITIAL',width:50},
{name:'CALL_NAME', index:'CALL_NAME',width:100},
{name:'MIDDLE_NAME', index:'MIDDLE_NAME',width:100},
{name:'LAST_NAME', index:'LAST_NAME',width:100},
{name:'TUTION_FEES', index:'TUTION_FEES',width:100},
{name:'VAT', index:'VAT',width:100},
{name:'PAY_FOR', index:'PAY_FOR',width:100},
{name:'COLLECTION_DATE', index:'COLLECTION_DATE',align:'left',width:100}
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
caption: 'Paid status not OK', 
footerrow : true, 
hiddengrid: false,
userDataOnFooter : true 
}).navGrid('#pager1',{edit:false,add:false,del:false,view:false,search:false});  



}); 