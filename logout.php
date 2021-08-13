<?php
session_start();
session_destroy();
header("Location:index.php");
?>

<div class="container">
<span>You've Been Logged Out!!!!!!!!</span><br>
<span>Thanks For Visiting</span>
</div>