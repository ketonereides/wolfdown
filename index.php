<?php include_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $siteTitle; ?></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
// gotta have me some markdown
include_once("markdown.php"); ?>

<h1><?php echo $siteTitle; ?></h1>

<?php

// where are the files?
$directory = "content/";

// spit out dem files, yo!
$pages = glob($directory . "*.md");

?>

<ul id="nav">

  <li><a href="index.php">Home</a></li>

  <?php
  
    // list each page in directory
    foreach($pages as $page) {
    
      // remove folder and extension
      $pageName = substr($page, 8);
      $pageName = substr($pageName, 0, -3);
    
      // display list as links
      echo "<li><a href=\"index.php?id=".$pageName."\">".$pageName."</a></li>";
    
    }
    
    echo $customLinks;
  
  ?>

</ul>

<?php

// only display if id is set
if(isset($_GET['id'])) {

  // list eage page in directory
  foreach($pages as $pageContent) {
    
    // remove folder and extension
    $pageName = substr($pageContent, 8);
    $pageName = substr($pageName, 0, -3);
  
    if($_GET['id']==$pageName) {
    
      // show heading for page
      echo "<h2>".$pageName."</h2>";
    
      // show contents of page
      echo Markdown(file_get_contents("content/".$pageName.".md"));
    
    }
  
  }

} else {

  echo "<h2>Home</h2>";

  // if id is not set, show home page
  echo Markdown(file_get_contents("content/Home.markdown"));

}

?>

<div id="footer">Powered by <a href="https://github.com/ketonereides/wolfdown">Wolfdown</a></div>

</body>
</html>