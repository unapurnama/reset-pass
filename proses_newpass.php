<?php

include "koneksi.php";


$email      = $_POST['username'];
$password   = $_POST['password'];


if ($password != $konfirmasi) :
    header('location:newpass.php?username='.$email.'&error=pass');
else :
    $cek =  mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users 
                                                    WHERE username='$email'"));
if ($cek > 0){
    $pass = md5($_POST['password']);
    $insert= mysqli_query($koneksi, "UPDATE tbl_users SET password='$password' WHERE username='$email'");

    echo'Ubah password berhasil';

}else {
    
    header('location:newpass.php?username='.$email);
}
        
endif;


// una2024


 
 
 
//  <?php

//   include "koneksi.php";
//    if(isset($_POST['Reset_Sekarang']))

// $nama       = $_POST['nama'];
// $email      = $_POST['username'];
// $nomor      = $_POST['nomor'];
// $password   = $_POST['password'];
// $konfirmasi = $_POST['konfirmasi'];

//   mysqli_query($koneksi, "UPDATE tbl_users SET nama ='$nama', username='$email', nomor ='$nomor', password ='$password', konfirmasi='$konfirmasi'
//   WHERE email='$username'") or die (mysqli_error($koneksi));
//   if ($cek > 0) {
//       header('location:index.php?error=0');
//   } else {
//       header('location:nespass.php?error=0');
//   }
  

// <?php

// include "koneksi.php";

// $nama       = $_POST['nama'];
// $email      = $_POST['username'];
// $nomor      = $_POST['nomor'];
// $password   = $_POST['password'];
// $konfirmasi = $_POST['konfirmasi'];

// $sql ="UPDATE tbl_users SET password = '$password' WHERE email='$username'";

// $simpan =mysqli_query($koneksi,$sql);
// if ($simpan) {
//     $status = 1;
// } else {
//     $status = 0;
// }

// header('location:index.php?status=' .$status);
