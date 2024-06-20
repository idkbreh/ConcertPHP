<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    // include('./assets/components/head.php');
    ?>
<style>
.custom{
    border-width:1px;
    border-style:solid;
    border-radius:20px;
    transition: .5s ease;
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
    transition: all 0.6s ease;
}
.custom:hover{
  box-shadow: rgba(255, 172, 28, 0.199) -10px 10px, rgba(255, 172, 28, 0.19) -20px 20px ;
    -webkit-transform: translateX(-3px);
transform: translateX(-2px);
transition: .5s ease;
}
</style>
<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<body style=" font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<div class="w3-animate-top"><?php include('./assets/components/navbar.php');?></div>

<!-- <main class="container">
  <div class="w3-animate-left p-4 p-md-5 mb-4 text-white rounded  bg-blue">
    <div class="col-md-6 px-0">
      <h1 style="font-family: 'Press Start 2P', cursive;" class="display-5 text-dark"><b>TRIAMDOD SCHEDULE +</b></h1>
      <p class="display-15 my-3 text-dark"><button id="myBtn" type="button"  class="display-5 mx-4 btn btn-sm btn-outline-light"> ข้อเเนะนำการใช้งาน <i class="bi bi-exclamation-triangle"></i></button></p>
      <p class="lead mb-0 text-dark"><a href="#" class=" fw-bold text-c"></a></p>
    </div>
  </div>

  <div class="row mb-2"style="font-family: 'Sarabun', sans-serif;" >
    <div class="col-md-12 w3-animate-right">
      <div class=" custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary tags">TRACKTONE 12:00</strong>
          <h3 class="mb-0"style="font-family: 'Sarabun', sans-serif;" ><b>ตารางศิลปินใน TRIAMDOD 7</b></h3>
            <p class="card-text mb-auto">เวลา : <b>12:00 - 14:00</b><br><br>พบกับ Tracktones ! เวลา 12:00 น.</p>
            <p class=' mb-0 text-c ' style=" font-family: 'Sarabun', sans-serif; font-size:2.4vh;"> </p></p>
            <a href='#'class='stretched-link'></a>
          
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="./assets/image/tracktone.png" alt="Italian Trulli" width="400" height="300">
 
        </div>
      </div>
    </div>


    <div class="col-md-12 w3-animate-left">
      <div class=" custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary tags">TRACKTONE 12:00</strong>
          <h3 class="mb-0"style="font-family: 'Sarabun', sans-serif;" ><b>ตารางศิลปินใน TRIAMDOD 7</b></h3>
            <p class="card-text mb-auto">เวลา : <b>12:00 - 14:00</b><br><br>พบกับ Tracktones ! เวลา 12:00 น.</p>
            <p class=' mb-0 text-c ' style=' font-family: 'Sarabun', sans-serif; font-size:2.4vh;'> </p></p>
            <a href='#'class='stretched-link'></a>
          
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="./assets/image/tracktone.png" alt="Italian Trulli" width="400" height="300">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

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