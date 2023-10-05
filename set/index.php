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
            <div>
                <div class="row mb-12">
                    <div class="col-lg-12">
                        <h3>ปริญญาตรี</h3>

                        <p>
                            <fs-6>หลักสูตร วิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม</fs> <br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ภาพรวม</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">แผนการเรียน</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">โครงสร้างหลักสูตร</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">อาจารย์</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php include('overview.php'); ?></div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php include('plan.php'); ?></div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?php include('structure.php'); ?></div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"><?php include('teacher.php'); ?></div>
        </div>




        <!-- end content here -->
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>