<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&family=Sarabun:wght@200&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
<style>
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
.white{
    color:white;
}
</style>

<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<!-- font-family: 'Sarabun', sans-serif; -->
<body style=" font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<div class="w3-animate-top"><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triamdod 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
        <link href="./assets/css/boostrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="../font/DtVmJx26TKEr37c9YL5rik8s6zDX.woff2" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="./assets/image/favicon.ico">
        <meta name="description" content="Buy a triamdod7 ticket at traimdod.com | onsite service only">
        <meta name="keywords" content="triamdod, concert, triamdod concert,">
        <meta name="author" content="SIMP#2712"> <!-- Controls search engine crawling behavior -->
        <!-- Open Graph meta tags for social sharing -->
        <meta property="og:title" content="Triamdod 7 Concert !">
        <meta property="og:description" content="Buy a triamdod7 ticket at traimdod.com | onsite service only">
        <meta property="og:type" content="website">
        <!-- Twitter Card meta tags for Twitter sharing -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Triamdod 7 Concert !">
        <meta name="twitter:description" content="Buy a triamdod7 ticket at traimdod.com | onsite service only">

<style>
    /* .dropdown-menu{
    color:whtie
    background-color: rgb(170, 112, 172);


  } */

  /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  color:white;
  font-family: 'Sarabun', sans-serif;
  background-color: #00000085;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.test1{
    border-style: solid;
    border: 10px;
    border-radius: 20px;
}
.pink{
    border-radius: 10px;
    background: linear-gradient(-45deg, rgb(241, 128, 126),);
    animation: gradient 2s ease infinite;
    font-family: 'Sarabun';
    border-style: inset;

}
.w3-animate-top{position:relative;animation:animatetop 1s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
.w3-animate-left{position:relative;animation:animateleft 2s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.w3-animate-right{position:relative;animation:animateright 2s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
.w3-animate-bottom{position:relative;animation:animatebottom 1.3s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
.w3-animate-bottom3{position:relative;animation:animatebottom 2s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
/* .w3-animate-left,.w3-animate-bottom{
  animation-duration: 1.6s;
} */

.color-c{
    color: white;
}
.reveal{
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition: 1s all ease;
    }

    .reveal.active{
    transform: translateY(0);
    opacity: 1;
    }
body{
    font-family: 'Sarabun';
}
.btn-outline-danger{
    border-color: purple;
    color:purple;
    border-radius: 7px;
}
.btn-outline-danger:hover{
    border-color: purple;
    color:white;
    background-color: purple;
}
.btn-outline-primary{
    border-color:#1c3275
    color:#1c3275;
    border-radius: 7px;
}
.btn-outline-primary:hover{
    border-color:#1c3275
    color:white;
    background-color: #1c3275;
}
.btn-outline-light{
  border-color:rgb(238, 84, 243);
  color:rgb(238, 84, 243);
  border-radius: 7px;
}
.btn-outline-light:hover{
  border-color:rgb(238, 84, 243);
  color:white;
  background-color: rgb(238, 84, 243);
  border-radius: 7px;
}
</style>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<nav class="navbar navbar-expand-lg navbar-light  py-3 reveal-active">

  <div class="container-fluid">
    <a class="navbar-brand color-c" href="#"><b><img src="./assets/image/favicon.ico" alt="triamdod icon" width="210" height="160"></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index"><i class="bi bi-house"></i> <b>หน้าหลัก</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="schedule"><i class="bi bi-newspaper"></i> <b>กำหนดการ</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>สั่งซื้อบัตรเตรียมโดด</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <li><a class='dropdown-item' href='purchase'><i class='bi bi-person-circle'></i> คุณ MR. PATCHARAPOL   RUNGSEESAKORN</a></li>             <li><a class='dropdown-item' href='purchase'><i class='bi bi-credit-card-2-back-fill'></i> สั่งซื้อบัตร</a></li>                                    <li><a class="dropdown-item" href="https://instagram.com/patch.pdf"><i class="bi bi-newspaper"></i> ติดต่อ</a></li>
             <li><a class='dropdown-item' href='index?logout='1''><i class='bi bi-box-arrow-in-right'></i> ออกจากระบบ</a></li>          </ul>
        </li>
      </ul>
    </div>
  </div>

</nav>

<script>
            function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
        </script></div>

<main class="container">
  <div class="w3-animate-left p-4 p-md-5 mb-4 text-dark rounded  bg-blue">
    <div class="col-md-7 px-0">
      <h2 style="font-family: 'Press Start 2P', cursive;" class="display-5 text-dark"><b>TICKET PURCHASE</b></h2>
      <p class="display-15 my-3 text-dark"><b>ชำระเงินคอนเสิร์ตเตรียมโดด 7 +</b>

    </div>
  </div>
  <div class="row mb-2"style="font-family: 'Sarabun', sans-serif;" >
    <div class="col-md-12  w3-animate-right">
      <div class=" custom row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col  p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary tags">BOOK TICKET SECTION</strong>
          <h3 class="mb-0"style="font-family: 'Sarabun', sans-serif;" ><b>บัตรคอนเสิร์ต TRIAMDOD7</b></h3>
            <p class="card-text mb-auto py-1"><br>คุณ <b>MR. PATCHARAPOL   RUNGSEESAKORN</b> รหัสนักเรียน <b>24501</b></p>
            <p class="card-text mb-auto py-1">สถานะ : <b>Active<input  value="ชำระเงินสำเร็จ" type="button" disabled class="display-5 mx-4 btn btn-sm btn-outline-primary"></input></b> </p>
              <p class=' mb-0 text-c ' style=" font-family: 'Sarabun', sans-serif; font-size:2.4vh;"> </p></p>


        </div>
        <div class="col-auto d-none d-lg-block">
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
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <link href="./assets/css/ticket.css" rel="stylesheet">
        </div>
      </div><!-- ticket png laaalaal--> 
      <!-- <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" id="ticketCard">
                    <div class="card-header text-center">
                        <b><h3>TRIAMDOD E-TICKET</h3></b>
                    </div>
                    <div class="card-body">

                            <p><strong>Name:</strong> </p>
                            <p><strong>Student ID:</strong> </p>
                            <p><strong>Event:</strong> TRIAMDOD 7 Music Festival</p>
                            <b><p><strong>Location:</strong> Triamudomsuksanomklao</p>
                            <p><strong>Status:</strong>  </p>

                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-save mt-3" id="saveButton">Save as PNG</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </div>
    <script src="./assets/js/save.js"></script>
    
  </div>

</main>
</body>
</html>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <h1>การสั่งซื้อบัตรเตรียมโดด</h1><br>
    <p>เมื่อทำการกดจองบัตรเรียบร้อยเเล้วให้ทำการไปชำระเงินที่หน้างาน</p>
    <p>โชว์หน้านี้หรือเเจ้งเเเลขประจำตัวที่หน้างานได้เลย</p>
    <p>เตรียมเงินไปตามจำนวนที่ซุ้มได้กำหนดไว้</p>
    <p>หากเจ้าหน้าที่ยืนยันบัตรให้เรียบร้อยเเล้วกรุณา Refresh หน้านี้จนกว่าสถานะจะขึ้นว่า Active</p>
    <p><b>หากสถานะไม่เปลี่ยนเป็น Active ให้เเจ้งเจ้าหน้าที่โดยเร็วที่สุด</b></p>
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
