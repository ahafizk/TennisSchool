<?Php
require_once('../../control/cset_schedule.php');

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
    <title>Artisteer </title>

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
                			<a href="#" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
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
                		</li>
                		<li>
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
                					</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
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
                                         <li class="active"><a href="#"><span>Home</span></a></li>
                                         <li class="parent"><a href="#"><span>Joomla! Overview</span></a></li>
                                         <li><a href="#"><span>Joomla! License</span></a></li>
                                         <li><a href="#"><span>More about Joomla!</span></a></li>
                                         <li><a href="#"><span>FAQ</span></a></li>
                                         <li><a href="#"><span>The News</span></a></li>
                                         <li><a href="#"><span>Web Links</span></a></li>
                                         <li><a href="#"><span>News Feeds</span></a></li>
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
                                        <div class="t">Polls</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <form action="index.php" method="post" name="form2"> 
                                         <table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" class="poll"> 
                                          <thead> 
                                           <tr>
                                            <td style="font-weight: bold;">Joomla! is used for?</td> 
                                           </tr> 
                                          </thead> 
                                          <tr> 
                                           <td align="center">
                                            <table class="pollstableborder" cellspacing="0" cellpadding="0" border="0"> 
                                             <tr> 
                                              <td class="sectiontableentry2" valign="top"> 
                                               <input type="radio" name="voteid" id="voteid1" value="1" alt="1" /> 
                                              </td> 
                                              <td class="sectiontableentry2" valign="top"> 
                                               <label for="voteid1">Community Sites</label> 
                                              </td> 
                                             </tr> 
                                             <tr>
                                              <td class="sectiontableentry1" valign="top"> 
                                               <input type="radio" name="voteid" id="voteid2" value="2" alt="2" /> 
                                              </td> 
                                              <td class="sectiontableentry1" valign="top"> 
                                               <label for="voteid2">Public Brand Sites</label> 
                                              </td> 
                                             </tr> 
                                             <tr> 
                                              <td class="sectiontableentry2" valign="top"> 
                                               <input type="radio" name="voteid" id="voteid3" value="3" alt="3" /> 
                                              </td> 
                                              <td class="sectiontableentry2" valign="top"> 
                                               <label for="voteid3">eCommerce</label> 
                                              </td> 
                                             </tr> 
                                             <tr> 
                                              <td class="sectiontableentry1" valign="top"> 
                                               <input type="radio" name="voteid" id="voteid4" value="4" alt="4" /> 
                                              </td> 
                                              <td class="sectiontableentry1" valign="top"> 
                                               <label for="voteid4">Blogs</label> 
                                              </td> 
                                             </tr> 
                                             <tr> 
                                              <td class="sectiontableentry2" valign="top">
                                               <input type="radio" name="voteid" id="voteid5" value="5" alt="5" /> 
                                              </td>
                                              <td class="sectiontableentry2" valign="top"> 
                                               <label for="voteid5">Intranets</label>
                                              </td> 
                                             </tr> 
                                             <tr> 
                                              <td class="sectiontableentry1" valign="top">
                                               <input type="radio" name="voteid" id="voteid6" value="6" alt="6" /> 
                                              </td> 
                                              <td class="sectiontableentry1" valign="top"> 
                                               <label for="voteid6">Photo and Media Sites</label>
                                              </td> 
                                             </tr> 
                                             <tr>
                                              <td class="sectiontableentry2" valign="top"> 
                                               <input type="radio" name="voteid" id="voteid7" value="7" alt="7" /> 
                                              </td> 
                                              <td class="sectiontableentry2" valign="top">
                                               <label for="voteid7">All of the Above!</label> 
                                              </td> 
                                             </tr> 
                                            </table> 
                                           </td> 
                                          </tr> 
                                          <tr> 
                                           <td> 
                                            <div align="center"> 
                                        		<span class="art-button-wrapper">
                                        			<span class="l"> </span>
                                        			<span class="r"> </span>
                                        			<input type="submit" name="task_button" class="art-button" value="Vote" /> 
                                        		 </span>
                                        		&nbsp;
                                        		<span class="art-button-wrapper">
                                        			<span class="l"> </span>
                                        			<span class="r"> </span>
                                        			<input type="button" name="option" class="art-button" value="Results" /> 
                                        		</span>
                                            </div> 
                                           </td> 
                                          </tr> 
                                         </table> 
                                        </form>
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
                                        <div class="t">Key Concepts</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <ul>
                                         <li><a href="#"><span>Extensions</span></a></li>
                                         <li><a href="#"><span>Content Layouts</span></a></li>
                                         <li><a href="#"><span>Example Pages</span></a></li>
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
                                        <div class="t">Who's Online</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        We have&nbsp;1 guest&nbsp;online
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
                                        <div class="t">Login Form</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <form action="#" method="post" name="login" id="form-login" > 
                                         <fieldset class="input">
                                          <p id="form-login-username"> 
                                           <label for="modlgn_username">Username</label><br /> 
                                           <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" size="18" /> 
                                          </p> 
                                          <p id="form-login-password"> 
                                           <label for="modlgn_passwd">Password</label><br /> 
                                           <input id="modlgn_passwd" type="password" name="passwd" class="inputbox" size="18" alt="password" /> 
                                          </p> 
                                          <p id="form-login-remember"> 
                                           <label for="modlgn_remember">Remember Me</label> 
                                           <input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me" /> 
                                          </p> 
                                        	<span class="art-button-wrapper">
                                        		<span class="l"> </span>
                                        		<span class="r"> </span>
                                        		<input type="submit" name="Submit" class="art-button" value="Login" />
                                        	</span>
                                         </fieldset> 
                                         <ul> 
                                          <li><a href="#">Forgot your password?</a></li>
                                          <li><a href="#">Forgot your username?</a></li>
                                          <li><a href="#">Create an account</a></li> 
                                         </ul> 
                                        </form>
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
                                        <div class="t">Advertisement</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-body">
                                        <div class="bannergroup_text"> 
                                         <div class="bannerheader">Featured Links:</div> 
                                         <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=3" target="_blank">Joomla!</a><br/>
                                         Joomla! The most popular and widely used Open Source CMS Project in the world.<div class="clr"></div></div> 
                                         <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=4" target="_blank">JoomlaCode</a><br/> 
                                         JoomlaCode, development and distribution made easy.<div class="clr"></div></div> 
                                         <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=5" target="_blank">Joomla! Extensions</a><br/>
                                         Joomla! Components, Modules, Plugins and Languages by the bucket load.<div class="clr"></div></div>
                                         <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=6" target="_blank">Joomla! Shop</a><br/> 
                                         For all your Joomla! merchandise.<div class="clr"></div></div> 
                                         <div class="bannerfooter_text"><a href="http://www.joomla.org">Ads by Joomla!</a></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                          <h2 class="art-PostHeaderIcon-wrapper">&nbsp;</h2>
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
                          user name: <?php echo $user['user_name'][0];?>
                          <br/>
                          available time: <?php echo $user['start_time'][0]." to ".$user['end_time'][0];?>
                          <br/>
                          address: <?php echo "street:".$address['street'][0]." house number: ".$address['house_number'][0]." home palate: ".$address['home_plate'][0]." post code: ".$address['post_code'][0];?>
                          <br/>
                          email: <?php echo " ".$address['email'][0];?>
                          <br/>
                          telephone:<?php echo " ".$address['telefoon_vast'][0];?>
                          <br/>
                          mobile:<?php echo " ".$address['telefoon_mobiel'][0];?>
                         
                          <br/>
                          <br/>
                          <label>select a group</label>
                          <select name="group_id">
                          <?php 
						  	$cnt = count($group['id']);
							for($i=0;$i<$cnt;$i++)
							{
								echo "<option value=\"".$group['id'][$i]."\">".$group['name'][$i]."</option>";	
							}
						  ?>
                          
                          </select>
                          <br/>
                          <br/>
                          <?php
						  for($i=0;$i<$cnt;$i++)
						  {
						  	echo "name : ".$group['name'][$i]."  start:".$group['start_date'][$i]."  &nbsp; end: ".$group['end_date'][$i]."<br/>";
						  }
						  
						  ?>
                          <br/>
                          <br/>
                          <form name="assign_group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                          <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
                            <table border="1">
                              <tr>
                                <td>year</td>
                                <td>week</td>
                                <td>start date</td>
                                <td>end date</td>
                                <td>les/vrijspelen</td>
                              </tr>
                              <tr>
                                <td><input type="text"size="10" name="year1"/></td>
                                <td><input type="text" size="5" name="week1"/></td>
                                <td><input type="text" name="start_date1"/></td>
                                <td><input type="text" name="end_date1"/></td>
                                <td><select name="les1"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                              <tr>
                                <td><input type="text"size="10" name="year2"/></td>
                                <td><input type="text" size="5" name="week2"/></td>
                                <td><input type="text" name="start_date2"/></td>
                                <td><input type="text" name="end_date2"/></td>
                                <td><select name="les2"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                              <tr>
                                <td><input type="text"size="10" name="year3"/></td>
                                <td><input type="text" size="5" name="wee3"/></td>
                                <td><input type="text" name="start_date3"/></td>
                                <td><input type="text" name="end_date3"/></td>
                                <td><select name="les3"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                               <tr>
                                <td><input type="text"size="10" name="year4"/></td>
                                <td><input type="text" size="5" name="week4"/></td>
                                <td><input type="text" name="start_date4"/></td>
                                <td><input type="text" name="end_date4"/></td>
                                <td><select name="les4"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                               <tr>
                                <td><input type="text"size="10" name="year5"/></td>
                                <td><input type="text" size="5" name="week5"/></td>
                                <td><input type="text" name="start_date5"/></td>
                                <td><input type="text" name="end_date5"/></td>
                                <td><select name="les5"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                               <tr>
                                <td><input type="text"size="10" name="year6"/></td>
                                <td><input type="text" size="5" name="week6"/></td>
                                <td><input type="text" name="start_date6"/></td>
                                <td><input type="text" name="end_date6"/></td>
                                <td><select name="les6"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>
                               <tr>
                                <td><input type="text"size="10" name="year7"/></td>
                                <td><input type="text" size="5" name="week7"/></td>
                                <td><input type="text" name="start_date7"/></td>
                                <td><input type="text" name="end_date7"/></td>
                                <td><select name="les7"><option>les</option><option>vrijspelen</option></select></td>
                              </tr>   
                              
                            </table>
                            <p>&nbsp;</p>
                            <table border="1">
                              <tr>
                                <td align="center">Ma</td>
                                <td align="center">Di</td>
                                <td align="center">Wo</td>
                                <td align="center">Do</td>
                                <td align="center">Vr</td>
                                <td align="center">Za</td>
                                <td align="center">Zo</td>
                                <td align="center">Van</td>
                                <td align="center">Tot</td>
                                <td align="center">locatie</td>
                                <td align="center">naam</td>
                                <td align="center">afkorting</td>
                                
                              </tr>
                              <tr>
                                <td><input type="checkbox" name="day11" id="checkbox" /></td>
                                <td><input type="checkbox" name="day12" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day13" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day14" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day15" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day16" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day17" id="checkbox7" /></td>
                                <td><input name="start1" size="10"/></td>
                                <td><input name="end1" size="10"/></td>
                                <td><input name="location1" size="15" /></td>
                                <td><input name="name1" /></td>
                                <td><input name="abbriviation1" size="5"/></td>
                                
                              </tr>
                              <tr>
                               <td><input type="checkbox" name="day21" id="checkbox" /></td>
                                <td><input type="checkbox" name="day22" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day23" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day24" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day25" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day26" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day27" id="checkbox7" /></td>
                                <td><input name="start2" size="10"/></td>
                                <td><input name="end2" size="10"/></td>
                                <td><input name="location2" size="15" /></td>
                                <td><input name="name2" /></td>
                                <td><input name="abbriviation2" size="5"/></td>
                                
                              </tr>
                              <tr>
                                <td><input type="checkbox" name="day31" id="checkbox" /></td>
                                <td><input type="checkbox" name="day32" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day33" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day34" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day35" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day36" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day37" id="checkbox7" /></td>
                                <td><input name="start3" size="10"/></td>
                                <td><input name="end3" size="10"/></td>
                                <td><input name="location3" size="15" /></td>
                                <td><input name="name3" /></td>
                                <td><input name="abbriviation3" size="5"/></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox" name="day41" id="checkbox" /></td>
                                <td><input type="checkbox" name="day42" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day43" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day44" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day45" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day46" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day47" id="checkbox7" /></td>
                                <td><input name="start4" size="10"/></td>
                                <td><input name="end4" size="10"/></td>
                                <td><input name="location4" size="15" /></td>
                                <td><input name="name4" /></td>
                                <td><input name="abbriviation4" size="5"/></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox" name="day51" id="checkbox" /></td>
                                <td><input type="checkbox" name="day52" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day53" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day54" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day55" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day56" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day57" id="checkbox7" /></td>
                                <td><input name="start5" size="10"/></td>
                                <td><input name="end5" size="10"/></td>
                                <td><input name="location5" size="15" /></td>
                                <td><input name="name5" /></td>
                                <td><input name="abbriviation5" size="5"/></td>
                              </tr>
                              <tr>
                               <td><input type="checkbox" name="day61" id="checkbox" /></td>
                                <td><input type="checkbox" name="day62" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day63" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day64" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day65" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day66" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day67" id="checkbox7" /></td>
                                <td><input name="start6" size="10"/></td>
                                <td><input name="end6" size="10"/></td>
                                <td><input name="location6" size="15" /></td>
                                <td><input name="name6" /></td>
                                <td><input name="abbriviation6" size="5"/></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox" name="day71" id="checkbox" /></td>
                                <td><input type="checkbox" name="day72" id="checkbox2" /></td>
                                <td><input type="checkbox" name="day73" id="checkbox3" /></td>
                                <td><input type="checkbox" name="day74" id="checkbox4" /></td>
                                <td><input type="checkbox" name="day75" id="checkbox5" /></td>
                                <td><input type="checkbox" name="day76" id="checkbox6" /></td>
                                <td><input type="checkbox" name="day77" id="checkbox7" /></td>
                                <td><input name="start7" size="10"/></td>
                                <td><input name="end7" size="10"/></td>
                                <td><input name="location7" size="15" /></td>
                                <td><input name="name7" /></td>
                                <td><input name="abbriviation7" size="5"/></td>
                               
                              </tr>
                            </table>
                            <p>&nbsp;</p>
                            <div align="center"><input type="submit" name="schedule" value="redden"/></div>
                            
                          </form>
                        </div>
                        
                        
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="cleared"></div><div class="art-Footer">
                    <div class="art-Footer-inner">
                        <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-Footer-text">
                            <p>Copyright &copy; 2009 ---.<br/>
                            All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer">Designed by <a href="http://www.pronl.nl">Mike de Bruijn</a>.</p>
    </div>
    
</body>
</html>
