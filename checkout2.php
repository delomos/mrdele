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
        <li class="current"><span><big>2.</big> Payment method</span></li>
        <li><span><big>3.</big> Order confirmation</span></li>
      </ul>
      <form class="step_payment_method">
        <div class="column_50 border-dashed-right">
          <h3>Cold Fish Shoes</h3>
          <strong>Visa, Master card or American express</strong>
          <div class="input_group">
            <input type="text" placeholder="-First Name-">
            <span class="error_box">error will be like this</span> </div>
          <div class="input_group">
            <input type="text" placeholder="-Last Name-">
            <span class="error_box"></span> 
            <!-- for showing error , auto hides if no content --> 
          </div>
          <div class="input_group">
            <input type="text" placeholder="-Card Number-">
            <span class="error_box"></span> 
            <!-- for showing error , auto hides if no content --></div>
          <div class="select_card input_group"> <a href="" class="ax selected"></a> <a href="" class="vi unselected"></a> <a href="" class="mc unselected"></a> <a href="" class="di unselected"></a> <span class="error_box"></span> 
            <!-- for showing error , auto hides if no content --> 
            
          </div>
          <div class="select_expiration input_group"> <strong>Expiration Date</strong>
            <div class="custom_dropdown">01</div>
            <div class="custom_dropdown">2013</div>
          </div>
          <div class="input_group">
            <input type="text" placeholder="-Security code-">
          </div>
          <img src="images/example_card.png"> </div>
        <div class="column_50 bill_address">
          <h3>Billing address</h3>
          <strong>Enter your shipping and billing address</strong>
          <label>
            <input type="checkbox">
            Same as shipping address</label>
          <div class="input_group">
            <input type="text" placeholder="-Address line 1-">
            <span class="error_box">Please enter some value</span></div>
          <div class="input_group">
            <input type="text" placeholder="-Address 2-">
          </div>
          <div class="input_group">
            <input type="text" placeholder="-City-">
          </div>
          <div class="custom_dropdown">-State/Province-</div>
          <div class="input_group">
            <input type="text" placeholder="-Zip/Postal Code-">
          </div>
          <div class="custom_dropdown">-Country-</div>
          <div class="input_group">
            <input type="submit" value="Continue to payment" class="big_button red">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>