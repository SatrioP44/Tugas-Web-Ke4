<?php
require_once 'config/database.php';
require_once 'app/controllers/userControllers.php';

//koneksi ke database
$dbConnection = getDBConnection();

$controller = new userController($dbConnection);

//mendapatkan parameter dari URL (misalnya index.php?id=1)
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Menentukan apa yang harus dilakukan berdasarkan aksi
if ($action === 'edit') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $controller->edit($id); // Memanggil metode edit di userController
}elseif($action === 'hapus'){
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $controller->delete($id);
}elseif($action === 'detail'){
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $controller->show($id);
} 
else {
    // Tampilkan semua pengguna
    $controller->index();
}
?>