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
                       <div align="center">Contact Information</div>
                    </div>
        		
                 
                  <br/>
                    
                  
                   <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >Contact Info</div>
                  
                  </div>
                   <table>
                      <tr>
                          <td class="input_level">Street:</td>
                          <td class="input_txt"><?php echo $ret['street'][0];?></td>
                          
                      </tr>
                       <tr>
                          <td class="input_level">House Number:</td>
                          <td class="input_txt"><?php echo $ret['house_number'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Post Code:</td>
                          <td class="input_txt"><?php echo $ret['post_code'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Telephone:</td>
                          <td class="input_txt"><?php echo $ret['telefoon_vast'][0];?></td>
                      </tr>
                       <tr>
                          <td class="input_level">Mobile:</td>
                          <td class="input_txt"><?php echo $ret['telefoon_mobiel'][0]; ?></td>
                      </tr>
                      <tr>
                          <td class="input_level">Email:</td>
                          <td class="input_txt"><?php echo $ret['email'][0]; ?></td>
                      </tr>
                      <tr>
                          <td class="input_level">Fax:</td>
                          <td class="input_txt"><?php echo $ret['fax'][0]; ?></td>
                      </tr>
                      
                  </table>
                  
                   
                   <?php require_once '../../view/student/studentfooter.php'; ?>