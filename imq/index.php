<!doctype html>
<html lang="en">

<head>

    <?php include('../components/style.php'); ?>
</head>

<body>

    <?php include('../components/navbar.php'); ?>
    <div class="container">
        <!-- content here -->
        <section class="pt-4 pt-md-0 ">
            <h1> สาขาวิชามาตรวิทยาอุตสาหกรรมและระบบคุณภาพ </h1>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">ภาพรวม</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure-tab-pane" type="button" role="tab" aria-controls="structure-tab-pane" aria-selected="false">โครงสร้าง</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plan-tab" data-bs-toggle="tab" data-bs-target="#plan-tab-pane" type="button" role="tab" aria-controls="plan-tab-pane" aria-selected="false">แผนการเรียน</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher-tab-pane" type="button" role="tab" aria-controls="teacher-tab-pane" aria-selected="false">อาจารย์</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php include("overview.php"); ?></div>
                <div class="tab-pane fade" id="structure-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php include("structure.php"); ?></div>
                <div class="tab-pane fade" id="plan-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?php include("plan.php"); ?></div>
                <div class="tab-pane fade" id="teacher-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"><?php include("teacher.php"); ?></div>
            </div>

            <!-- end content here -->
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>