<!DOCTYPE html>
<html lang="en">
<style>

</style>
<?php
    session_start();
    if (isset($_SESSION['student'])){
      $_SESSION['msg']="You must log in first";
      header('location:/');}

?>
<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">
<link href="./assets/css/login.css" rel="stylesheet" crossorigin="anonymous">
<body style="font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<?php include('./assets/components/navbar.php');?>

<br><br>
<div class="container ">
    
<form class="w3-animate-bottom " method="post" action="">
<h2><b> สมัครสมาชิก TRIAMDOD CONCERT</b></h2>
            <p1><i class="bi bi-info-circle"></i> Error contact กรรมการนักเรียน</p1>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>Student Id</b></label><b>
                    <input type="number" max="99999" class="form-control" id="std_id" placeholder="เลขประจำตัวนักเรียน 5 หลัก" required name="std_id">
                </div>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>Password</b> </label>
                    <input type="password" class="form-control" id="password_1" placeholder="ตั้งรหัสผ่านผู้ใช้" required name="password_1">
                </div><div class="form-group">
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>RE-Password</b> </label>
                    
                    <input type="password" class="form-control" id="password_2" placeholder="ยืนยันรหัสอีกครั้ง " required name="password_2">
                    
                </div>
                <div class="form-group"></br>
                    <label for="passwordlogin"><b>Birthday</b> </label>
                    <br><input type="date" id="birthday" name="birthday">
                    
                </div><div class="form-group"><div class="form-group">
                <script src="./assets/js/ModalFunction.js"></script>
   </br><input type = "submit" value="สมัครสมาชิก"  class="btn btn-outline-light"></input> <button id="myBtn" type="button"  class="display-5 mx-2 btn btn-sm btn-outline-light"> ข้อตกลงก่อนใช้งาน <i class="bi bi-exclamation-triangle"></i></button>
    </form>
</div>


</body>
</html>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close"></span>
    <h1>การสั่งซื้อบัตรเตรียมโดด</h1><br>
    <p>หากท่านยังไม่มีบัญชีกรุณาลงทะเบียนเพื่อสั่งจอง</p>
    <p>การสั่งจองในเว็บเป็นเพียงเเค่จองเพื่อให้ไม่ต้องไปกรอกข้อมูลหน้างาน หากเกิดปัญหาใดๆกรุณาติดต่อคณะกรรมการนักเรียนโดยเร็วที่สุด</p>
    <p>เมื่อทำการจองบัตรผ่านเว็บเเล้ว ต้องนำเงินไปชำระหน้างาน</p>
    <p>เพื่อความมั่นใจ ทางเราเเนะนำให้เเคปภาพบัตรหลังถูกยืนยันโดยเจ้าหน้าที่</p>
    <center>กดพื้นที่ข้างนอกสี่เหลี่ยมเพื่อออกหน้านี้</center>
  </div>

</div>

<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script src="./assets/js/sweetalert.min.js"></script>
<?php
    include("./assets/components/footer.php");
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


<?php
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
    }


include("./database/database.php");
$errors = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $student_id = mysqli_real_escape_string($db,htmlspecialchars($_POST['std_id']));
        $password_1 = mysqli_real_escape_string($db,htmlspecialchars($_POST['password_1']));
        $password_2= mysqli_real_escape_string($db,htmlspecialchars($_POST['password_2']));
        $inputDate = mysqli_real_escape_string($db, $_POST["birthday"]);
        $timestamp = strtotime($inputDate);
        $birthday = date("j/n/Y", $timestamp);
       // echo $birthday;
        if (empty($username)){
            array_push($errors,"ใส่ชื่อuserด้วยนะครับ");
            ErrorAlert("Student Id is Empty !");
        }
        if (empty($password_1)){
            array_push($errors,"Password is required");
            ErrorAlert("Password is required");
        }
        if ($password_1 != $password_2){
            ErrorAlert("Password not matching !");
            array_push($errors,"Confirm password wrong");
            
        }
        
        $Authorized_check ="SELECT * FROM check2 WHERE stdcode ='$student_id'";
        $Authorized_check_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_check));
        $Authorized_user ="SELECT * FROM user WHERE Student_id ='$student_id'";
        $Authorized_user_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_user));
        if (!$Authorized_check_result) {
           ErrorAlert("ไม่พบข้อมูลในระบบ โปรดติดต่อผู้ดูแล!");
           die("");
      }
        if($Authorized_user_result){
            if($Authorized_user_result['Student_id'] === $student_id){
              ErrorAlert("This user already register !");
              array_push($errors,"This user already register !");
              
            }
        } // Authorized student Id
        if($Authorized_check_result){
          echo $Authorized_check_result['bridate'];
          if (trim($Authorized_check_result['bridate']) !== $birthday) {
            ErrorAlert("Authorized Error ! Birthday Fail");
            array_push($errors, "Authorized Error !");
          }
      }
      if(count($errors) == 0){
        $Push_Full_Name ="SELECT * FROM check2 WHERE stcode ='$student_id'";
        $Push_Full_Name_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_check));
        $FullName = $Push_Full_Name_result['engl_name'];  // เปลี่ยนถ้าค่าชื่อเปลี่ยน
        $roles_name = '0';
        $sql="INSERT INTO user (Full_name,Student_id,Roles,Email,Password,Status)VALUE('$FullName','$student_id','$roles_name','-','$password_1','0')";
        mysqli_query($db,$sql);
        $_SESSION['student_id']= $student_id;
        $_SESSION['name'] = $FullName;
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
          title: 'Register success !'
        })</script>";
        echo '<meta http-equiv="refresh" content="3;url=/" />';
        }}

    

?>
