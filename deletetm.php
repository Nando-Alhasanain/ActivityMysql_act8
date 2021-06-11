<?php 

    $server = "localhost";
    $user = "root";
    $namadb = "tiumy";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("koneksi gagal");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
     
    class emp{}
        $query  = mysqli_query($conn, "DELETE from teman WHERE id = '".$id."'");

        if ($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "data berhasil dihapus";
            die(json_encode($response));
        }
        else {
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menghapus data";
            die(json($response));
        }
?>