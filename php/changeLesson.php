<?php
echo '
<div id="changeLesson" class="modal">
  <div class="modal-content">
    <span id="close3">&times;</span>
    <h1>Change Lesson</h1><br/>
    <form action="/action_page.php">
      <label for="year">Enter Year</label>
      <input type="text" id="year" name="year" placeholder="Enter year..">
      <label for="details">Enter Details</label>
      <input type="text" id="details" name="details" placeholder="Enter details..">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
';
?>