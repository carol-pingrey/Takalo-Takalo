<?php
function e($v){ return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }
function cls_invalid($errors, $field){ return ($errors[$field] ?? '') !== '' ? 'is-invalid' : ''; }
$pageTitle = "Login utilisateur";
require_once("header.php");
$user = $_SESSION['user'];
//var_dump($_SESSION['user']);
?>

<p>Salut <?= $user['prenom'] ?></p>

<?php require_once("footer.php"); ?>