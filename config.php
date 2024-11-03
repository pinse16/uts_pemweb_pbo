<?php


$koneksi = mysqli_connect("localhost","root","","db_sekolah");


// if (mysqli_connect_errno()) {
//    echo "Gagal koneksi ke database";
// } else {
//    echo "berhasil koneksi";
// }


$main_url = "http://localhost/sekolah/";

function uploadimg($url){
    $namafile = $_FILES['image']['name'];
    $ukuran   = $_FILES['image']['size'];
    $error    = $_FILES['image']['error'];
    $tmp      = $_FILES['image']['tmp_name'];


    //cek file
    $validExtension =['jpg' , 'jpeg', 'png'];
    $fileExtension  = explode('.', $namafile);
    $fileExtension  = strtolower(end($fileExtension));
    if (!in_array($fileExtension, $validExtension)) {
        header("location:" . $url . '?msg=notimage');
        die;
    }

 //cek size
 if ($ukuran > 1000000) {
    header("location:" . $url . '?msg=oversize');
    die;
 }

 //generate nama file gambar
 $namafilebaru = rand(10, 1000) . '-' . $namafile;

 // upload gmbr
 move_uploaded_file($tmp, "../asset/image/" . $namafilebaru);
 return $namafilebaru;

}

?>