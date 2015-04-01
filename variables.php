<?PHP


/* description variables */
/***
*first entery is page titles, then info descriptions, then source for icon box
*
*
***/
 $generate = array(
    "index" => array("Index" ,
					  "Here  I describe who I am and what  I have done with passion, effort and creativity all these years.",
					   "<img src='images/index_icon.png' alt='about me'>",
					   "images/main.jpg"),
					   
    "about" => array("Index" ,
					  "I am a professionally experienced with a solid understanding of agency workflow in regards to account management, and creative development processes; managing all phases of a campaign: concept, creation, development, maintenance, and delivery.",
					   "<img src='images/aboutme_icon.png' alt='about me'>",
					   "images/aboutme_bg.jpg"),	
					   		
	"portfolio" => array("Index" ,
					  "All the work in this gallery was developed by me, and are based on the needs to communicate the product or the service.",
					   "<img src='images/portfolio_icon.png' alt='about me'>",
					   "images/portfolio_bg.jpg"
					   ),			   


	"contact" => array("Index" ,
					  "I would appreciate the opportunity to discuss how my education and my professional experience will be helpful to you or your organization.",
					   "<img src='images/contact_icon.png' alt='contact me'>",
					   "images/contact_bg.jpg"),	
					   
	"cooleche" => array("Index" ,
					  "I would appreciate the opportunity to discuss how my education and my professional experience will be helpful to you or your organization.",
					   "<p>Cooleche</p>",
					   "images/portfolio_bg.jpg"),	
					   
	"recycling" => array("Index" ,
					  "Version: Urban Ride.<br>Objective: Show the reality of the city.<br>Secondary Objectives: Awareness to start recycling<br>Teach people how to do it.<br>Version: Children.<br>Objective: Encouraging children to recycle.",
					   "<p>Recycling<br>Campaign</p>",
					   "images/portfolio_bg.jpg"),
			
	"ux" => array("Index" ,
					  "My Responsibilities :<br>Develop clean well executed design concepts. <br>Clear screen mockups, prototypes and UI design specifications. <br>Coordinate with UI Programmer to strategize and execute user interfaces.<br>Translate user requirements into usable interfaces aligning with business goals. ",
					   "<p>UX/UI</p>",
					   "images/portfolio_bg.jpg"),
			
	"cachechi" => array("Index" ,
					  "Version: I'm Cacechi<br>Objective: Build pride in being part of Cooperative.<br> Advertising Goal: Create a memorable link between chart, and  strengths of the cooperative.",
					   "<p>Cachechi</p>",
					   "images/portfolio_bg.jpg"),
					   
	"rapiprestamos" => array("Index" ,
					  "Version: Correte el Gusto<br>Objective: Present the brand as helping you to achieve what you want.<br>Secondary objective: Create a memorble link between the chart and the  consumer needs.",
					   "<p>Rapiprestamos</p>",
					   "images/portfolio_bg.jpg"),
					   
	"myfico" => array("Index" ,
					  "As a part of the creative team my Responsibilities included:<br><br>Design cohesive email campaigns.<br>Be part in brainstorming, for different campaigns.<br>Produce assets for website and A/B tests.<br>Wire framing to creative new lay outs in the site.",
					   "<p>MyFico</p>",
					   "images/portfolio_bg.jpg"),
					   
					   
	"last_works" => array("Index" ,
					  "",
					   "<p>OTHERS</p>",
					   "images/portfolio_bg.jpg")
);


function pull_images($location, $break){
echo "<div class='portfolio_spacer'></div>";
$counter = 0;
$dir = "images/$location/*.{jpg,png}";
$files = glob($dir, GLOB_BRACE);
asort($files);
foreach($files as $file) {
	$counter ++;
  echo "<a class='fancybox' data-fancybox-group='gallery' href='" . $file . "'><img class='portfolio_mini' src='" . $file ."' alt='' /></a>";
if($counter == $break) echo "<div class='clear'></div>";
}	
	
}

?>