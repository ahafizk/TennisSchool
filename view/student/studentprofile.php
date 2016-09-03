<?PHp
require_once('../../common/authentication.php');
require_once '../../control/student/cstudentprofile.php';
//$rauth = new Auth();
//session_start();
if($_SESSION['auth']!=1 && $_SESSION['user_type']!='user')
{
	forward('/sport/view/register/index.php');
	
}
require_once  '../../view/student/studentmenu.php';
?>

                  
                        <div class="art-PostContent">
                             
                              <p >
                                  <div id="navtitel">
                       <div align="center">Profile Information</div>
                    </div>
        		
                 
                  <br/>
                                      
                
                 
                  <table>
                      <tr>
                          <td class="input_level">Initial:</td>
                          <td class="input_txt"><?php echo $ret['initial'][0];?></td>
                          
                      </tr>
                       <tr>
                          <td class="input_level">First Name:</td>
                          <td class="input_txt"><?php echo $ret['call_name'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Middle Name:</td>
                          <td class="input_txt"><?php echo $ret['middle_name'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Last Name:</td>
                          <td class="input_txt"><?php echo $ret['last_name'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Gender</td>
                          <td class="input_txt"><?php if( $ret['gender'][0]=='M') echo 'Male'; else echo 'Female'; ?></td>
                      </tr>
                      <tr>
                          <td class="input_level">Date of Birth:</td>
                          <td class="input_txt"><?php echo $ret['date_of_birth'][0]; ?></td>
                      </tr>
                      <tr>
                          <td class="input_level">Other Details:</td>
                          <td class="input_txt"><?php echo $ret['other_detail'][0]; ?></td>
                      </tr
                      <tr>
                          <td class="input_level">Status:</td>
                          <td class="input_txt"><?php if ($ret['active'][0]==1)echo "Active"; else echo "Inactive"; ?></td>
                      </tr>
                  </table>
                 <?php require_once '../../view/student/studentfooter.php'; ?>