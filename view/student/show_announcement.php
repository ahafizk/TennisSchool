<?php
session_start();
if($_SESSION['auth']!=1 && $_SESSION['user_type']!='user')
{
	forward('/sport/view/register/index.php');
	
}
require_once '../../control/student/cstudentannouncemnet.php';
require_once  '../../view/student/studentmenu.php';
?>
  <div class="art-PostContent">
                             
                              <p >
                                  <div id="navtitel">
                       <div align="center">Latest Announcement</div>
                    </div>
        		
                 
                  <br/>
                    
                  
                   <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >Announcements</div>
                  
                  </div>
                  <table>
                      <thead><td class="input_level">Subject</td><td class="input_level">Announcement</td><td class="input_level">Date</td><td class="input_level">Signature</td></thead>
                  <?php
                  $str = '';
                  $i=0;

                  foreach ($ret as $key => $val)
                  {

                       $str .= "<tr class=\"input_txt\">"
                          . "<td>".$val['subject']."</td>"
                          . "<td>".$val['body']."</td>"
                          . "<td>".$val['created_on']."</td>"
                          . "<td>".$val['signature']."</td>"
                          . "</tr>";

                      
                  }
         
                  echo $str;
                  
                  ?>
                   
                  
                   </table>
<?php require_once '../../view/student/studentfooter.php'; ?>