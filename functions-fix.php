/*
* Insert this code into your active theme's functions.php  file
* or include("functions-fix.php");
*/

 function fix_wpadmin_css() {
  echo"<style>#adminmenu { transform: translateZ(0); } </style>"; 
  //Add other classes if you wish, to stylize your editor or custom post types.
  }
  add_action('admin_head', 'fix_wpadmin_css', 11);
