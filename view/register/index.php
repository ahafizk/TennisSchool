<?PHp
require_once('../../common/authentication.php');
$rauth = new Auth();
session_start();

if ($_SESSION['user_type']=='user'&& $_SESSION['auths']==1){
    forward('/sport/view/student/studenthome.php');
}else if ($_SESSION['user_type']=='admin'&&$_SESSION['auths']==1){
    forward('/sport/view/admin/index.php');
}
if(isset($_POST['Submit'])&&!strcasecmp($_POST['Submit'],'Login'))
{
	$password = $_POST['password'];
	$username = $_POST['username'];
	$auth = $rauth->login($username,$password);
	if(!auth)forward('index.php');
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.2.0.17981
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tennis Sports </title>

    <script type="text/javascript" src="../../js/script.js"></script>

    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div id="art-main">
        <div class="art-Sheet">
            <div class="art-Sheet-tl"></div>
            <div class="art-Sheet-tr"></div>
            <div class="art-Sheet-bl"></div>
            <div class="art-Sheet-br"></div>
            <div class="art-Sheet-tc"></div>
            <div class="art-Sheet-bc"></div>
            <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
                <div class="art-Header">
                    <div class="art-Header-png"></div>
                    <div class="art-Header-jpeg"></div>
                    
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="/sport/view/register/index.php" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
<!--                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Categories</span></a>
                			<ul>
                				<li><a href="#">Photos</a>
                					<ul>
                						<li><a href="#">2008</a></li>
                						<li><a href="#">2007</a></li>
                						<li><a href="#">2006</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Gadgets</a></li>
                				<li><a href="#">News</a></li>
                				<li><a href="#">Posts</a></li>
                			</ul>
                		</li>-->
<!--                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Archive</span></a>
                			<ul>
                				<li><a href="#">2008</a>
                					<ul>
                						<li><a href="#">January</a></li>
                						<li><a href="#">February</a></li>
                						<li><a href="#">March</a></li>
                					</ul>
                				</li>
                				<li><a href="#">2007</a>
                					<ul>
                						<li><a href="#">January</a></li>
                						<li><a href="#">February</a></li>
                						<li><a href="#">March</a></li>
                					</ul>
                				</li>
                				<li><a href="#">2006</a>
                					<ul>
                						<li><a href="#">January</a></li>
                						<li><a href="#">February</a></li>
                						<li><a href="#">March</a></li>
                					</ul>
                				</li>
                			</ul>
                					</li>-->
<!--                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>-->
                	</ul>
                </div>
                <div class="art-contentLayout">
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Main Menu</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <ul>
                                         <li class="active"><a href="/sport/view/register/index.php"><span>Home</span></a></li>
                                         <!--<li class="parent"><a href="#"><span>Joomla! Overview</span></a></li>-->
<!--                                         <li><a href="#"><span>Joomla! License</span></a></li>
                                         <li><a href="#"><span>More about Joomla!</span></a></li>-->
                                         <!--<li><a href="#"><span>FAQ</span></a></li>-->
<!--                                         <li><a href="#"><span>The News</span></a></li>
                                         <li><a href="#"><span>Web Links</span></a></li>
                                         <li><a href="#"><span>News Feeds</span></a></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                       
                        <div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Login</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <form action="/sport/view/teachers/index.php" method="post" name="login" id="form-login" > 
                                         <fieldset class="input">
                                          <p id="form-login-username"> 
                                           <label for="modlgn_username">Username</label><br /> 
                                           <input id="modlgn_username" type="text" name="user_name" class="inputbox" alt="username" size="18" /> 
                                          </p> 
                                          <p id="form-login-password"> 
                                           <label for="modlgn_passwd">Password</label><br /> 
                                           <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" alt="password" /> 
                                          </p> 
<!--                                          <p id="form-login-remember"> 
                                           <label for="modlgn_remember">Remember Me</label> 
                                           <input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me" /> 
                                          </p> -->
                                        	<span class="art-button-wrapper">
                                        		<span class="l"> </span>
                                        		<span class="r"> </span>
                                        		<input type="submit" name="Login" class="art-button" value="Login" />
                                        	</span>
                                         </fieldset> 
                                         <ul> 
<!--                                          <li><a href="#">Forgot your password?</a></li>
                                          <li><a href="#">Forgot your username?</a></li>-->
                                          <li><a href="register.php">Create an account</a></li> 
                                         </ul> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            
                        </div>-->
                    </div>
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner art-article">
                        <h2 class="art-PostHeaderIcon-wrapper">
                            
                            
                        </h2>
                        <div class="art-PostMetadataHeader">
                            <div class="art-PostHeaderIcons art-metadata-icons">
                                November 23rd, 2014
                                 | Written by Nusrat
                                 
                            </div>
                        </div>
                        <div class="art-PostContent">
                             
                              <p ><font size="3">
                            	
                                    The Tennis School Academy (TSA) offers an unusual and dynamic program for national and international junior players that combines an engaging, global curriculum with the highest level of competitive tennis training available.
                                    Designed for players in grades 7–12, graduates and post-graduates.
                            		
                            	</font>
                              </p>
                                
                        </div>
                        <div class="cleared"></div>
                        </div>
                     
                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner art-article">


                        </div>
                        <div class="art-PostContent">

                            <p>Are you a student? To view your profile information, you must have login first? </p>
                            <p>Are you a teacher? Want to administrate the system? Please login.</p>
                        </div>
                        <div class="cleared"></div>
                        </div>
                        
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    <div class="art-Footer-inner">
                        <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-Footer-text">
                            <p>Copyright &copy; 2014 ---.<br/>
                            All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
       
    </div>
    
</body>
</html>
