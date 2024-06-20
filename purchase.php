<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="./assets/image/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&family=Sarabun:wght@200&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
<?php
    session_start();
    // include('./assets/components/head.php');
    if (!isset($_SESSION['student_id'])){
        $_SESSION['msg']="Authorized error";
        header('location:/login');}

    ?>
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
<?php
            include_once('./database/database.php');
            $student_id = $_SESSION['student_id'];
            $Authorized_user ="SELECT * FROM user WHERE Student_id ='$student_id'";
            $Authorized_user_result = mysqli_fetch_assoc(mysqli_query($db,$Authorized_user));

?>
<link href="./assets/css/main.css" rel="stylesheet" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<!-- font-family: 'Sarabun', sans-serif; -->
<body style=" font-family: 'Sarabun'; color:black;"class="px-3 py-3">
<div class="w3-animate-top"><?php include('./assets/components/navbar.php');?></div>

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
            <p class="card-text mb-auto py-1"><br>คุณ <b><?php echo $Authorized_user_result['Full_name']?></b> รหัสนักเรียน <b><?php echo $Authorized_user_result['Student_id']?></b></p>
            <p class="card-text mb-auto py-1">สถานะ : <b><?php
            include_once('./database/database.php');
            $student_id = $Authorized_user_result['Student_id'];
            $student_name = $Authorized_user_result['Full_name'];
            $query2 = "SELECT * FROM queue WHERE Student_id = '$student_id' ";
            $result2 = mysqli_query($db, $query2);
            $Authorized_user_result = mysqli_fetch_assoc(mysqli_query($db,$query2));
                if (mysqli_num_rows($result2) == 1) {
                    echo $Authorized_user_result['Status'];
                    if($Authorized_user_result['Status']=== "Waiting"){
                      echo '<div class="container ">
                      <form action="./api/slip.php" method="post" enctype="multipart/form-data"><br>
                      <input required type="file" name="photo" accept=".jpeg, .jpg, .png"><br><br>
                      <input   value="กดชำระเงินที่นี่" type="submit"  class="display-5  btn btn-sm btn-outline-light"  value="Submit">  <button id="myBtn" type="button"  class="display-5 mx-4 btn btn-sm btn-outline-light"> ข้อตกลงก่อนสั่งจอง <i class="bi bi-exclamation-triangle"></i></button></p>
                      </form></div>';
                    }if($Authorized_user_result['Status']=== "Active"){
                      echo '<input  value="ชำระเงินสำเร็จ" type="button" disabled class="display-5 mx-4 btn btn-sm btn-outline-primary"></input>';
                    }
                }else{
                    echo "ยังไม่สั่งจอง";
                }
            ?></b> </p>
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
    <?php if (mysqli_num_rows($result2) == 0) {
      echo '    <div class="container mt-5  w3-animate-left" style="margin-bottom:200px;">
      <form  class="" method="post" action="">
      <h2><b> ยืนยันการสั่งจอง</b></h2>
                  <p1><i class="bi bi-info-circle"></i> ข้อมูลไม่ถูกต้องติดต่อคณะกรรมการทุกกรณี!</p1>
                      <div class="form-group"></br>
                          <label for="passwordlogin"><b>ยืนยันรหัสเพื่อการสั่งจอง</b> </label>
                          <br>
                          <input type="password" class="form-control" id="Password" placeholder="รหัสผ่านผู้ใช้ " required name="Password">
                      </div><div class="form-group">
         </br><button id="submit" type="submit"  class="btn btn-outline-danger"><b> สั่งจอง | Book a Ticket</b></button> <a  href="index" class="btn btn-outline-primary"><b>หน้าหลัก</b></a>
                  </form>
      </div>';
      include('./api/purchase_api.php');
    }
    
    ?>

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




