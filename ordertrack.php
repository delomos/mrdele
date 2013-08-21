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
    <div class="order_track">
      <div class="clearfix">
        <h1>Tracking orders Page</h1>
        <form class="search_track">
          <input type="text" placeholder=" -search within tracking orders- ">
          <a class="icon_search"></a>
        </form>
      </div>
      <table class="tabl"  cellspacing="10">
        <tr class="head">
          <td class=" product">Product</td>
          <td class=" price">Price</td>
          <td class="quantity">Quanitity</td>
          <td class="total">Total</td>
          <td class="status">Order Status</td>
        </tr>
        <tr>
          <td class="product"><img src="images/shoe.png">
            <div class="invoice_product_name"> <strong>Cold Fish Shoes</strong> <strong>by <a>GAMA-GO</a></strong> <a class="link">Remove</a>
              <div class="return_confirmation">
                <label>Are you sure you want to return this item?</label>
                <div class="floatRight"><a href="#;" class="button grey return">Return</a><a href="#;" class="button grey cancel">Cancel</a></div>
              </div>
            </div></td>
          <td class="price"><strong>$20.00</strong></td>
          <td class="quantity"> 1 </td>
          <td class="total"><strong>$20.00</strong></td>
          <td class="status success" style="position:relative"><label>Delivered</label>
            <input type="submit" value="Return Item" class="big_button grey"></td>
        </tr>
        <tr>
          <td class="product"><img src="images/shoe.png">
            <div class="invoice_product_name"> <strong>Cold Fish Shoes</strong> <strong>by <a>GAMA-GO</a></strong> <a class="link">Remove</a> </div></td>
          <td class="price"><strong>$20.00</strong></td>
          <td class="quantity"> 1 </td>
          <td class="total"><strong>$20.00</strong></td>
          <td class="status success"><label>Shipped</label></td>
        </tr>
        <tr>
          <td class="product"><img src="images/shoe.png">
            <div class="invoice_product_name"> <strong>Cold Fish Shoes</strong> <strong>by <a>GAMA-GO</a></strong> <a class="link">Remove</a> </div></td>
          <td class="price"><strong>$20.00</strong></td>
          <td class="quantity"> 1 </td>
          <td class="total"><strong>$20.00</strong></td>
          <td class="status failed"><label>Declined</label></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>