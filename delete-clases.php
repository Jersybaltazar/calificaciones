<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_GET['classid'])) {
        $subjectid = intval($_GET['classid']);
        try {
            $sql = "DELETE FROM tblclasses WHERE id=:classid";
            $query = $dbh->prepare($sql);
            $query->bindParam(':classid', $subjectid, PDO::PARAM_STR);
            $query->execute();
            $msg = "Curso eliminado exitosamente";
        } catch (PDOException $e) {
            $error = "Hubo un error al intentar eliminar el curso";
        }
    }
}
?>