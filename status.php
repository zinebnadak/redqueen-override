<?php
$result = $conn->query("SELECT status FROM redqueen WHERE id = 1");
$row = $result->fetch_assoc();
$status = $row['status'];
?>
<p>Executive Name: <b><?php echo $_SESSION['executive']; ?></b></p>
<p>Red Queen Status: <b><?php echo $status; ?></b></p>

<form method="post" action="logout_doit.php">
  <button class="btn" type="submit">Exit override system</button>
</form>

<?php if ($status == "Online") { ?>
  <form method="get" action="index.php">
    <input type="hidden" name="site" value="shutdown">
    <button class="btn" type="submit">Enter Shutdown Code</button>
  </form>
<?php } else { ?>
  <form method="post" action="start_doit.php">
    <button class="btn dark" type="submit">Start RedQueen</button>
  </form>
<?php } ?>