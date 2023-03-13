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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body> 
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo base_url('modules/employee/add.php'); ?>">ADD</a></li>
            <li role="presentation"><a href="<?php echo base_url('modules/employee/index.php'); ?>">View</a></li>
            <li role="presentation"><a href="<?php echo base_url('modules/employee/update.php'); ?>">Update</a></li>
        </ul>
    </body>
</html> 