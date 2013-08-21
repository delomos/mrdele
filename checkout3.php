<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>title</title> <link rel="stylesheet/less"  href="css/styles.less" />
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
            
            <div class="step_confirmation">
            
            <div class="ships_to border-dashed-bottom">
        <h3>Order Confirmation</h3>
        <h4 class="icon_truck">Ships to:</h4>
        <small>Queen Rania Street, Amman ,Jordan</small>
        <small>Khalda behind Majdi Mall</small>
        <small>P.O BOX 112342</small>
        <small>Zip Code: 11953</small>
            
            </div>
            
            <div class="order_values">
            <h3 class=" icon_cart">Order</h3>
            <div class="order_group">
            <label class="order_name">Item total</label>
            <label class="order_value">$769.00 USD</label>
            </div>
            <div class="order_group">
            <label class="order_name">Shipping</label>
            <label class="order_value">$769.00 USD</label>
            </div>
            <div class="order_group">
            <label class="order_name">Tax</label>
            <label class="order_value">$769.00 USD</label>
            </div>
            <div class="order_group total">
            <label class="order_name">Total</label>
            <label class="order_value">$769.00 USD</label>
            </div>
            
            <input type="submit" value="Make payment" class="big_button red">
            
            </div>
            </div>
            
            </div>
            </div>

</div>














 

<?php include_once("includes/footer.php"); ?>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>