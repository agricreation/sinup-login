<?php
include "lib/load.php"
?>
<?php
load(_header);
?>

<?php
echo "Form submited";
echo "<br>";
print "Username => $_POST[username]";
echo "<br>";
print "Email => $_POST[email_address]";
echo "<br>";
print "Password => $_POST[password]";
echo "<br>";
print "Phone => $_POST[phone]";
echo "<br>";
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Account Created</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Account created login frome here <a href="login.php">Login</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="login.php">
        <button type="button" class="btn btn-primary">Login</button>
        </a>
      </div>
    </div>
  </div>
</div>
