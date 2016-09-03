<?PHp
require_once('../../common/authentication.php');
//$rauth = new Auth();
session_start();
if($_SESSION['auth']!=1 && $_SESSION['user_type']!='user')
{
	forward('/sport/view/register/index.php');
	
}
require_once  '../../view/student/studentmenu.php';
?>

                        <div >
                            <div class="art-PostHeaderIcons art-metadata-icons">
                                <p class="input_level">Welcome to <?php echo $_SESSION['USER']; ?></p>
                                 
                            </div>
                        </div>
                        <div class="art-PostContent">
                             
                            <p class="input_txt"><font size="3">
                            	
                                   Welcome to our tennis school. 
                            	</font>
                              </p>
                                
                        </div>
<?php require_once '../../view/student/studentfooter.php'; ?>