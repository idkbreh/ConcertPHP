<?php
    function Ipaddress(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
          echo $_SERVER['HTTP_CLIENT_IP'];
      }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          echo $_SERVER['HTTP_X_FORWARDED_FOR'];
      } 
      else{
          echo $_SERVER['REMOTE_ADDR'];
      }
      }
  include("./database/database.php");
  $errors = array();
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $password_for_auth = mysqli_real_escape_string($db,htmlspecialchars($_POST['Password']));
    $query = "SELECT * FROM user WHERE Student_id = '$student_id' AND Password = '$password_for_auth' ";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $sql="INSERT INTO queue (Name,Student_id,Status)VALUE('$student_name','$student_id','Waiting')";
        mysqli_query($db,$sql);
        echo "<script>const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          Toast.fire({
            icon: 'success',
            title: 'Booking ticket success'
          })</script>";
          echo '<meta http-equiv="refresh" content="3;url=/purchase" />';
  }else{
    echo "<script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      Toast.fire({
        icon: 'error',
        title: 'This Account already exist'
      })</script>";
  }}

?>