<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $fullName = $_POST['fullName'];
  $matricule = $_POST['matricule'];
  $departement = $_POST['departement'];
  $poste = $_POST['poste'];
  $dateEmbauche = $_POST['dateEmbauche'];
  $statut = $_POST['statut'];

  $query = "INSERT INTO task(fullName, matricule, departement, poste, dateEmbauche, statut) 
                        VALUES ('$fullName', '$matricule', '$departement', '$poste', '$dateEmbauche', $statut)";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}