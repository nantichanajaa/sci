<!doctype html>
<html lang="en">

<head>

    <?php include('../components/style.php'); ?>
</head>

<body>
    <?php include('../components/navbar.php'); ?>
    <div class="container">
        <!-- content here -->
        <h1></h1>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://i0.wp.com/www.vru.ac.th/wp-content/uploads/2022/01/100528734_3051967501508528_2068001270983032832_n-removebg-preview.png?w=500" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <span style="color: blue;">อาชีวอนามัยและความปลอดภัย</span>
                </a>
            </div>
        </nav>
        </nav>
        </nav>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="false">ภาพรวม</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="plan-tab" data-bs-toggle="tab" data-bs-target="#plan-tab-pane" type="button" role="tab" aria-controls="plan-tab-pane" aria-selected="false">เเผนการเรียน</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure-tab-pane" type="button" role="tab" aria-controls="structure-tab-pane" aria-selected="false">โครงสร้าง</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher-tab-pane" type="button" role="tab" aria-controls="teacher-tab-pane" aria-selected="false">อาจารย์</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0"><?php include('overview.php'); ?></div>
            <div class="tab-pane fade" id="structure-tab-pane" role="tabpanel" aria-labelledby="structure-tab" tabindex="0"><?php include('structure.php'); ?></div>
            <div class="tab-pane fade" id="plan-tab-pane" role="tabpanel" aria-labelledby="plan-tab" tabindex="0"><?php include('plan.php'); ?></div>
            <div class="tab-pane fade" id="teacher-tab-pane" role="tabpanel" aria-labelledby="teacher-tab" tabindex="0"><?php include('teacher.php'); ?></div>
        </div>





        <!-- end content here -->
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>