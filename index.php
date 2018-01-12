<?php
error_reporting(0);
include 'func_base64url.php';
?>


<a href="?u= <?php print base64_url_encode('achmad') ?> ">achmad</a>
<br>

<?php 
$user=base64_url_decode($_GET['u']);
print 'User:'.$user;
 ?>




 <?php //Sumber: https://justin.kelly.org.au/simple-base64-encodedecode-url-safe-functions/ ?>