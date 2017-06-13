<body>
<div class="FormResult">
 <?php
 if (isset($_GET['Error']) && $_GET['Error'] == 'EmailExists')
 {
 include 'EmailExistsMessage.html';
 }
 else if (isset($_GET['Error']) && $_GET['Error'] == 'NoEmail')
 {
 include 'NoEmailMessage.html';
 }
 else if (isset($_GET['Error']) && $_GET['Error'] == 'NoLastName')
 {
 include 'NoLastNameMessage.html';
 }
 else
 {
 include 'success.html';
 }
 ?>
</div>
</body>
