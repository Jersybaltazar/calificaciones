<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_GET['stid'])) {
        $subjectid = intval($_GET['stid']);
        try {
            $sql = "DELETE FROM tblstudents WHERE id=:stid";
            $query = $dbh->prepare($sql);
            $query->bindParam(':stid', $subjectid, PDO::PARAM_STR);
            $query->execute();
            $msg = "Curso eliminado exitosamente";
        } catch (PDOException $e) {
            $error = "Hubo un error al intentar eliminar el curso";
        }
    }
}
?>
