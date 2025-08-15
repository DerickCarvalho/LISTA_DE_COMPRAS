<?php
if (isset($_GET['page'])) {
    $page = str_replace('/', '', $_GET['page']);
} else {
    $page = 'store';
}
?>

<?php include 'components/header.php'; ?>