<?php
#Random Song
function randomsong(){
	require_once "youtube-random.php";
	$randomsonglink = $randomlink[mt_rand(0, count($randomlink))];
	return $randomsonglink;
}
$randomsong = randomsong();
#Content
$home = "
<div class='column-20'>
	<div class='panel'>
		<div class='panel-title'>
			<h3>Home</h3>
		</div>
		<div class='content'>
		</div>
	</div>
</div>
";
$aboutme = "
<div class='column-5'>
	<div class='panel-sm'>
		<div class='panel-title'>
			<h3>Random Songs From My Playlist</h3>
		</div>
		<div class='content-sm'>
			<iframe src='https://www.youtube.com/embed/{$randomsong}' frameborder='0' allowfullscreen></iframe>
		</div>
		<div class='panel-title'>
			<h3>My Anime List Emblem</h3>
		</div>
			<img src='http://www.foxinflame.tk/dev/MALembed/vietchinh?bg_color=FFFFFF&shadow=000000&shadow_amount=2'>
	</div>
</div>
<div class='column-15'>
	<div class='panel'>
		<div class='panel-title'>
			<h3>About Me</h3>
		</div>
		<div class='content'>
			<p>
				hi,
				<br />
				I'm Vietchinh or Viet or whatever you want to call me. 
				<br />
				I am an introverted gamer. Although I take gamer lightly as I don't game much outside of league of legends. 
				<br />
				I watch anime and my origin(or my parents birth place) is vietnam. 
				<br />
				I have a twitch stream and a  channel if you are interested. 
				<br />
			</p>
				<h4 class='h5aboutme'>Anime - 'Where fantasy becomes reality and reality becomes fantasy.'</h4>
				<hr class='hraboutme' />
			<p>	
				The type of genres I watch are: slice of life, romance, action, adventure and many more that I may overlooked. <br />
				I do enjoy slice of life the most for relate able matters. <br />
				Like how Hishiro, Chizuru from the anime relife is the closest character on my personality. Minus the lack of social skills and being incredibly dense. <br />
			</p>
				<h4 class='h5aboutme'>Music - 'Where words fail, Music speaks' - hdsoundi </h4>
				<hr class='hraboutme' />
			<p>
				I have a large collection of different genre of music's, depending on my mood I can choose one of my liking. 
				<br />
				genre's like... 
				<br />
				- Japanese Songs(like felt from touhou project, aimer and many others..)(no not japanese pop, my goodness) 
				<br />
				- EDM 
				<br />
				- Electronics 
				<br />
				- Chill 
				<br />
				- D&B 
				<br />
				- Epic Music
				<br />
				- Emotional Music (preferred most of the time) 
				<br />
				- and the list goes on.. and on.. 
				<br />
				I do have some clear favorite's if I watch my play count of my playlist. 
				<br />
			</p>
		</div>
	</div>
</div>
";
$websitechangelogs = "
<div class='column-20'>
	<button id='left' onclick='left();'> < </button>
	<div class='panel'>
		<div class='panel-title'>
			
		</div>
		<div class='content'>
		</div>
	</div>
	<button id='right'onclick='right();'> > </button>
</div>
";
#End Content

#$Content-Array
	$content = array (
	"Home" => array($home, "home"
	),
	"About Me" => array($aboutme, "aboutme"
	),
	"Website Changelogs" => array($websitechangelogs, "websitechangelogs"
	)
	);
	$randomtext = array ("A Random Text of The day", "You are Awesome!", "SUP!", "Welcome!");
#End Array
?>
