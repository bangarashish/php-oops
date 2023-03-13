<?php 
if (!defined('base_url')){
  define("base_url", "http://localhost/php_oops/admin/");
}

if (!function_exists('base_url')) {
  function base_url($url){
    return base_url.$url;
  }
} 
?>
<html> 
    <head> 
        <title> </title>
    </head>
    <body> 
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo base_url('modules/employee/add.php'); ?>">ADD</a></li>
            <li role="presentation"><a href="<?php echo base_url('modules/employee/index.php'); ?>">View</a></li>
            <li role="presentation"><a href="<?php echo base_url('modules/employee/index.php'); ?>">Update</a></li>
        </ul>
    </body>
</html> 