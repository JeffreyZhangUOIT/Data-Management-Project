<?php
echo "
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <img src=\"images/logo.png\" class=\"img-responsive\" style=\"height:200x;width:50px\" href=\"https://www.betbirdy.me\">			
        </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
			
                        <li class=\"active\"><a href=\"index.php#section1\">Home</a></li>
                        <li><a href=\"index.php#section2\">Information</a></li>
                        <li><a href=\"index.php#section3\">Professional Pigeon Racing</a></li>
                        <li><a href=\"index.php#section4\">Recent Races</a></li>
                        <li><a href=\"racestats.php\">Race Statistics</a></li>
                        <li><a href=\"register.php\">Register</a></li>
                        <li><a href=\"members.php\">Members</a></li>
                        <li><a href=\"plots.php\">Plots</a></li>
                        <li>
                        "; if(isset($_SESSION['username']) && !empty($_SESSION['username'])) { echo "<a href=\"userProfile.php\">" . $_SESSION['username'] . '</a>'; }
                        else { echo "<button type=\"button\" class=\"btn-lg btn-default\" data-toggle=\"modal\" data-target=\"#Login\">Login</button> ";}
                        echo "
                        </li>
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
";
?>
