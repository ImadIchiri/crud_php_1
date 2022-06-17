<?php
include("db.php");

$statut = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM task WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $statut = $row['statut'] ?: 5;
    }

    echo $statut . "<Br />";
    echo ($statut === '1') ? "checked" : '';
}
?>

<style>
input {
    width: 80%;
    margin: 12px auto;
    border: 6px solid blue;
    border-radius: 32px;
    padding: 16px 42px;
    display: block;
    outline: none;
    font-size: 2rem;
}
</style>