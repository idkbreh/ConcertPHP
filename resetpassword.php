<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="./assets/image/favicon.ico">
<style>

</style>
<?php
    session_start();
    if (isset($_SESSION['student_id'])){
        $_SESSION['msg']="already login";
        header('location:/');}

    // include('./assets/components/head.php');
    ?>
<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">
<link href="./assets/css/login.css" rel="stylesheet" crossorigin="anonymous">
<body style=" font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<?php include('./assets/components/navbar.php');?>

<br><br>
<div class="container ">
<form class="w3-animate-bottom " method="post" action="">
<h2><b>ลืมรหัสผ่านใช่ไหม ?</b></h2>
            <p1><i class="bi bi-info-circle"></i> Error contact กรรมการนักเรียน</p1>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>กรอกเลขประจำตัวนักเรียน</b></label><b>
                    <input type="number" max="99999" class="form-control" id="student_id" placeholder="เลขประจำตัวนักเรียน 5 หลัก" required name="student_id">
                </div><div class="form-group">


   </br><button id="submit" type="submit"  class="btn btn-outline-danger  btn-block"><b>กดยืนยันการลืมรหัสผ่าน </b></button>
            </form>

</div>


</body>
</html>

<?php
    include_once('./database/database.php');
    include_once('./api/callback.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $std_id = mysqli_real_escape_string($db,htmlspecialchars($_POST['student_id']));
        $query = "SELECT * FROM resetpassword WHERE StudentId = '$std_id' ";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 0){
            $sql="INSERT INTO resetpassword (StudentId)VALUE('$std_id')";
            mysqli_query($db,$sql);
            sendLineNotify("รายการลืมรหัสผ่าน Email : ".$std_id."@tun.ac.th");
            echo "<script>const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              Toast.fire({
                icon: 'success',
                title: 'ทางคณะกรรมการได้รับคำขอของท่านเเล้ว โปรดรอรหัสผ่านใหม่ทางอีเมล'
              })</script>";
        }else{
            echo "<script>const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              Toast.fire({
                icon: 'error',
                title: 'หมายเลขนี้ได้รับการส่งคำขอเเล้ว โปรดรอรหัสผ่านใหม่ทางอีเมล'
              })</script>";
        }
    }
    include("./assets/components/footer.php");
?>
