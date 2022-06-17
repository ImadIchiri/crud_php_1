<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
    <div class="row">
        <!-- Toogle Icon -->
        <i class="fas fa-angle-up toggle-form" id="toggle-form"></i>
        <div class="col-12 insert-form" id="insert-form" data-state="opened">

            <!-- MESSAGES -->
            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php session_unset();
            } ?>



            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action=" save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="fullName" class="form-control" placeholder="Nom & Prenom" autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="matricule" class="form-control" placeholder="Matricule" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="departement" class="form-control" placeholder="Departement" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="poste" class="form-control" placeholder="Poste" required>
                    </div>
                    <div class="form-group">
                        <input type="datetime-local" name="dateEmbauche" class="form-control"
                            placeholder="Date Embauche" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statut" id="statut_true" value="1" checked>
                        <label class="form-check-label" for="statut_true">
                            Active
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="statut" id="statut_false" value="0">
                        <label class="form-check-label" for="statut_false">
                            Résilié
                        </label>
                    </div>
                    <div class="btns">
                        <input type="reset" name="reset_task" class="btn bg-danger submit-btn" value="Réinitialiser">
                        <input type="submit" name="save_task" class="btn  submit-btn" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 table-responsive">
            <?php
            $query = "SELECT * FROM task";
            $result_tasks = mysqli_query($conn, $query);
            $employer_nbr = $result_tasks->num_rows;

            if ($employer_nbr > 0) { ?>

            <h3 class='employer-nbr'>Nombre d'Employer: <?php echo $employer_nbr; ?></h3>

            <?php } else { ?>
            <h3 class='employer-nbr'>Il Faut Inserer Des Employers</h3>
            <?php } ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom & Prenom</th>
                        <th>Matricule</th>
                        <th>Departement</th>
                        <th>Poste</th>
                        <th>Date Embauche</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['matricule']; ?></td>
                        <td><?php echo $row['departement']; ?></td>
                        <td><?php echo $row['poste']; ?></td>
                        <td><?php echo $row['dateEmbauche']; ?></td>
                        <td class="text-center">
                            <span class="p-1 text-white bg-<?php echo $row['statut'] ? "success" : "danger"; ?>">
                                <?php echo $row['statut'] ? "Active" : "Résilié"; ?>
                            </span>
                        </td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id'] ?>"
                                class="btn btn-secondary bg-warning text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>