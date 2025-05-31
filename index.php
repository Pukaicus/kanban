<?php include 'vue/head.php'; ?>
<form action="controller/ControllerLogin.php" method="POST">
    <h3>Se connecter</h3>
    <label>Nom d'utilisateur:</label>
    <input type="text" name="username" required><br>
    <label>Mot de passe:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Connexion</button>
</form>
<?php include 'vue/footer.php'; ?>
