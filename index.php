<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau Kanban</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Mon Kanban</h1>
  
  <form action="ajouterCarte.php" method="POST">
    <input type="text" name="titre" placeholder="Titre" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Ajouter</button>
  </form>

  <h2>Cartes :</h2>
  <div>
    <?php include 'lireCartes.php'; ?>
  </div>
</body>
</html>
