<?php include('Site/init.php'); error_reporting(0); ?>
<script type="text/javascript">

// REMEMBER: To change the path, where snow.png is saved...
snow_img = "http://rhodum.xyz/img/snowflake.png";

// EXTRA: You can adjust the numbers of snowflakes you want on each page...
snow_no = 15;

if (typeof(window.pageYOffset) == "number")
{
	snow_browser_width = window.innerWidth;
	snow_browser_height = window.innerHeight;
} 
else if (document.body && (document.body.scrollLeft || document.body.scrollTop))
{
	snow_browser_width = document.body.offsetWidth;
	snow_browser_height = document.body.offsetHeight;
}
else if (document.documentElement && (document.documentElement.scrollLeft || document.documentElement.scrollTop))
{
	snow_browser_width = document.documentElement.offsetWidth;
	snow_browser_height = document.documentElement.offsetHeight;
}
else
{
	snow_browser_width = 500;
	snow_browser_height = 500;	
}

snow_dx = [];
snow_xp = [];
snow_yp = [];
snow_am = [];
snow_stx = [];
snow_sty = [];

for (i = 0; i < snow_no; i++) 
{ 
	snow_dx[i] = 0; 
	snow_xp[i] = Math.random()*(snow_browser_width-50);
	snow_yp[i] = Math.random()*snow_browser_height;
	snow_am[i] = Math.random()*20; 
	snow_stx[i] = 0.02 + Math.random()/10;
	snow_sty[i] = 0.7 + Math.random();
	if (i > 0) document.write("<\div id=\"snow_flake"+ i +"\" style=\"position:absolute;z-index:"+i+"\"><\img src=\""+snow_img+"\" border=\"0\"><\/div>"); else document.write("<\div id=\"snow_flake0\" style=\"position:absolute;z-index:0\"><a href=\"http://rhodum.xyz\" target=\"_blank\"><\img src=\""+snow_img+"\" border=\"0\"></a><\/div>");
}

function SnowStart() 
{ 
	for (i = 0; i < snow_no; i++) 
	{ 
		snow_yp[i] += snow_sty[i];
		if (snow_yp[i] > snow_browser_height-50) 
		{
			snow_xp[i] = Math.random()*(snow_browser_width-snow_am[i]-30);
			snow_yp[i] = 0;
			snow_stx[i] = 0.02 + Math.random()/10;
			snow_sty[i] = 0.7 + Math.random();
		}
		snow_dx[i] += snow_stx[i];
		document.getElementById("snow_flake"+i).style.top=snow_yp[i]+"px";
		document.getElementById("snow_flake"+i).style.left=snow_xp[i] + snow_am[i]*Math.sin(snow_dx[i])+"px";
	}
	snow_time = setTimeout("SnowStart()", 10);
}
SnowStart();
</script>
<link rel="shortcut icon" href="http://rhodum.xyz/img/favicon.ico" />
<link rel="stylesheet" href="/Style/default.css">
<link rel="stylesheet" href="/Style/style.css">
<link rel="stylesheet" href="http://rhodum.xyz/Style/head.css" />
<link rel="stylesheet" href="http://rhodum.xyz/Style/headlol.css" />
<link rel="stylesheet" href="http://rhodum.xyz/Style/Catalog.css" />
<head>
<title>Rhodum</title>
<link rel="shortcut icon" type="image/png" href="/NewLogo.png">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" async="" src="/Style/javascript.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div id="Banner" class="BannerRedesign">
<div id="NavigationRedesignBannerContainer" class="BannerCenterContainer">
<a href="/" id="navbar-logo" class="btn-logo" data-se="nav-logo"></a>
<div id="NavRedesign" class="NavigationRedesign">
<ul id="ctl00_cphBanner_ctl00_MenuUL">
</ul>
<? if ($myu->admin == "true"){ ?>
<li><a href="/Admin" ref="nav-myroblox" data-se="nav-myhome">Admin Panel</a></li>
<? } ?>
<?php
if (!$user) {
?>
<li><a href="/Login" ref="nav-myroblox" data-se="nav-myhome">Login</a></li>
<li><a href="/Register" ref="nav-myroblox" data-se="nav-myhome">Register</a></li>
<? } else { ?>
<li><a href="http://rhodum.xyz/" ref="nav-myroblox" data-se="nav-myhome">Home</a></li>
<li><a href="/Games" ref="nav-myroblox" data-se="nav-myhome">Games</a></li>
<li><a href="/Forum" ref="nav-myroblox" data-se="nav-myhome">Forum</a></li>
<li><a href="/Market" ref="nav-myroblox" data-se="nav-myhome">Catalog</a></li>
<li><a href="/Customize" ref="nav-myroblox" data-se="nav-myhome">Avatar</a></li>
</ul>
</div>
<div id="SiteWideHeaderLogin">
<div id="AlertSpace">
<div class="AlertItem" style="max-width: 50px;text-align:center;" id="logoutonclick">
<a id="lsLoginStatus" data-se="nav-logout" class="logoutButton" href="/user/logout.php">
Logout
</a>
</div>
<div class="HeaderDivider">
</div>
</a>
<a data-se="nav-robux" href="/My/Money.aspx?tab=MyTransactions">
<div id="RobuxWrapper" class="RobuxAlert AlertItem tooltip-bottom" original-title="RHODUX">
<div class="icons robux_icon">
</div>
<div id="RobuxAlertCaption" class="AlertCaption">
<?php echo "$myu->emeralds"; ?></div>
</div>
</a>
<div class="HeaderDivider">
</div>
<a data-se="nav-friends" href="/Personal/Friends">
<span id="FriendsTextWrapper" class="FriendsAlert AlertItem tooltip-bottom" original-title="Friend Requests">
<div id="FriendsBubble" class="AlertTextWrapper" runat="server">
<div class="AlertBox Left" style="display: none;">
</div>
<div class="AlertBox" style="background-position:right; padding-right:3px; display: none;">
<div id="czxvijhoidshfiosdhfsdo" class="AlertText">
FriendRequestsAmount
</div>
</div>
</div>
<div class="icons friends_icon" style="float:none;">
</div>
</span>
</a>
<a data-se="nav-messages" href="/Personal/Messages">
<span id="MessagesTextWrapper" class="MessageAlert AlertItem tooltip-bottom" original-title="Messages">
<div class="icons message_icon" style="float:none;">
</div>
<div id="MessageBubble" class="AlertTextWrapper" runat="server" style="display: none;">
<div class="AlertBox Left">
</div>
<div class="AlertBox Right" style="background-position: right; padding-right:3px;">
<div class="AlertText">
MessageAmount
</div>
</div>
</div>
</span>
</a>
<div id="AuthenticatedUserNameWrapper">
<div id="AuthenticatedUserName">
<span class="login-span notranslate" id="gzxcgdsgfdhdfjhgjhgjkhg">
<img id="over13icon" src="https://images.rbxcdn.com/8ed6b064a35786706f738c0858345c11.png" alt="13+" style="vertical-align:middle;padding-right:5px;padding-left:0px;" original-title="This is a 13+ account.">
<a class="text-nav text-overflow font-header-2" href=/Profile/?username=<?php echo "$user"; ?>><?php echo "$user"; ?></a>
</span>
</div>
</div>
</f>
</div>
</div>
</div>
<?php } ?>

<?php
if (!$user) {
?>
<li><a href="/user/logout.php"><?php echo "$user"; ?></a></li>
<? } ?>

			</ul>
		</div>
<?php
if ($user) {
?>
</div>
<? } ?>
<div style="padding-top:85px;"></div>
<div id="ctl00_SystemAlertDiv" class="SystemAlert" style="background-color:steelblue">
<div id="ctl00_SystemAlertTextColor" class="SystemAlertText">
<div id="ctl00_LabelAnnouncement">Merry Christmas everyone!</div>
</div>
</div>
<script data-ad-client="ca-pub-3105696169953509" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>