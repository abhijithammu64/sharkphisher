<?php 
if(!isset($_SESSION))
{
 session_start();
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>BTS PenTesting Lab</title>
	<link rel="stylesheet" href="/btslab/style.css" type="text/css" charset="utf-8" />
</head>

<body>
<div id="container" >

     <div id="Menu">
		<ul id="menu-bar" style="margin-left: auto ;  margin-right: auto ;" >
			<li class="current"><a href="/btslab">Home</a></li>
			
			<li><a href="#">Vulnerability</a>
				<ul>
			   	       <li><a href="#">XSS</a>
				             <ul>
					       <li><a href="#">Reflected(GET)</a>
					 	 <ul>
							<li> <a href="/btslab/vulnerability/xss/xss1.php">Challenge 1</a></li>
							<li> <a href="/btslab/vulnerability/xss/xss2.php">Challenge 2</a></li>
							<li> <a href="/btslab/vulnerability/xss/xss3.php">Challenge 3</a></li>
							<li> <a href="/btslab/vulnerability/xss/xss4.php">Challenge 4</a></li>
					       	 </ul>
					       </li>
						<li><a href="/btslab/vulnerability/xss/postxss.php">POST Based</a></li>
						 <li><a href="/btslab/vulnerability/xss/dom.php">DOM based</a></li>
						<li><a href="#">HTTP Referer</a>
							<ul>
							<li><a href="/btslab/vulnerability/xss/xss-referer2.php">Challenge 1</a></li>
							<li><a href="/btslab/vulnerability/xss/xss-referer2.php">Challenge 2</a></li>
							</ul>

						</li>
						<li><a href="/btslab/vulnerability/xss/xss-user-agent.php">User Agent Header</a></li>
					       <li><a href="#">Flash Based</a>
						 <ul>
							<li><a href="/btslab/vulnerability/xss/flash/xss1.swf?vuln=/btslab">Challenge 1</a></li>
						 	<li><a href="/btslab/vulnerability/xss/flash/exss.php">Challenge 2</a></li>
						 </ul>
						<li><a href="/btslab/vulnerability/forum.php">Stored XSS(Persistent)</a></li>
				  	    </ul>
						
					</li>
					<li><a href="#">CSRF</a>
						<ul>
							<li><a href="/btslab/vulnerability/csrf/changeinfo.php">CSRF 1: Change Info</a></li>
							<li><a href="/btslab/vulnerability/csrf/change-email.php">CSRF 2: Change Email</a></li>
						</ul>
					</li>
					<li><a href="#">SQL Injection</a>
						<ul>
						  <li><a href="/btslab/vulnerability/ForumPosts.php?id=1">Sql Injection 1</a></li>
						  <li><a href="/btslab/login.php">Authentication Bypass</a></li>
						  <li><a href="/btslab/vulnerability/sqli/UserInfo.php?id=1">Blind SQLi</a></li>
						</ul>
					</li>
					<li><a href="#">File Inclusion</a>
						<ul>
						<li><a href="/btslab/vulnerability/lfi/LFI.php?file=news.php">Local File Inclusion</a></li>
						<li><a href="/btslab/vulnerability/rfi/RFI.php?file=news.php">Remote File Inclusion</a></li>
						</ul>
					</li>
					<li>
						<a href="/btslab/vulnerability/ssrf/ssrf.php">SSRF</a>
					</li>
					<li>
						<a href="/btslab/vulnerability/clickjacking/cj.php">Clickjacking</a>
					</li>
					<li><a href="#">Code Execution</a>
						<ul>
						<li><a href="/btslab/vulnerability/rce/phpcodeex.php?data=Hello">PHP Code Execution</a>
						</li>
						<li>
						<a href="/btslab/vulnerability/cmd/cmd.php">Command Execution </a>
						</li>
						</ul>
					</li>
					<li>
						<a href="/btslab/myprofile.php?id=<?php if(isset($_SESSION['userid'])){ echo $_SESSION['userid'];} ?>" title="Make sure you have logged in ">Insecure Direct Object References</a>
					</li>
				
					<li><a href="#">More..</a>
						<ul>
							<li><a href="/btslab/vulnerability/open.php?u=forum.php">Open Redirect</a>
							</li>
							<li>
						<a href="/btslab/vulnerability/upload.php">Unrestricted File Upload</a>
					</li>
						<li>
						<a href="/btslab/vulnerability/ssi/ssi.php">Server Side Includes(SSI) Injection</a>
					</li>
						</ul>
					</li>
				
				</ul>
			<li><a href="/btslab/vulnerability/forum.php">Forum</a></li>
				
			<?php if(!isset($_SESSION['isLoggedIn'])) { 
				echo "<li><a href='/btslab/login.php'>LogIn</a></li><li><a href='/btslab/register.php'>Register</a></li>";
				}
				else
				{
					echo "<li><a href='/btslab/logout.php'>LogOut</a></li>";
			    } 
			?>
		</ul>
	</div>

	<div id="Main-Container">
	<br/>
	<div id="logo">

<h1> BTS PenTesting Lab</h1>
</div>
<br/>
	
		
		<div id="Main">
		
