<!doctype html>
<html lang="en">

<head>

  <?php include('../components/style.php'); ?>
</head>

<body>

  <?php include('../components/navbar.php'); ?>
  <div class="container">
    <!-- content here -->

    <div class="text-center">
      <h1 class="page-pre-title"> ปริญญาตรี </h1>
      <h1 class="page-title"> สาขาเทคโนโลยีสารสนเทศ </h1>
    </div>
    <!-- tab -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ภาพรวม</button>
    </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">เเผนการศึกษา</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">โครงสร้างข้อมูล</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">อาจารย์</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php include("overview.php"); ?></div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php include("plan.php"); ?></div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?php include("structure.php"); ?></div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"><?php include("teacher.php"); ?></div>
</div>




  </div>
  </div>

  <!-- end content here -->
  </div>
  <?php include('../components/footer.php'); ?>
  <?php include('../components/script.php'); ?>
</body>

</html>