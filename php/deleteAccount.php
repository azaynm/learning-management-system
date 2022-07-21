<?php


echo '
<div id="deleteAccount" class="modal">
  <div class="modal-content">
    <span id="close6">&times;</span>
    <h1>Delete Account</h1><br/>
    <form action="/action_page.php">
      <label for="email">Your Email</label>
      <input type="text" id="email" name="email" placeholder="Your Email..">
      <label for="npassword">Your Password</label>
      <input type="password" id="password" name="password" placeholder="Your Password..">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
';
?>