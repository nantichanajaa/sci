<!doctype html>
<html lang="en">

<head>

    <?php include('../components/style.php'); ?>
</head>

<body>

    <?php include('../components/navbar.php'); ?>
    <div class="container">
        <!-- content here -->
        <h1><strong class="text-primary" style="font-size: 25px;">โครงสร้างหลักสูตร :</strong></h1>
        <strong class="text-primary">หลักสูตรประกอบไปด้วย</strong>
        <table class="table">
        <tbody>
    <tr>
      <td>จำนวนหน่วยกิต</td>
      <td>หมวดวิชา</td>
    </tr>
    <tr>
      <td>หมวดวิชาศึกษาทั่วไป</td>
      <td>30 หน่วยกิต</td>
      <td></td>
    </tr>
    <tr>
      <td>หมวดวิชาเฉพาะ</td>
      <td>105 หน่วยกิต</td>
    </tr>
    <tr>
      <td>หมวดวิชาเลือกเสรี</td>
      <td>6 หน่วยกิต</td>
    </tr>
    <tr>
      <td class="text-end">จำนวนหน่วยกิตรวมตลอดหลักสูตรไม่น้อยกว่า</td>
      <td class="text-start">141 หน่วยกิต</td>
    </tr>
  </tbody>
</table>
        <!-- end content here -->
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>