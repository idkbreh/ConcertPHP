<!DOCTYPE html>
<html lang="en"><link rel="icon" type="image/x-icon" href="./assets/image/favicon.ico">
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
<h2><b> เข้าสู่ระบบ TRIAMDOD CONCERT</b></h2>
            <p1><i class="bi bi-info-circle"></i> Error contact กรรมการนักเรียน</p1>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>Student Id</b></label><b>
                    <input type="number" max="99999" class="form-control" id="student_id" placeholder="เลขประจำตัวนักเรียน 5 หลัก" required name="student_id">
                </div>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>Password</b> </label>
                    
                    <input type="password" class="form-control" id="Password" placeholder="รหัสผ่านผู้ใช้ " required name="Password">
                </div><div class="form-group">


   </br><button id="submit" type="submit"  class="btn btn-outline-danger"><b> เข้าสู่ระบบ</b></button> <a  href="index" class="btn btn-outline-primary"><b>หน้าหลัก</b></a>
            </form>
            <a  href="resetpassword" class="btn btn-outline-danger"><b>ลืมรหัสผ่าน <i class="bi bi-exclamation-triangle"></i></b></a>
</div>


</body>
</html>

<?php
    include('./database/database.php');

    if(isset($_POST['student_id'])){
        $Password = mysqli_real_escape_string($db, stripcslashes($_POST['Password']));
        $Student_id = mysqli_real_escape_string($db, stripcslashes($_POST['student_id']));
        $query = "SELECT * FROM user WHERE Student_id = '$Student_id' AND Password = '$Password' ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $Authorized_check ="SELECT * FROM user WHERE Student_id = '$Student_id'";
            $Authorized_check_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_check));
            $FullName = $Authorized_check_result['Full_name'];
            $_SESSION['student_id']= $Student_id;
            $_SESSION['name'] = $FullName;
            $_SESSION['success']= "Login success! ! ! ล็อคอินสำเร็จ Refresh this page to remove this message";
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
                title: 'Login Success !'
              })</script>";
            echo '<meta http-equiv="refresh" content="3;url=/" />';
        }
        else{
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
                title: 'Authorize Error'
              })</script>";
        }
    }
    include("./assets/components/footer.php")
?>

<!-- <script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#Password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi bi-eye-slash');
});
</script> -->

<!-- <div class="area text-c" >

        <div class="index_from">
        <div class="container"><br><br><br>
        
            <h2><b> เข้าสู่ระบบ TRIAMDOD CONCERT</b></h2>
            <p1> Error contact กรรมการนักเรียน</p1>
            <form  method="post" action="">
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>STUDENT - ID</b></label><b>
                    <input type="number" max="99999" class="form-control" id="uSername" placeholder="เลขประจำตัวนักเรียน 5 หลัก" required name="uSername">
                </div>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>PASSWORD</b> </label>
                    
                    <input type="password" class="form-control" id="Password" placeholder="รหัสผ่านผู้ใช้ " required name="Password">
                </div><div class="form-group">


   </br><button id="submit" type="submit"  class="btn btn-outline-danger"><b> เข้าสู่ระบบ</b></button> <a  href="index.php" class="btn btn-outline-primary"><b>หน้าหลัก</b></a>
            </form><br><br>

        </div>
        </div> -->