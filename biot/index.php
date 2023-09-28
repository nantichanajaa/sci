<!doctype html>
<html lang="en">

<head>

    <?php include('../components/style.php'); ?>
</head>

<body>

    <?php include('../components/navbar.php'); ?>
    <div class="container">
        <!-- content here -->
        <div class="pricing-header px-3 py-3 pt-md-5 mx-auto text-center">
            <h1 class="display-8">ปริญญาตรี</h1>
            <h1 class="display-4">สาขานวัตกรรมชีวผลิตภัณฑ์</h1>
        </div>
        <!-- Nav -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="ภาพรวม-tab-pane" aria-selected="true">ภาพรวม</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="โครงสร้าง-tab-pane" aria-selected="false">โครงสร้าง</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="แผนการเรียน-tab-pane" aria-selected="false">แผนการเรียน</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="อาจารย์-tab" data-bs-toggle="tab" data-bs-target="#อาจารย์-tab-pane" type="button" role="tab" aria-controls="อาจารย์-tab-pane" aria-selected="false">อาจารย์</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"> <?php include('overview.php');?></div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php include('structure.php');?></div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?php include('plan.php');?></div>
            <div class="tab-pane fade" id="อาจารย์-tab-pane" role="tabpanel" aria-labelledby="อาจารย์-tab" tabindex="0"><?php include('teacher.php');?></div>
        </div>



        <!-- end content here -->
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>