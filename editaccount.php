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
    <div class="heading_section_dark">
      <h1>My Account Information</h1>
      <h4>Personal Information - Customize your personal information</h4>
    </div>
    <form class="edit_account_info">
      <div class="basic_info clearfix">
        <div class="input_group_wrap">
          <label>Username<span class="icon_pencil square_icon"></span></label>
          <div class="input_group">
            <input type="text" placeholder="-User name-" value="Maher.jilani">
            <em>Maher.jilani</em> <span class="success error_box"></span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="input_group_wrap">
          <label>Password<span class="icon_pencil square_icon"></span></label>
          <strong>Please be aware that passwords are case-sensitive</strong>
          <div class="input_group">
            <input type="password" placeholder=" -Enter your New Password- ">
            <input type="password" placeholder=" -Confirm your Password- ">
            <span class="error_box">error will be like this</span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="input_group_wrap">
          <label>Enter your Email Address<span class="icon_pencil square_icon"></span></label>
          <div class="input_group">
            <input type="text" placeholder="-User name-" value="Maher.jilani">
            <em>Maher@plexable.com</em> <span class="success error_box"></span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="input_group_wrap">
          <label>Your Picture<span class="icon_pencil square_icon"></span></label>
          <div class="input_group"> <img src="images/image.jpg"><span class="success error_box"></span> </div>
        </div>
        <div class="input_group_wrap">
          <label>Personal Blog<span class="icon_pencil square_icon"></span></label>
          <div class="input_group">
            <input type="text" placeholder="-User name-" value="Maher.jilani">
           <em> www.example.com</em> <span class="success error_box"></span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="input_group_wrap">
          <label>Facebook page<span class="icon_pencil square_icon"></span></label>
          <div class="input_group">
            <input type="text" placeholder="-User name-" value="Maher.jilani">
            <em>https://facebook.com/maher.jilani</em> <span class="success error_box"></span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="input_group_wrap">
          <label>Twitter Account<span class="icon_pencil square_icon"></span></label>
          <div class="input_group">
            <input type="text" placeholder="-User name-" value="Maher.jilani">
            <em>@Maherjilani</em> <span class="success error_box"></span>
            <input type="submit" value="Save Change" class="big_button red">
          </div>
        </div>
        <div class="clear" style="height:20px;"></div>
      </div>
      <div class="heading_section_dark">
        <h2>Shipping Address - Customize your Personal Information</h2>
      </div>
      <div class="clearfix contact_info">
        <div class="input_group_wrap address_select margin-bot-twenty">
          <div class="input_group">
            <div class="custom_dropdown">-Select Address-</div>
          </div>
        </div>
        <div class="input_group">
          <input type="text" placeholder="-First name-">
          <span class="success error_box">success</span>
        
        </div>
        <div class="input_group">
          <input type="text" placeholder="-Last name-">
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
          <input type="text" placeholder="-Address line 1-">
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
          <input type="text" placeholder="-Address 2-">
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
     <div class="custom_dropdown">-Country-</div>
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
          <input type="text" placeholder="-City-">
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
          <input type="text" placeholder="-State/Province-">
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
        <div class="custom_dropdown">-Zip/Postal Code-</div>
          <span class="success error_box"></span>
       
        </div>
        <div class="input_group">
          <input type="text" placeholder="-Telephone Number (10 digits only, no dashes)-">
          <span class="success error_box"></span>
        </div>
        <div class="input_group_wrap address_select margin-top-twenty">
          <div class="input_group">
            <div class="custom_dropdown">-Address Name-</div>
          </div>
        </div>
         <div class="input_group_wrap button_group"> 
        <input type="submit" value="Save Change" class="big_button red margin-right-ten">
        <input type="button" value="Cancel" class="big_button grey"><input type="button" value="Deactivate account" class="big_button dgrey floatRight"></div>
      </div>
    </form>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>