<?php
echo '
<div id="changePassword" class="modal"> 
  <div class="modal-content">
    <span id="close5">&times;</span>
    <h1>Change Password</h1><br/>
    <form action="/action_page.php">
      <label for="cpassword">Current Password</label>
      <input type="password" id="cpassword" name="cpassword" placeholder="Current Password..">
      <label for="npassword">New Password</label>
      <input type="password" id="npassword" name="npassword" placeholder="New Password..">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
';
?>