<?php include 'head.php'; ?>
<form action="/controller/ajouter_personnel.php" method="POST">
        <h3>Ajouter personnel</h3>
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label>Téléphone:</label>
        <input type="tel" name="telephone" required><br>
        <label>Email:</label>
        <input type="email" name="mail" required><br>
        <button type="submit">Ajouter</button>
      </form>
      <form action="/modifier-personnel" method="POST">
        <h3>Modifier personnel</h3>
        <label>ID personnel:</label>
        <input type="number" name="id" required><br>
        <label>Nouveau nom:</label>
        <input type="text" name="nom"><br>
        <label>Nouveau prénom:</label>
        <input type="text" name="prenom"><br>
        <label>Nouveau email:</label>
        <input type="email" name="email"><br>
        <button type="submit">Modifier</button>
      </form>
      <form action="/supprimer-personnel" method="POST">
        <h3>Supprimer personnel</h3>
        <label>ID personnel à supprimer:</label>
        <input type="number" name="id" required><br>
        <button type="submit">Supprimer</button>
      </form>
      <form action="/controller/afficher_absence.php" method="GET">
        <h3>Afficher absences</h3>
        <button type="submit">Afficher</button>
      </form>
      <form action="/controller/ajouter_absence.php" method="POST">
        <h3>Ajouter absence</h3>
        <label>ID personnel:</label>
        <input type="number" name="idpersonnel" required><br>
        <label>Date de début:</label>
        <input type="date" name="datedebut" required><br>
        <label>Date de fin:</label>
        <input type="date" name="datefin" required><br>
        <label>Motif:</label>
        <input type="number" name="idmotif" required><br>
        <button type="submit">Ajouter</button>
      </form>
      <form action="/modifier-absence" method="POST">
        <h3>Modifier absence</h3>
        <label>ID absence:</label>
        <input type="number" name="id_absence" required><br>
        <label>Nouvelle date de début:</label>
        <input type="date" name="date_debut"><br>
        <label>Nouvelle date de fin:</label>
        <input type="date" name="date_fin"><br>
        <label>Nouveau motif:</label>
        <input type="text" name="motif"><br>
        <button type="submit">Modifier</button>
      </form>
      <form action="/supprimer-absence" method="POST">
        <h3>Supprimer absence</h3>
        <label>ID absence à supprimer:</label>
        <input type="number" name="id_absence" required><br>
        <button type="submit">Supprimer</button>
      </form>
      <?php include 'footer.php'; ?>