<?php
include "../include/db.php";


if (!hook("authenticate")){include "../include/authenticate.php";}

include "../include/header.php";
?>

<div class="BasicsBox">
  <h1><?php echo escape($lang["aboutus"]); ?></h1>
  <p><?php echo text("about")?></p>
</div>

<?php
include "../include/footer.php";
?>