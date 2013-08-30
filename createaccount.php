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
    <div class="static_page clearfix">
      <h1>Create your account</h1>
      <h4>Thank you for signing up with Geleyi, Please Choose a user name and a password</h4>
      <form class="create_account">
        <div class="input_group">
          <input type="text" placeholder="-User name-">
          <span class="error_box">error will be like this</span> </div>
        <div class="input_group">
          <input type="text" placeholder="-Password-">
          <span class="error_box"></span> </div>
        <div class="input_group">
          <input type="text" placeholder="-Retype password-">
          <span class="error_box"></span> </div>
        <strong>By creating an account, I accept Geleyi's <a href="">Terms of Service</a> and <a href="">Privacy Policy</a></strong>
        <div class="clear" style="height:20px;"></div>
        <input type="submit" value="Finish" class="big_button red margin-right-ten">
        <input type="button" value="Cancel" class="big_button grey">
      </form>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>