<?php
// echo $_SESSION['theme'];
if(isset($_POST['theme_togle'])){
  if($_SESSION['theme'] == "white"){
    $_SESSION['theme'] = "dark";
    
  }
  else if($_SESSION['theme'] == "dark"){
    $_SESSION['theme'] = "white";
  }
}

if($_SESSION['theme'] == "dark"){
  
  $navbar_class = "navbar navbar-expand-lg navbar-dark bg-dark shadow";
  $togle_btn = "btn btn-outline-light";
  $togle_lable = "Dark Mode";
  $_SESSION['text'] = "text-white";
  
  
  
}
else {
  $_SESSION['theme'] = "white";
  $navbar_class = "navbar navbar-expand-lg navbar-light shadow";
  $togle_btn = "btn btn-outline-dark";
  $togle_lable = "Light Mode";
  $_SESSION['text'] = "text-dark";


}

// ?>