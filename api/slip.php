
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
    function ErrorAlert($word) {
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
        title: '$word'
      })</script>";
    };
    function SuccessAlert($word) {
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
        title: '$word'
      })</script>";
    };

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
      include('../database/database.php');
      $student_id = $_SESSION['student_id'];
      $Authorized_user ="SELECT * FROM user WHERE Student_id ='$student_id'";
      $Authorized_user_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_user));
      $student_id = $Authorized_user_result['Student_id'];
      $student_name = $Authorized_user_result['Full_name'];
      $file = $_FILES['photo'];
      $allowedExtensions = array("jpeg", "jpg", "png");
      $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
      if (in_array($fileExtension, $allowedExtensions)) {
          $api_url = 'https://api.slipok.com/api/line/apikey/11500';
          $headers = [
              'x-authorization: SLIPOKXKU7603',
              'Access-Control-Allow-Origin: *',
          ];
          $body = [
              'files' => new CURLFile($file['tmp_name']),
              'log' => true,
              'amount' => 99
          ];
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL, $api_url);
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          $response = curl_exec($curl);

          if ($response !== false) {
              $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
              $responseData = json_decode($response, true);
              if ( $httpCode === 200 ) {
                  echo '<script>alert("ชำระเงินสำเร็จ !");</script>';
                  $sql = "UPDATE queue SET Status = 'Active' WHERE  Student_id= '$student_id'";
                  mysqli_query($db,$sql);
                  $sql2 = "INSERT INTO register_ticket (Status, Name, Student_id) VALUES ('Active', '$student_name', '$student_id')";
                  mysqli_query($db,$sql2);
                //   echo '<meta http-equiv="refresh" content="0;url=/purchase" />';
              } else {
                echo '<script>alert("สลีปไม่ถูกต้อง  !");</script>';
                echo '<meta http-equiv="refresh" content="0;url=/purchase" />';
              }
          } else {
              echo '<script>alert("API request failed.");</script>';
              echo '<meta http-equiv="refresh" content="0;url=/purchase" />';
          }
          curl_close($curl);
      } else {
        echo '<script>alert("ประเภทไฟล์ผิดต้องเป็น .jpg .jpeg .png เท่านั้น");</script>';
        echo '<meta http-equiv="refresh" content="0;url=/purchase" />';
      }
  } else {
      echo '<script>alert("ประเภทไฟล์ผิดต้องเป็น .jpg .jpeg .png เท่านั้น");</script>';
      echo '<meta http-equiv="refresh" content="0;url=/purchase" />';
  }}
?>