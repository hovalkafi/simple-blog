<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once '../../lib/database.php';
    user_delete($id);
}
header('location:index.php');