<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>title</title>
<link rel="stylesheet/less"  href="css/styles.less" />
<?php include_once("base.php"); ?>
</head>
<body>
<?php include_once("includes/topbar.php"); ?>
<?php include_once("includes/header.php"); ?>
<div id="content">
  <div class="container">
    <div class="steps">
      <ul class="steps_process">
        <li class="completed"><span><big>1.</big> Shopping cart</span></li>
        <li class="completed"><span><big>2.</big> Payment method</span></li>
        <li class="current"><span><big>3.</big> Order confirmation</span></li>
      </ul>
      <div class="step_success">
        <div class="notification successfull"> <span class="round_icon icon_tick"></span>Thank you for Purchasing from Geleyi. An email will be sent to you with the details shortly. </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>