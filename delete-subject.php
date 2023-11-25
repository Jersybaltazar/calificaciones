<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_GET['subjectid'])) {
        $subjectid = intval($_GET['subjectid']);
        try {
            $sql = "DELETE FROM tblsubjects WHERE id=:subjectid";
            $query = $dbh->prepare($sql);
            $query->bindParam(':subjectid', $subjectid, PDO::PARAM_STR);
            $query->execute();
            $msg = "Curso eliminado exitosamente";
        } catch (PDOException $e) {
            $error = "Hubo un error al intentar eliminar el curso";
        }
    }
}
?>
