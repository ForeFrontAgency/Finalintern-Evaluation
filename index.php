-<!doctype html>
	
<head>
		<title>BlindDate </title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<meta name="description" content="Blinddate">

		<meta name="keywords" content="videocalls,friends,twitter,chat,meet,people,friends,facebook,instagram">

		<meta name="author" content="Blinddate">		

		<noscript>		

		<link rel="stylesheet" href="bdating/css/skel.css" />

		<link rel="stylesheet" href="bdating/css/style.css" />

		</noscript>
		<link rel="stylesheet" href="bdating/css/jquery.smartbanner.css" type="text/css" media="screen">
		<script src="bdating/js/jquery.min.js"></script>

		<script src="bdating/js/jquery.dropotron.min.js"></script>

		<script src="bdating/js/jquery.scrollgress.min.js"></script>

		<script src="bdating/js/skel.min.js"></script>

		<link rel="stylesheet" type="text/css" href="bdating/assets/css/sweetalert.css">		

		<script src="bdating/js/skel-layers.min.js"></script>


		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places&amp;key=AIzaSyAOooWSdjbbXT7-3MkMx2dDlfk-m0T-4Y0"></script>	
		
		<style>

		/* Preloader */

		#preloader {

			position: fixed;

			top:0;

			left:0;

			right:0;

			bottom:0;

			background:#fff;

		  height:100%;

		  width:100%;

			z-index:999999; /* makes sure it stays on top */

		}



		#status {

			width:200px;

			height:200px;

			position:absolute;

			left:50%; /* centers the loading animation horizontally one the screen */

			top:50%; /* centers the loading animation vertically one the screen */

			margin:-100px 0 0 -100px; /* is width and height divided by two */

		}

		</style>

		<script>

		var url;

		var mobile = false;		
		
        var site_lang = [{"id":"0","text":"meet new people!"},{"id":"1","text":"Login"},{"id":"2","text":"Welcome to the fastest growing place to meet new people"},{"id":"3","text":"For now our site works only for Desktop users"},{"id":"4","text":"Please visit us from your laptop or PC"},{"id":"5","text":"Soon we will have our phone apps online"},{"id":"6","text":"SOON AVAILABLE"},{"id":"7","text":"Connect with "},{"id":"8","text":"Create your account"},{"id":"9","text":"Welcome back"},{"id":"10","text":"Your email"},{"id":"11","text":"Your password"},{"id":"12","text":"do you forget your password?"},{"id":"13","text":"Login now"},{"id":"14","text":"Password recover"},{"id":"15","text":"Recover password"},{"id":"16","text":"Chat"},{"id":"17","text":"Powerfull private chat for meet new friends, you can send emoticons and private photos to anyone."},{"id":"18","text":"Video Chat"},{"id":"19","text":"You can make quality videocalls for free to anyone, without limits of call duration, just enjoy seeing the person who is chatting with you"},{"id":"20","text":"People nearby"},{"id":"21","text":"We wont show your exact location, but you will be able to find people nearby who like the same things you do."},{"id":"22","text":"Matches"},{"id":"23","text":"Play our popular Discover game and get matched with other users. Its a great way to break the ice and chat to new people."},{"id":"24","text":"Become a member now"},{"id":"25","text":"Join the worlds bestest community for meeting new people!."},{"id":"26","text":"Name"},{"id":"27","text":"Your name or nickname"},{"id":"28","text":"Email"},{"id":"29","text":"Password"},{"id":"30","text":"Birthday"},{"id":"31","text":"Please select"},{"id":"32","text":"City"},{"id":"33","text":"Where do you live?"},{"id":"34","text":"Gender"},{"id":"35","text":"Male"},{"id":"36","text":"Female"},{"id":"37","text":"Im here to"},{"id":"38","text":"Meet girls"},{"id":"39","text":"Meet boys"},{"id":"40","text":"Meet boys and girls"},{"id":"41","text":"Sign up"},{"id":"42","text":"By continuing, you are confirming that you have read and agree to our"},{"id":"43","text":"Terms and Conditions"},{"id":"44","text":"and"},{"id":"45","text":"Privacy Policy"},{"id":"46","text":"Profile"},{"id":"47","text":"Settings"},{"id":"48","text":"Logout"},{"id":"49","text":"Meet new people"},{"id":"50","text":"Discover"},{"id":"51","text":"Matches"},{"id":"52","text":"Most populars"},{"id":"53","text":"Fans"},{"id":"54","text":"Manage photos"},{"id":"55","text":"Settings"},{"id":"56","text":"All"},{"id":"57","text":"Fans"},{"id":"58","text":"Conversations"},{"id":"59","text":"Online now"},{"id":"60","text":"New messages"},{"id":"61","text":"Who to like"},{"id":"62","text":"Terms"},{"id":"63","text":"Privacy"},{"id":"64","text":"Contact"},{"id":"65","text":"Manage your photos"},{"id":"66","text":"All Photos"},{"id":"67","text":"Public Photos"},{"id":"68","text":"Private Photos"},{"id":"69","text":"Add your photos"},{"id":"70","text":"add photos"},{"id":"71","text":"Add yourself to the Spotlight"},{"id":"72","text":"Pick the photo you want to show in the Spotlight, cost "},{"id":"73","text":"Credits"},{"id":"74","text":"Add photo"},{"id":"75","text":"Send gift to "},{"id":"76","text":"Pick the gift you want to send to "},{"id":"77","text":"Send gift"},{"id":"78","text":"Buy credits \/ Upgrade account"},{"id":"79","text":"Select credits package"},{"id":"80","text":"Select payment method"},{"id":"81","text":"Pay with"},{"id":"82","text":"Pay with"},{"id":"83","text":"Buy credits"},{"id":"84","text":"Premium Account Features"},{"id":"85","text":"new chats per day"},{"id":"86","text":"Unlimited videocalls"},{"id":"87","text":"Unblock all private photos"},{"id":"88","text":"Premium user badge"},{"id":"89","text":"Write text here"},{"id":"90","text":"Send"},{"id":"91","text":"Chat"},{"id":"92","text":"you have reached the limit of new daily conversations"},{"id":"93","text":"To continue chatting"},{"id":"94","text":"Buy"},{"id":"95","text":"more daily conversation"},{"id":"96","text":"or"},{"id":"97","text":"Upgrade your account to Premium"},{"id":"98","text":"and get up to"},{"id":"99","text":"daily conversations"},{"id":"100","text":"or wait until tomorrow for continue meeting people"},{"id":"101","text":"Your fans"},{"id":"102","text":"Privacy Policy"},{"id":"103","text":"Terms of Use"},{"id":"104","text":"Please complete your profile before start in "},{"id":"105","text":"Your matches"},{"id":"106","text":"Filter Search"},{"id":"107","text":"All users"},{"id":"108","text":"Online now"},{"id":"109","text":"Show me"},{"id":"110","text":"Girls"},{"id":"111","text":"Boys"},{"id":"112","text":"Both"},{"id":"113","text":"who are between"},{"id":"114","text":"in a radius of"},{"id":"115","text":"World"},{"id":"116","text":"Most popular users"},{"id":"117","text":"About "},{"id":"118","text":"Personal info"},{"id":"119","text":"years old"},{"id":"120","text":"Only boys"},{"id":"121","text":"Only girls"},{"id":"122","text":"boys and girls"},{"id":"123","text":"Credits successfully added to your account"},{"id":"124","text":"Now you have"},{"id":"125","text":"Ask permission to"},{"id":"126","text":"Unblock private photos"},{"id":"127","text":"Personal"},{"id":"128","text":"Credits"},{"id":"129","text":"Verify"},{"id":"130","text":"Change password"},{"id":"131","text":"Delete"},{"id":"132","text":"Personal information"},{"id":"133","text":"You can edit your profile information bellow"},{"id":"134","text":"Site language"},{"id":"135","text":"Update profile"},{"id":"136","text":"Verify account"},{"id":"137","text":"For verify your account , connect with your facebook account"},{"id":"138","text":"Connect with Facebook"},{"id":"139","text":"You are account is already verified"},{"id":"140","text":"Buy credits for send Gifs and Unblock private photos"},{"id":"141","text":"Account type"},{"id":"142","text":"Current credits"},{"id":"143","text":"Add credits"},{"id":"144","text":"Upgrade to premium account"},{"id":"145","text":"Change password"},{"id":"146","text":"You can change your current password bellow"},{"id":"147","text":"New password"},{"id":"148","text":"Profile desactivation"},{"id":"149","text":"After delete your profile, some of your data will be lost without recovery."},{"id":"150","text":"Delete profile"},{"id":"151","text":"Online now"},{"id":"152","text":"Verified"},{"id":"153","text":"Nothing found"},{"id":"154","text":"people found"},{"id":"155","text":"No popular users near you"},{"id":"156","text":"You dont have any fans yet"},{"id":"157","text":"You dont have matches yet"},{"id":"158","text":"January"},{"id":"159","text":"February"},{"id":"160","text":"March"},{"id":"161","text":"April"},{"id":"162","text":"May"},{"id":"163","text":"June"},{"id":"164","text":"July"},{"id":"165","text":"August"},{"id":"166","text":"September"},{"id":"167","text":"October"},{"id":"168","text":"November"},{"id":"169","text":"December"},{"id":"170","text":"Buy"},{"id":"171","text":"Days Premium"},{"id":"172","text":"persons more like this"},{"id":"173","text":"like this"},{"id":"174","text":"Hello, can i have access to your private photos ?"},{"id":"175","text":"Yes"},{"id":"176","text":"No"},{"id":"177","text":"Hi"},{"id":"178","text":"If you dont remember your password, click the link below to set a new one:"},{"id":"179","text":"Login to my account"},{"id":"180","text":"Password recover"},{"id":"181","text":"Invalid email format"},{"id":"182","text":"Please fill all the inputs"},{"id":"183","text":"Email dont exist"},{"id":"184","text":"Wrong password"},{"id":"185","text":"Add a valid date"},{"id":"186","text":"Choose city from the autocomplete"},{"id":"187","text":"Password too short"},{"id":"188","text":"Email already exist, try another"},{"id":"189","text":"Yes, you can see my private photos"},{"id":"190","text":"No, i cant show you my private photos"},{"id":"191","text":"Buy private photos permission"},{"id":"192","text":"Get access to"},{"id":"193","text":"private photos for "},{"id":"194","text":"Get access"},{"id":"195","text":"No thanks"},{"id":"196","text":"Please, select a payment method"},{"id":"197","text":"Please, select 1 photo"},{"id":"198","text":"Please, select 1 gift"},{"id":"199","text":"You dont have enought credits for send the gift"},{"id":"200","text":"Expand daily limitation "},{"id":"201","text":"more daily conversation, cost "},{"id":"202","text":"Yes, buy it!"},{"id":"203","text":"Information updated successfully"},{"id":"204","text":"Account termination"},{"id":"205","text":"Your data will be lost without recovery, continue?"},{"id":"206","text":"Yes, delete it!"},{"id":"207","text":"is in another videocall , you cant call now"},{"id":"208","text":"is offline, try again when your friend is online"},{"id":"209","text":"Please allow access to your Webcam."},{"id":"210","text":"You are already in a videocall, you have to end the other call before start another"},{"id":"211","text":"Only premium users can make videocalls"},{"id":"212","text":"Impossible to make a call!"},{"id":"213","text":"You cant make videocall because you dont have webcam"},{"id":"214","text":"Too long wait"},{"id":"215","text":"Seems that your friend do not have webcam or he is not available"},{"id":"216","text":"End call"},{"id":"217","text":"Wait more"},{"id":"218","text":"until"},{"id":"219","text":"Basic"},{"id":"220","text":"UPGRADE"},{"id":"221","text":"Notifications"},{"id":"222","text":"Extended info (optional)"},{"id":"223","text":"Relationship"},{"id":"224","text":"Single"},{"id":"225","text":"Taken"},{"id":"226","text":"Open"},{"id":"227","text":"Sexuality"},{"id":"228","text":"Gay"},{"id":"229","text":"Open-minded"},{"id":"230","text":"Straight"},{"id":"231","text":"Bisexual"},{"id":"232","text":"Height"},{"id":"233","text":"less than"},{"id":"234","text":"more than"},{"id":"235","text":"Weight"},{"id":"236","text":"Ethnicity"},{"id":"237","text":"Asian"},{"id":"238","text":"Middle Eastern"},{"id":"239","text":"Black"},{"id":"240","text":"White"},{"id":"241","text":"Native American"},{"id":"242","text":"Hispanic\/latin"},{"id":"243","text":"Pacific Islander"},{"id":"244","text":"Indian"},{"id":"245","text":"Other"},{"id":"246","text":"Body type"},{"id":"247","text":"Slim"},{"id":"248","text":"Average"},{"id":"249","text":"Athletic"},{"id":"250","text":"Heavy set"},{"id":"251","text":"Curvy"},{"id":"252","text":"Living"},{"id":"253","text":"With parents"},{"id":"254","text":"With housemate"},{"id":"255","text":"Student dormitory"},{"id":"256","text":"With partner"},{"id":"257","text":"Alone"},{"id":"258","text":"Smoke"},{"id":"259","text":"Yes"},{"id":"260","text":"No"},{"id":"261","text":"Sometimes"},{"id":"262","text":"Drink"},{"id":"263","text":"Transport"},{"id":"264","text":"Parents car"},{"id":"265","text":"I own a car"},{"id":"266","text":"I own a motorbike"},{"id":"267","text":"None"},{"id":"268","text":"When someone likes me"},{"id":"269","text":"When i get a match"},{"id":"270","text":"When new users near me join in"},{"id":"271","text":"When someone send me a message"},{"id":"272","text":"Day"},{"id":"273","text":"Month"},{"id":"274","text":"Year"},{"id":"275","text":"Please wait"},{"id":"276","text":"Interests"},{"id":"277","text":"Report"},{"id":"278","text":"Fans"},{"id":"279","text":"No data"},{"id":"280","text":"Public Photos"},{"id":"281","text":"Private photos"},{"id":"282","text":"Add from "},{"id":"283","text":"Add"},{"id":"284","text":"Photos"},{"id":"285","text":"Credits"},{"id":"286","text":"Visits"},{"id":"287","text":"Add me here"},{"id":"288","text":"get seen by millions"},{"id":"289","text":"Set as profile"},{"id":"290","text":"Private photo"},{"id":"291","text":"Public photo"},{"id":"292","text":"Delete"},{"id":"293","text":"people visited your profile for see them"},{"id":"294","text":"Upgrade your account to premium"},{"id":"295","text":"People i like"},{"id":"296","text":"people liked you, for see them"},{"id":"297","text":"Messages"},{"id":"298","text":"Like"},{"id":"299","text":"Dislike"},{"id":"300","text":"AGE"},{"id":"301","text":"You dont have any visit yet"},{"id":"302","text":"visited"},{"id":"303","text":"You do not like anyone"},{"id":"304","text":"Cost"},{"id":"305","text":"Credits for $"},{"id":"306","text":"0 seconds"},{"id":"307","text":"year"},{"id":"308","text":"month"},{"id":"309","text":"day"},{"id":"310","text":"hour"},{"id":"311","text":"minute"},{"id":"312","text":"second"},{"id":"313","text":"years"},{"id":"314","text":"months"},{"id":"315","text":"days"},{"id":"316","text":"hours"},{"id":"317","text":"minutes"},{"id":"318","text":"seconds"},{"id":"319","text":"ago"},{"id":"320","text":"Please verify your account, check your email"},{"id":"321","text":"Please add a profile photo"},{"id":"322","text":"Hi, im"},{"id":"323","text":"years old and im from"},{"id":"324","text":"We sended you a email for verify your account"},{"id":"325","text":"is blocking you or you blocked him, you cant chat with him sorry"},{"id":"326","text":"Report and block"},{"id":"327","text":"Are you sure you want to report"},{"id":"328","text":"Press backspace key for smart return to the meeting section."},{"id":"329","text":"Write your instagram username"},{"id":"330","text":"You need to write your username!"},{"id":"331","text":"username"},{"id":"332","text":"days of Premium"},{"id":"333","text":"Wrong"},{"id":"334","text":"Spotlight"},{"id":"335","text":"Service cost"},{"id":"336","text":"Password successfully changed"},{"id":"337","text":"is calling you.."},{"id":"338","text":"Photos of "},{"id":"339","text":"of"},{"id":"340","text":"Loading..."},{"id":"341","text":"We sent you a email with your info, it may take up to 1 min to arrive"},{"id":"342","text":"likes you and wants to chat in"},{"id":"343","text":"has seen you in discover and likes. The feeling is mutual?"},{"id":"344","text":"Find out if you also like"},{"id":"345","text":"You received this notice because you registered as"},{"id":"346","text":"Unsubscribe"},{"id":"347","text":"Choose a new password"},{"id":"348","text":"if you forgot your password, click on the link below to get a new"},{"id":"349","text":"You have a match at"},{"id":"350","text":"Its a match!"},{"id":"351","text":"thinks the feeling is mutual"},{"id":"352","text":"Go and say something to"},{"id":"353","text":"New message from"},{"id":"354","text":"you have a new message from"},{"id":"355","text":"Respond to"},{"id":"356","text":"Have fun!"},{"id":"357","text":"is new and lives closer to you"},{"id":"358","text":"is new at"},{"id":"359","text":"and lives closer to you"},{"id":"360","text":"Check out the profile"},{"id":"361","text":"Welcome"},{"id":"362","text":"Well done, now you are in"},{"id":"363","text":"Here are a few tips"},{"id":"364","text":"Now you are a new member of"},{"id":"365","text":"Verify your account"},{"id":"366","text":"Newsflash"},{"id":"367","text":"people in your area wants to know you"},{"id":"368","text":"In"},{"id":"369","text":"you can meet people instantly"},{"id":"370","text":"Meet new people"},{"id":"371","text":"Nobody is going to fall in love with a blank page. The more information you get, the more chances to find that special someone!"},{"id":"372","text":"Add photos and complete your profile"},{"id":"373","text":"More than 1 million people have joined $site_name You probably want to know some of them."},{"id":"374","text":"Start meeting new people now"},{"id":"375","text":"Here are your connection details"},{"id":"376","text":"E-mail"},{"id":"377","text":"Password"},{"id":"378","text":"Please save your connection information in a safe place"},{"id":"379","text":"Go to"},{"id":"380","text":"Welcome to"},{"id":"381","text":"calling..."},{"id":"382","text":"dont like you"},{"id":"383","text":"must like you for start a videocall"},{"id":"384","text":"Ok, i understand"},{"id":"385","text":"Update"},{"id":"386","text":"Cancel"},{"id":"387","text":"Where?"},{"id":"388","text":"Make new friends"},{"id":"389","text":"Chat with someone"},{"id":"390","text":"Have a date"},{"id":"391","text":"All the city"},{"id":"392","text":"Download our free applications"},{"id":"393","text":"application"},{"id":"394","text":"I want"},{"id":"395","text":"All the world"},{"id":"396","text":"All the country"},{"id":"397","text":"Age"}];
 
 
	
		
		function request_source(){

			return '#';

		}

		function site_title(){

			return 'Blind Date';

		}	

		function theme_source(){

			return './bdating/assets';

		}

		function site_url(){

			return 'index.html';

		}	

		var current_user_id = 0;

		var user_name;	

		</script>		

	</head>

	<body class="landing">

			<div id="preloader">

				<div id="status"><div class="profile-outer-ring"></div></div>

			</div>	

			<header id="header" class="alt">

				<nav id="nav">

				  <ul>

										

						<li><a href="javascript:;" data-login="true" class="button special">Login</a></li>

					</ul>

				</nav>

			</header>

			<div class="main">

				<video  loop autoplay loop muted playsinline width="1280" height="720" style="display:none">
					<source type="video/mp4" src="bdating/images/bg1.mp4">

				</video>		  

				<div class="left"  >

					<div class="top-logo">

						<center><img src="#" /></center>

					</div>

					<div class="header-text">

						<h1>meet new people! <b id="cityName">PortHarcourt</b></h1>

					</div>

					

					<div class="latest-users">

						<center><div class="photo" data-search-show="0" style="background-image: url(https://dafwfw.s3.amazonaws.com/01270908461);left:0px;display:none"></div><div class="photo" data-search-show="1" style="background-image: url(https://dafwfw.s3.amazonaws.com/01269137546);left:20px;display:none"></div><div class="photo" data-search-show="2" style="background-image: url(https://dafwfw.s3.amazonaws.com/01269591302);left:40px;display:none"></div><div class="photo" data-search-show="3" style="background-image: url(https://dafwfw.s3.amazonaws.com/01373181780);left:60px;display:none"></div><div class="photo" data-search-show="4" style="background-image: url(https://dafwfw.s3.amazonaws.com/01270095957);left:80px;display:none"></div><div class="photo" data-search-show="5" style="background-image: url(https://dafwfw.s3.amazonaws.com/01309154604);left:100px;display:none"></div><div class="photo" data-search-show="6" style="background-image: url(https://dafwfw.s3.amazonaws.com/01271834004);left:120px;display:none"></div><div class="photo" data-search-show="7" style="background-image: url(https://dafwfw.s3.amazonaws.com/01312920640);left:140px;display:none"></div></center>

					</div>

					<div class="button" data-j>

						<a href="#" data-join> Become a member now </a>

					</div>

				</div>

				<div class="right" id="forms" style="display:none;">

					<div class="box">

						<div class="header">

							
							<a href="#">

								<div class="fb"> 

									<div class="logo">

										<i class="icon fa-facebook"></i>

									</div>

									<h3>Login</h3>								

								</div>

							</a>

							
						</div>

						<div class="socials">

							<ul>

							  
							  

							</ul>								

						</div>

						<div id="login-form"  style="display:none;">

							<div class="title">

								<h1>Welcome to BlindDate</h1>

							</div>

							<div class="form">

								<form method="post" action="<?php echo site_url('login');?>" id="login" style="margin:0;padding:0;">

								<input type="hidden" value="login" name="action" />

								<input type="email" name="login_email" id="login_email" value="info@blinddate.com" required placeholder="Your email" required="true"  />

								<input type="password" name="login_pass" id="login_pass" value="dating2017" required placeholder="Your password" required="true" />

								</form>

								<div class="12u 12u(mobilep)" style="text-align:right; font-size:14px; padding-right:40px; color:#888;" >

									<a href="javascript:;" id="recover-pwd">do you forget your password?</a>

								</div>

								<div class="error"  id="login-error"></div>

								<div class="signup" id="login-now">Login now</div>

								<div class="info">

									By continuing, you are confirming that you have read and agree to our <a href="#" style="color:#aaa;" onclick="javascript:void window.open('indexc69a.html?page=tac','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Terms and Conditions </a> and 

									<a href="#" style="color:#aaa;" onclick="javascript:void window.open('indexff9b.html?page=pp','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Privacy Policy</a>								

								</div>

							</div>							

						</div>

						<div id="recover-form"  style="display:none;">

							<div class="title">

								<h1>Password recover</h1>

							</div>

							<div class="form">

								<form method="post" action="#" id="recover" style="margin:0;padding:0;">

								<input type="hidden" value="recover" name="action" />

								<input type="email" name="recover_email" id="recover_email" required placeholder="Your email"  />

								</form>

								<div class="error"  id="recover-error"></div>

								<div class="signup" id="recover-now">Recover password</div>

								<div class="info">

									By continuing, you are confirming that you have read and agree to our <a href="#" style="color:#aaa;" onclick="javascript:void window.open('indexc69a.html?page=tac','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Terms and Conditions </a> and 

									<a href="#" style="color:#aaa;" onclick="javascript:void window.open('indexff9b.html?page=pp','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Privacy Policy</a>								

								</div>

							</div>							

						</div>						

						<div id="register-form" style="z-index: 99999">

							<div class="title">

								<h1>Become a member now</h1>

							</div>

							<div class="form">

								<form method="post" action="#" id="register" style="margin:0;padding:0;">

								<input type="text"  name="fname" maxlength="18" id="firstname" required placeholder="Your First Name" />
								<input type="text"  name="lname" maxlength="18" id="lastname" required placeholder="Last Name" />
								
								<input type="email" name="email" required id="email" placeholder="Your email"  />

								<input type="password" name="password" id="pass" required placeholder="Your password" />

								<select name="day" id="day" style="width:22%;" required >

									<option value="1" disabled selected hidden >Day</option>

									<option style="color:#000;" value="1">1</option>
										<option style="color:#000;" value="2">2</option>
										<option style="color:#000;" value="3">3</option>
										<option style="color:#000;" value="4">4</option>
										<option style="color:#000;" value="5">5</option>
										<option style="color:#000;" value="6">6</option>
										<option style="color:#000;" value="7">7</option>
										<option style="color:#000;" value="8">8</option>
										<option style="color:#000;" value="9">9</option>
										<option style="color:#000;" value="10">10</option>
										<option style="color:#000;" value="11">11</option>
										<option style="color:#000;" value="12">12</option>
										<option style="color:#000;" value="13">13</option>
										<option style="color:#000;" value="14">14</option>
										<option style="color:#000;" value="15">15</option>
										<option style="color:#000;" value="16">16</option>
										<option style="color:#000;" value="17">17</option>
										<option style="color:#000;" value="18">18</option>
										<option style="color:#000;" value="19">19</option>
										<option style="color:#000;" value="20">20</option>
										<option style="color:#000;" value="21">21</option>
										<option style="color:#000;" value="22">22</option>
										<option style="color:#000;" value="23">23</option>
										<option style="color:#000;" value="24">24</option>
										<option style="color:#000;" value="25">25</option>
										<option style="color:#000;" value="26">26</option>
										<option style="color:#000;" value="27">27</option>
										<option style="color:#000;" value="28">28</option>
										<option style="color:#000;" value="29">29</option>
										<option style="color:#000;" value="30">30</option>
										<option style="color:#000;" value="31">31</option>

								</select>

								<select name="month"  id="month"  style="width:32%;margin-left:10px" required>						

									<option value="1" disabled selected hidden>Month</option>

									<option value="1" style="color:#000;">January</option>
									<option value="2" style="color:#000;">February</option>
									<option value="3" style="color:#000;">March</option>
									<option value="4" style="color:#000;">April</option>
									<option value="5" style="color:#000;">May</option>
									<option value="6" style="color:#000;">June</option>
									<option value="7" style="color:#000;">July</option>
									<option value="8" style="color:#000;">August</option>
									<option value="9" style="color:#000;">September</option>
									<option value="10" style="color:#000;">October</option>
									<option value="11" style="color:#000;">November</option>
									<option value="12" style="color:#000;">December</option>

								</select>

								<select name="year" id="year" style="width:23%;margin-left:10px" required >

									<option value="1990" disabled selected hidden>Year</option>							

									<option style="color:#000;" value="1925">1925</option>
									<option style="color:#000;" value="1926">1926</option>
									<option style="color:#000;" value="1927">1927</option>
									<option style="color:#000;" value="1928">1928</option>
									<option style="color:#000;" value="1929">1929</option>
									<option style="color:#000;" value="1930">1930</option>
									<option style="color:#000;" value="1931">1931</option>
									<option style="color:#000;" value="1932">1932</option>
									<option style="color:#000;" value="1933">1933</option>
									<option style="color:#000;" value="1934">1934</option>
									<option style="color:#000;" value="1935">1935</option>
									<option style="color:#000;" value="1936">1936</option>
									<option style="color:#000;" value="1937">1937</option>
									<option style="color:#000;" value="1938">1938</option>
									<option style="color:#000;" value="1939">1939</option>
									<option style="color:#000;" value="1940">1940</option>
									<option style="color:#000;" value="1941">1941</option>
									<option style="color:#000;" value="1942">1942</option>
									<option style="color:#000;" value="1943">1943</option>
									<option style="color:#000;" value="1944">1944</option>
									<option style="color:#000;" value="1945">1945</option>
									<option style="color:#000;" value="1946">1946</option>
									<option style="color:#000;" value="1947">1947</option>
									<option style="color:#000;" value="1948">1948</option>
									<option style="color:#000;" value="1949">1949</option>
									<option style="color:#000;" value="1950">1950</option>
									<option style="color:#000;" value="1951">1951</option>
									<option style="color:#000;" value="1952">1952</option>
									<option style="color:#000;" value="1953">1953</option>
									<option style="color:#000;" value="1954">1954</option>
									<option style="color:#000;" value="1955">1955</option>
									<option style="color:#000;" value="1956">1956</option>
									<option style="color:#000;" value="1957">1957</option>
									<option style="color:#000;" value="1958">1958</option>
									<option style="color:#000;" value="1959">1959</option>
									<option style="color:#000;" value="1960">1960</option>
									<option style="color:#000;" value="1961">1961</option>
									<option style="color:#000;" value="1962">1962</option>
									<option style="color:#000;" value="1963">1963</option>
									<option style="color:#000;" value="1964">1964</option>
									<option style="color:#000;" value="1965">1965</option>
									<option style="color:#000;" value="1966">1966</option>
									<option style="color:#000;" value="1967">1967</option>
									<option style="color:#000;" value="1968">1968</option>
									<option style="color:#000;" value="1969">1969</option>
									<option style="color:#000;" value="1970">1970</option>
									<option style="color:#000;" value="1971">1971</option>
									<option style="color:#000;" value="1972">1972</option>
									<option style="color:#000;" value="1973">1973</option>
									<option style="color:#000;" value="1974">1974</option>
									<option style="color:#000;" value="1975">1975</option>
									<option style="color:#000;" value="1976">1976</option>
									<option style="color:#000;" value="1977">1977</option>
									<option style="color:#000;" value="1978">1978</option>
									<option style="color:#000;" value="1979">1979</option>
									<option style="color:#000;" value="1980">1980</option>
									<option style="color:#000;" value="1981">1981</option>
									<option style="color:#000;" value="1982">1982</option>
									<option style="color:#000;" value="1983">1983</option>
									<option style="color:#000;" value="1984">1984</option>
									<option style="color:#000;" value="1985">1985</option>
									<option style="color:#000;" value="1986">1986</option>
									<option style="color:#000;" value="1987">1987</option>
									<option style="color:#000;" value="1988">1988</option>
									<option style="color:#000;" value="1989">1989</option>
									<option style="color:#000;" value="1990">1990</option>
									<option style="color:#000;" value="1991">1991</option>
									<option style="color:#000;" value="1992">1992</option>
									<option style="color:#000;" value="1993">1993</option>
									<option style="color:#000;" value="1994">1994</option>
									<option style="color:#000;" value="1995">1995</option>
									<option style="color:#000;" value="1996">1996</option>
									<option style="color:#000;" value="1997">1997</option>
									<option style="color:#000;" value="1998">1998</option>

								</select>

								
								<input type="text" name="loc" id="loc" required value='Lagos' placeholder="Where do you live?" />
							
								<select name="gender" style="cursor:pointer;width:38%;margin-left:10px"  id="gender" placeholder="Please select">

									<option value="male" style="color:#000;">Male</option>

									<option value="female" style="color:#000;">Female</option>

								</select>

								<select name="lookingfor" style="cursor:pointer;width:45%;margin-left:10px" id="looking" placeholder="Please select">

									<option value="females" style="color:#000;">Meet girls</option>

									<option value="males" style="color:#000;">Meet boys</option>

									<option value="both" style="color:#000;">Meet boys and girls</option>                                

								</select>

							<!--	<input type="hidden" value="register" name="action" />

								<input type="hidden" name="city" id="locality" value="portharcourt"/>

								<input type="hidden" name="lng" id="lng" value="3.3958"  /> -->

								</form>

								<div class="error"  id="error"></div>

								<div class="signup" id="create-acc">Sign up</div>

								<div class="info">

									By continuing, you are confirming that you have read and agree to our <a href="indexc69a.html?page=tac" style="color:#aaa;" onclick="javascript:void window.open('indexc69a.html?page=tac','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Terms and Conditions </a> and 

									<a href="indexff9b.html?page=pp" style="color:#aaa;" onclick="javascript:void window.open('indexff9b.html?page=pp','1430115090715','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Privacy Policy</a>								

								</div>

							</div>

						</div>						

					</div>

				</div>

				<div class="fbottom" style="z-index: 9999">

					

					<div style="float:left;padding-left:5px;margin-bottom:20px;">

						<span style="float:left;margin-left:12px;font-weight:500;font-size:38px;color:#fff;padding-bottom:10px;">
						1,473</span><br>

						<span style="float:left;margin-left:12px;font-size:20px;color:#fff;margin-bottom:5px;">Users</span>

					</div>

					<div style="float:right;padding-right:10px;">

					
						<a href="#" target="_blank" style="border:none"><img src="bdating/images/playstore.png" style="display:inline;margin-right:10px;height:50px;"></a>

						

						<a href="#" target="_blank" style="border:none;"><img src="bdating/images/appstore.png" style="display:inline;margin-right:10px;height:50px;"></a>

					
					</div>					

					<div class="line"></div>

				</div>				

			</div>

 	

		<script src="bdating/assets/js/jquery.preload.js"></script>

		<script src="bdating/js/dynamics.js"></script>

		<script src="bdating/assets/js/sweetalert.min.js"></script> 

		<script src="bdating/js/init.js"></script>
		<script src="bdating/js/jquery.smartbanner.js"></script>
		<!-- add your custom js here -->

		<script type="text/javascript">

		var w = $(window).width();	

		$('video')[0].play();

		$('video')[0].pause();		

		$(window).load(function() {		

			var h = $(window).height();	

			$('.main').css('height',h+'px'); 

			$('#status').fadeOut(); // will first fade out the loading animation

			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.

			$('body').delay(350).css({'overflow':'visible'});

			var position = $('#cityName').offset();

			var maxW = $('#cityName').width();

			var left = position.left - 5;

			$('.latest-users').css('left',left+'px');		

			setTimeout(function(){

				$('video')[0].play();

				$('video').show(); 

			},1500);

			var xaxa = 0;

				setTimeout(function(){

				var show_search = setInterval(function(){	

					if(xaxa == 7){

						clearInterval(show_search);				

					}

					$('[data-search-show='+xaxa+']').fadeIn();

					xaxa++;					

				},300);

			},1500);			

			$('body').keyup(function(e) {

				switch (e.keyCode) {

					case 13: // Enter

						$('#login-now').click();

					break;

				}

			});

			

			$('[data-join]').click(function(e){

				e.preventDefault();

				$('[data-j]').hide();

				$('.header-text').hide();

				$('.latest-users').hide();

				$('.top-logo img').addClass('scale-logo');

				setTimeout(function(){

					$('#forms').fadeIn();

				},300);				

				$('.top-logo').animate({								 

					top: '-10px'

					}, 500, function() {

				});				

			});

			$('select').change(function(e){

				$(this).css('color','#333');

			});

			

			$('.more').click(function(e){

				e.preventDefault();

				if($('.socials').css('opacity') == 0){

					show();

					$('#more-icon').removeClass('fa-ellipsis-h');

					$('#more-icon').addClass('fa-close');

				} else {

					hide();

					$('#more-icon').removeClass('fa-close');							

					$('#more-icon').addClass('fa-ellipsis-h');							

				}

			});					

			var nav = document.querySelector('.socials')

			var items = document.querySelectorAll('.socials ul li')



			function show() {

			  // Animate the popover

			  dynamics.animate(nav, {

				opacity: 1,

				scale: 1

			  }, {

				type: dynamics.spring,

				frequency: 200,

				friction: 270,

				duration: 800

			  })



			  // Animate each line individually

			  for(var i=0; i<items.length; i++) {

				var item = items[i]

				// Define initial properties

				dynamics.css(item, {

				  opacity: 0,

				  translateY: 20

				})



				// Animate to final properties

				dynamics.animate(item, {

				  opacity: 1,

				  translateY: 0

				}, {

				  type: dynamics.spring,

				  frequency: 300,

				  friction: 435,

				  duration: 1000,

				  delay: 100 + i * 40

				})

			  }



			  

			}



			function hide() {

			  // Animate the popover

			  dynamics.animate(nav, {

				opacity: 0,

				scale: .1

			  }, {

				type: dynamics.easeInOut,

				duration: 300,

				friction: 100

			  })



			  

			}



								

		})
		$(function() {
             $.smartbanner({ title:'lindoo' }); 
         });
        function detect_device(val) {
 
            var w = window,
 
                d = document,
 
                e = d.documentElement,
 
                g = d.getElementsByTagName('body')[0],
 
                x = w.innerWidth || e.clientWidth || g.clientWidth,
 
                y = w.innerHeight|| e.clientHeight|| g.clientHeight;
 
            var isiPhone =      navigator.userAgent.toLowerCase().indexOf("iphone");
 
            var isiPad =        navigator.userAgent.toLowerCase().indexOf("ipad");
 
            var isiPod =        navigator.userAgent.toLowerCase().indexOf("ipod");
 
            var isiAndroid =    navigator.userAgent.toLowerCase().indexOf("android");
            if(isiPhone > -1 || isiPad > -1 || isiPod > -1 || isiAndroid > -1){
 
                window.location= "mobie.html";
 
            }           
            if(x <= 600){
                window.location.href = 'mobile.html';
                /*
                $('.header-text').css('width',x+'px');
                $('.top-logo').css('width',x+'px');
                $('.fbottom').css('width',x+'px');
                var g = x/1.1;
                $('.left .button').css('width',g+'px');
                $('.left .button').hide();
                $('#header').hide();
                $('#mobileOnly').show();
                $('.latest-users').hide();
                                */
            } else {
                if(val == 1){
                    window.location.href = 'index.html';
                }
            }
        }
        detect_device(0);
        $( window ).resize(function() {
          detect_device(1);
        });
 
		 
		</script> 		

	</body>


</html>