<form method="post" action="login_doit.php">
  <p>Executive Name: <input type="text" name="executive"></p>
  <p>Override code: <input type="password" name="override_code"></p>
  <?php if (isset($_GET['error'])) { echo '<p class="error">Fel inloggning</p>'; } ?>
  <button class="btn" type="submit">Enter override system</button>
</form>