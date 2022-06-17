<?php
include("db.php");

$fullName = '';
$matricule = '';
$departement = '';
$poste = '';
$dateEmbauche = '';
$statut = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM task WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $fullName = $row['fullName'];
        $matricule = $row['matricule'];
        $departement = $row['departement'];
        $poste = $row['poste'];
        $dateEmbauche = $row['dateEmbauche'];
        $statut = $row['statut'];

        // Get The Date & The Time From String
        $dateFromStr = date_create($dateEmbauche);
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $fullName_new = $_POST['fullName'];
    $matricule_new = $_POST['matricule'];
    $departement_new = $_POST['departement'];
    $poste_new = $_POST['poste'];
    $dateEmbauche_new = $_POST['dateEmbauche'];
    $statut_new = $_POST['statut'];

    $query = "UPDATE task set fullName = '$fullName_new', matricule = '$matricule_new', departement = '$departement_new', poste = '$poste_new', dateEmbauche = '$dateEmbauche_new', statut = $statut_new WHERE id=$id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="fullName" class="form-control" placeholder="Nom & Prenom" autofocus
                            required value="<?php echo $fullName ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="matricule" class="form-control" placeholder="Matricule" required
                            value="<?php echo $matricule ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="departement" class="form-control" placeholder="Departement" required
                            value="<?php echo $departement ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="poste" class="form-control" placeholder="Poste" required
                            value="<?php echo $poste ?>">
                    </div>
                    <div class="form-group">
                        <input type="datetime-local" name="dateEmbauche" class="form-control"
                            placeholder="Date Embauche" required
                            value="<?php echo date_format($dateFromStr, "Y-m-d\Th:i:s"); ?>">
                    </div>
                    <div class=" form-check">
                        <input class="form-check-input" type="radio" name="statut" id="statut_true"
                            <?php echo $statut === '1' ? "checked" : '' ?> value="1">
                        <label class="form-check-label" for="statut_true">
                            Active
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="statut" id="statut_false" value="0"
                            <?php echo $statut === '0' ? "checked" : '' ?>>
                        <label class="form-check-label" for="statut_false">
                            Résilié
                        </label>
                    </div>
                    <button class="btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>