<?PHp
require_once('../../common/authentication.php');
require_once '../../control/student/cstudentprofile.php';
//$rauth = new Auth();
//session_start();
if($_SESSION['auth']!=1 && $_SESSION['user_type']!='user')
{
	forward('/sport/view/register/index.php');
	
}

require_once '../../view/student/studentmenu.php'; #it contains html header and menu too
?>

                  
                         <div class="art-PostContent">
                             
                              <p >
                                  <div id="navtitel">
                       <div align="center">Personal Tennis Information</div>
                    </div>
        		
                 
                  <br/>
                    
                  
                   <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >Tennis Info</div>
                  
                  </div>
                   <table>
                      <tr>
                          <td class="input_level">Member of Association:</td>
                          <td class="input_txt"><?php echo $ret['id_association'][0];?></td>
                          
                      </tr>
                       <tr>
                          <td class="input_level">Tennis Bond Number:</td>
                          <td class="input_txt"><?php echo $ret['tb_bonds_nummer'][0];?></td>
                          
                      </tr>
                       <tr>
                          <td class="input_level">Skill (Single):</td>
                          <td class="input_txt"><?php echo $ret['skill_single'][0];?></td>
                          
                      </tr>
                       <tr>
                          <td class="input_level">Skill (Double):</td>
                          <td class="input_txt"><?php echo $ret['skill_double'][0];?></td>
                          
                      </tr>
                   </table>
                   <?php require_once '../../view/student/studentfooter.php'; ?>