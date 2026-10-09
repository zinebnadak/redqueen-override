<?php
$colors = array("Red", "Blue", "Orange", "Green", "Purple");

if (!isset($_GET['error']) || !isset($_SESSION['color'])) {
    $_SESSION['color'] = $colors[array_rand($colors)];
}
$color = $_SESSION['color'];
?>
<p>Shutdown code color: <b style="color: <?php echo strtolower($color); ?>"><?php echo $color; ?></b></p>

<?php if (isset($_GET['error'])) { ?>
  <p class="error">Wrong shutdown code</p>
<?php } ?>

<form method="post" action="shutdown_doit.php">
  <p>Shutdown code: <input type="text" name="shutdown_code" maxlength="4"></p>
  <button class="btn" type="submit">Shut down RedQueen</button>
</form>