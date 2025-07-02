<?php
    include_once("connection.php");

    if ($_POST) {
        $img_upload = $_FILES['upload_image'];
        if ($img_upload['name'] != "") {
            $nama_product = $_POST['nama_produk'];
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $foto = $img_upload['name'];

            $result = mysqli_query($conn, "INSERT INTO add_product(nama_product, kategori, harga, foto) VALUES(
            '$nama_product', '$kategori', '$harga', '$foto')");

            move_uploaded_file($img_upload['tmp_name'], __DIR__ . "/../uploads/" . $foto);
            
            if (!$result) {
                die("Kueri Eror : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            }else{
                echo "<script>alert('Data produk berhasil ditambahkan');window.location='products_screen.php';</script>" ;
            }
            // header("Location: products_screen.php");
        }
    }

?>