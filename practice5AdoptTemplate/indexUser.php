<?php
session_start();
echo "You are on indexUser";
$name = $_SESSION['name'];
$password = $_SESSION['password'];
$name2 = 'diego';
echo '<br>';
echo $name;
echo '<br>';
echo $password;
echo '<br>';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Adopt a Pet!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" />
</head>

  



<body>
<div id="wrap">
  <div id="header">
    <?php
    echo "<h1 id='logo-text'>Adopt a Pet User $name</h1>";
    ?>
    <h2 id="slogan">Adopt a pet can change your life and a pet life...</h2>
    <div id="header-links">
      <p> <a href="#">Contact</a> | <a href="#">Admin</a> | <a href="salir.php">Salir</a> </p>
    </div>
  </div>
  <div  id="menu">
    <ul>
      <li id="current"><a href="indexUser.php">Home</a></li>
      <li><a href="practice5ViewPetsUser.php">Catalogue of pets</a></li>
      <li><a href="practice5ViewYourPetsUser.php">View your Pets</a></li>
      <li><a href="practice5Adopt.php">Adopt a Pet</a></li>

    </ul>
  </div>
  <div id="content-wrap">
    <div id="sidebar">
      <h1>Search Box</h1>
      <form action="#" class="searchform">
        <p>
          <input name="search_query" class="textbox" type="text" />
          <input name="search" class="button" value="Search" type="submit" />
        </p>
      </form>
      <h1>Sidebar Menu</h1>
      <ul class="sidemenu">
        <li><a href="#">Home</a></li>
        <li><a href="#TemplateInfo">About</a></li>
        <li><a href="#SampleTags">Sample Tags</a></li>
        <li><a href="#">More Free Templates</a></li>
        <li><a href="#">Premium Templates</a></li>
      </ul>
      <h1>Links</h1>
      <ul class="sidemenu">
        <li><a href="#">PDPhoto.org</a></li>
        <li><a href="#">Squidfingers</a></li>
        <li><a href="#">Alistapart</a></li>
        <li><a href="#">CSS Remix</a></li>
        <li><a href="#">Dark Eye</a></li>
      </ul>
      <h1>Sponsors</h1>
      <ul class="sidemenu">
        <li><a href="#"><strong>4templates</strong></a> <br />
          Low Cost Hi-Quality Templates</li>
        <li><a href="#"><strong>TemplateMonster</strong></a> <br />
          Delivering the Best Templates on the Net!</li>
        <li><a href="#"><strong>Fotolia</strong></a> <br />
          Free stock images or from $1</li>
        <li><a href="#"><strong>Text Link Ads</strong></a> <br />
          Monetized your website</li>
        <li><a href="#"><strong>Dreamhost</strong></a> <br />
          Premium webhosting</li>
      </ul>
      <h1>Wise Words</h1>
      <div class="left-box">
        <p>&quot;Evaluation of the past is the first step toward vision for the future.&quot; </p>
        <p class="align-right">- Chris Widener</p>
      </div>
      <h1>Support Styleshout</h1>
      <div class="left-box">
        <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the <a href="http://www.styleshout.com/">donate link</a> on my website - it will be a great help and will surely be appreciated.</p>
      </div>
    </div>
    <div id="main"> <a name="TemplateInfo"></a>
      <h1>About</h1>
      <p><strong>Adopt a Pet </strong> is free, Use the nationwide database of dogs looking for good homes below! Search by zip code to meet available dogs 
      in your area. Please note, these dogs are from rescues and shelters nationwide and are not available through the ASPCA. If you live in New York City and 
      are hoping to adopt from us, check out the dogs available at our Adoption Center. <strong>
      
      <p class="post-footer align-right"> <a href="#" class="readmore">Read more</a> <a href="#" class="comments">Comments (7)</a> <span class="date">March 21, 2023</span> </p>
      <a name="SampleTags"></a>
      <h1>Sample Tags</h1>
      <h3>Code</h3>
      <p><code> code-sample { <br />
        font-weight: bold;<br />
        font-style: italic;<br />
        } </code></p>
      <h3>Example Lists</h3>
      <ol>
        <li>Here is an example</li>
        <li>of an ordered list</li>
      </ol>
      <ul>
        <li>Here is an example</li>
        <li>of an unordered list</li>
      </ul>
      <h3>Blockquote</h3>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p>
      </blockquote>
      <h3>Image and text</h3>
      <p><a href="http://getfirefox.com/"><img src="images/firefox-gray.jpg" width="100" height="120" alt="firefox" class="float-left" /></a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. </p>
      <h3>Table Styling</h3>
      <table>
        <tr>
          <th class="first"><strong>post</strong> date</th>
          <th>title</th>
          <th>description</th>
        </tr>
        <tr class="row-a">
          <td class="first">04.18.2007</td>
          <td><a href="#">Augue non nibh</a></td>
          <td><a href="#">Lobortis commodo metus vestibulum</a></td>
        </tr>
        <tr class="row-b">
          <td class="first">04.18.2007</td>
          <td><a href="#">Fusce ut diam bibendum</a></td>
          <td><a href="#">Purus in eget odio in sapien</a></td>
        </tr>
        <tr class="row-a">
          <td class="first">04.18.2007</td>
          <td><a href="#">Maecenas et ipsum</a></td>
          <td><a href="#">Adipiscing blandit quisque eros</a></td>
        </tr>
        <tr class="row-b">
          <td class="first">04.18.2007</td>
          <td><a href="#">Sed vestibulum blandit</a></td>
          <td><a href="#">Cras lobortis commodo metus lorem</a></td>
        </tr>
      </table>
      <h3>Example Form</h3>
      <form action="#">
        <p>
          <label>Name</label>
          <input name="dname" value="Your Name" type="text" size="30" />
          <label>Email</label>
          <input name="demail" value="Your Email" type="text" size="30" />
          <label>Your Comments</label>
          <textarea rows="5" cols="5"></textarea>
          <br />
          <input class="button" type="submit" />
        </p>
      </form>
      <br />
    </div>
  </div>
  <div id="footer">
    <p> &copy; 2006 <strong>Your Company</strong> | Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Home</a>&nbsp;|&nbsp; <a href="#">Sitemap</a>&nbsp;|&nbsp; <a href="salir.php">Salir</a> </p>
  </div>
</div>
</body>

      

</html>
      