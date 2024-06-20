<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="./assets/image/favicon.ico">
<?php
    session_start();
    include('./database/database.php');
    // $Authorized_check ="SELECT * FROM check_user WHERE student_id_check ='12345'";
    // $Authorized_check_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_check));
    // echo $Authorized_check_result['birthday_check']
    if (isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['student_id']);
      header('location:login');
  }
    ?>
<style>

body {

  min-height: 100vh;
  background-color: black;
  color: white;
}

.muzieknootjes {
  display: block;
  margin: auto;
  position: relative;
  width: 50%;
  min-width: 300px;
  height: 200px;
  border: 0px solid #000;
}

.noot-1,
.noot-2,
.noot-3,
.noot-4 {
  position: absolute;
  animation: notes 2s infinite linear;
  font-size: 35px;
  opacity: 0;
}

.noot-1 {
  top: 60px;
  left: 0;
  animation-delay: 0.5s;
}

.noot-2 {
  top: 30px;
  left: 30%;
  animation-delay: 1s;
}

.noot-3 {
  top: 90px;
  left: 60%;
  animation-delay: 1.5s;
}

.noot-4 {
  top: 40px;
  left: 90%;
  animation-delay: 2s;
}

@keyframes notes {
  0% {
    transform: scale(1) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
    transform: scale(1.5) translate(50%, -50%);
  }
  80% {
    opacity: 0;
    transform: scale(1.5) translate(100%, -100%);
  }
  100% {
    transform: scale(1.5) translate(100%, -100%);
    opacity: 0;
  }
}

.custom{
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-width:3px;
    border-style:solid;
    border-radius:20px;
    transition: .5s ease;
}

</style>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&family=Sarabun:wght@200&display=swap" rel="stylesheet">
<link href="./assets/css/boostrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<body style=" font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<div class="w3-animate-top"><?php include('./assets/components/navbar.php');?></div>

<main class="container">

<center>
  <div class="w3-animate-left py-3 p-md-5 mb-4 text-white rounded  bg-blue text-dark">
    <div class="col-md-6 px-0">
      <h style="  font-family: 'Press Start 2P', cursive;" class="display-5   text-dark "><b>TRIAMDOD7 CONCERT</b></h>
      <p class="display-15 my-3 text-dark"><b>สั่งซื้อที่นี่เเล้วชำระเงินออนไลน์ + </b><button id="myBtn" type="button"  class="display-5 mx-4 btn btn-sm btn-outline-light"> ข้อเเนะนำการใช้งาน <i class="bi bi-exclamation-triangle"></i></button></p>

    </div>
  </div>
  </center>
  <div class="row mb-2"style="font-family: 'Sarabun', sans-serif;" >
    <div class="col-md-6">
      <div class="w3-animate-bottom custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary tags ">SCHEDULE</strong>
          <h3 class="mb-0"style="font-family: 'Sarabun', sans-serif;" ><b>ตารางศิลปินในงาน</b></h3>
          <br>
            <p class="card-text mb-auto">เช็คตารางการเเสดงของงานเตรียมโดด</p>
            <?php if (isset($_SESSION['student_id'])){echo " <br><p class='btn btn-sm btn-outline-light  mb-0 text-c ' style=' font-family: 'Sarabun', sans-serif; font-size:2.4vh;'> ยังไม่สามารถดูได้ขณะนี้ </p></p>";}?>
            <?php if (isset($_SESSION['student_id'])){echo " <a href='schedule'class='stretched-link'></a>";}?>
            <?php if (!isset($_SESSION['student_id'])){echo " <p class=' mb-0 text-c ' style=' color:red; font-family: 'Sarabun', sans-serif; font-size:2.4vh;'>กรุณาเข้าสู่ระบบก่อนสั่งซื้อ</p></p>";}?>
            <?php if (!isset($_SESSION['student_id'])){echo " <a href='register'class='stretched-link'></a>";}?>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <div class="muzieknootjes">
<div class="noot-2">
  &#9833; 
</div>
<div class="noot-3">
  &#9839; &#9834;
</div>
<div class="noot-4">
  &#9834;
</div>
</div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="w3-animate-bottom custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary tags">TICKET</strong>
          <h3 class="mb-0"style="font-family: 'Sarabun', sans-serif;" ><b>สั่งจองบัตรออนไลน์</b></h3>
          <br>
            <p class="card-text mb-auto">สั่งของผ่านออนไลน์เเละชำระเงินที่หน้างาน</p>
            <?php if (isset($_SESSION['student_id'])){echo " <br><p class='btn btn-sm btn-outline-light mb-0 text-c ' style=' font-family: 'Sarabun', sans-serif; font-size:2.4vh;'> สั่งจองบัตร </p></p>";}?>
            <?php if (isset($_SESSION['student_id'])){echo " <a href='purchase' class='stretched-link'></a>";}?>
            <?php if (!isset($_SESSION['student_id'])){echo " <p class=' mb-0 text-c ' style=' color:red; font-family: 'Sarabun', sans-serif; font-size:2.4vh;'>กรุณาเข้าสู่ระบบก่อนสั่งซื้อ</p></p>";}?>
            <?php if (!isset($_SESSION['student_id'])){echo " <a href='register'class='stretched-link'></a>";}?>

        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <div class="muzieknootjes">
<div class="noot-2">
  &#9833;
</div>
<div class="noot-3">
  &#9839; &#9834;
</div>
<div class="noot-4">
  &#9834;
</div>
</div>
        </div>
      </div>
    </div>
    <div class="col-md-12 w3-animate-bottom">
      <div class=" custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger tags">ANNOUCEMENT +</strong>
          <h3 class="mb-0"style=" font-size:22px; font-family: 'Press Start 2P', cursive;"><b  style="font-family: 'Sarabun', sans-serif;">ศิลปินรับเชิญในงาน </b > TRIAMDOD 7  </h3>
          <br><h3 class="mb-0"style=" font-size:22px; font-family: 'Press Start 2P', cursive;"><b  style="font-family: 'Sarabun', sans-serif;"> </b> MEAN BAND <br>TRACK TONE <br>SAFEPLANET</h3>
            <a href='#'class='stretched-link'></a>
          
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="./assets/image/mean.png" alt="Italian Trulli" width="450" height="300">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

        </div>
      </div>
    </div>
  </div>



</main>
</body>
</html>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <h1>การสั่งซื้อบัตรเตรียมโดด</h1><br>
    ข้อกำหนดและเงื่อนไข

   <p> 1. ต้องเป็นนักเรียนโรงเรียนเตรียมอุดมศึกษาน้อมเกล้าเท่านั้น</p>
   <p>2. ข้อมูลทั้งหมดที่ผู้ใช้บริการส่งเข้าสู่ website triamdod.com หรือให้ไว้แก่ผู้จัดงานไม่ว่ารูปแบบหรือวิธีการใด ๆ ผู้ใช้บริการรับรองว่าเป็นข้อมูลที่เป็นความจริง ถูกต้อง สมบูรณ์ ผู้จัดงานมีสิทธิที่จะตรวจสอบความถูกต้องแท้จริงของข้อมูลดังกล่าว ทั้งนี้หากพบหรือมีเหตุอันควรเชื่อได้ว่าผู้ใช้บริการปลอมแปลง หรือใช้ข้อมูลและ/หรือเอกสารอันเป็นเท็จ หรือใช้ข้อมูลของบุคคลอื่นใด ไม่ว่าบุคคลนั้นจะยินยอมหรือไม่ ในการใช้บริการตามข้อตกลงนี้ ผู้จัดงานสงวนสิทธิ์ในการระงับ หรือยกเลิกการให้บริการได้ทันที โดยผู้ใช้บริการไม่มีสิทธิเรียกร้องค่าเสียหายใด ๆ กับผู้จัดงานทั้งสิ้น</p> 
   <p>3. ผู้ใช้บริการยินยอมให้ผู้จัดงานติดต่อสอบถามหรือเปิดเผยรายละเอียดหรือข้อมูลบางประการหรือทั้งหมด เกี่ยวกับผู้ใช้บริการได้ตามความจำเป็นและเหมาะสม ทั้งนี้ เป็นไปตามนโยบายความเป็นส่วนตัว และคำยินยอมของผู้ใช้บริการที่ให้ไว้กับผู้จัดงาน</p>
   <p>4.ถ้าหากชำระเงินแล้วไม่สามารถแลกเปลี่ยนหรือคืนเป็นเงิดสดได้</p>
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