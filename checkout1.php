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
            <li class="current"><span><big>1.</big> Shopping cart</span></li>
            <li><span><big>2.</big> Payment method</span></li>
            <li><span><big>3.</big> Order confirmation</span></li>
            </ul>
            
            <div class="step_invoice">
                <div class="table_headbg"></div>
                <table class="tabl" >
                          <tr class="head">   
                    <td class=" product">Product</td>
                    <td class=" price">Price</td>
                    <td class="quantity">Quanitity</td>
                    <td class="total">Total</td>
            </tr>
                 <tr>   
                    <td class="product">
                        <img src="images/shoe.png">
                        <div class="invoice_product_name">
                            <strong>Cold Fish Shoes</strong>
                            <strong>by <a>GAMA-GO</a></strong>
                            <a class="link">Remove</a>
                        </div>
                        
                    </td>
                    <td class="price">
                        <strong>$20.00</strong>
                    </td>
                     <td class="quantity">
                        <input type="text">
                        <a href="#;" class="link">update</a>
                    </td>
                     <td class="total">
                        <strong>$20.00</strong>
                    </td>
                   </tr> 
                    
                   <tr>   
                    <td class="product">
                        <img src="images/shoe.png">
                        <div class="invoice_product_name">
                            <strong>Cold Fish Shoes</strong>
                            <strong>by <a>GAMA-GO</a></strong>
                            <a class="link">Remove</a>
                        </div>
                        
                    </td>
                    <td class="price">
                        <strong>$20.00</strong>
                    </td>
                     <td class="quantity">
                        <input type="text">
                        <a href="#;" class="link">update</a>
                    </td>
                     <td class="total">
                        <strong>$20.00</strong>
                    </td>
                   </tr>
                </table>
            
            <div class="select_shipping_box">
            
            <h3 class="icon_truck">Ships to:</h3>
            <div class="custom_dropdown"></div>
            <a href="#;">+ Add a new shipping address</a>
                
                <div class="order_box">
                <strong>$20.00</strong>
                <label><input type="checkbox">This order is a gift</label>
                </div>
            
            <div class="order_values">
            <h3>Order</h3>
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
            
            
            
            </div>
            
            <input type="submit" class="big_button red" value="Continue to payment">
            
            
            </div>
            
            </div>
            
            </div>
            </div>

</div>














 

<?php include_once("includes/footer.php"); ?>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>