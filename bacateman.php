<?php
    // deklarasi alamat server
    $server = "localhost";

    //deklarasi username
    $user = "root";

    //deklarasi nama database
    $namadb = "tiumy";

    //deklarasi password
    $password = "";


    //membuat koneksii kedalam database 
    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("koneksi gagal");


    //query manampilkan data
    $result = mysqli_query($conn, "select * from teman");


    //mambuuat variabel json yg berjenis data array
    $json = array();

    //membaca isi data dari database
    while ($row = mysqli_fetch_assoc($result))(
        $json[] = $row;
    )

    echo json_encode($json);
    mysqli_close($conn);

?>