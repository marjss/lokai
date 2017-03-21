<div class="footer-wrap">
			<footer>
		<div class="container">
		<div class="footer-left">
		<ul>
			<li>&copy;<?php echo date("Y"); ?> &nbsp; Lokai</li>
			<li><a href="#" class="" data-toggle="modal" data-target="#terms">Terms of use</a></li>
			<li><a href="#" class="" data-toggle="modal" data-target="#privacy">Privacy Policy</a></li>
			<div class="clearfix"></div>
		</ul>
		<small>Disclaimer :  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </small>
		</div>
		<div class="footer-right">
		<ul>
		    <li><a href="#" target="_blank" class="tw-icon"><img src="images/tw-icon.png" alt=""></a></li>
			<li><a href="#" target="_blank" class="insta-icon"><img src="images/insta-icon.png" alt=""></a></li>
		</ul>
		</div>
		</div>	
		</footer>
			</div>
		</div>
		<div class="footer-wrap-clone"></div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
                
		<script src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>
		<script src="js/common.js"></script>
                <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title " style="color:#000">Login</h4>
                        </div>
                        <div class="modal-body">
                            <div id ="genericButton">
                           <a href="<?php echo $loginUrl; ?>" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-link"></span> Sign in with Instagram</a>
                           <a href="process.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-retweet"></span> Sign in with Twitter</a>
                           <a href="javascript:void(0)" onClick="showForm('OtpForm','genericButton');" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-envelope"></span> Sign in with OTP</a>
                           </div>
                            <form class="form" id="OtpForm" style='display: none;'>
                                <div class="form-group" id="email-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                      <div class="input-group-addon">@</div>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required="required">
                                    </div>
                                </div>

                                
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-primary" id="backButton" onclick="showForm('genericButton','OtpForm');"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                                        <button type="submit" id="submitButton" class="btn btn-primary">Get OTP</button>
                                        
                                    </div>
                                <div class="time" id="timer" style="color:#000"></div>
                              </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                </div>
                <div id="cart" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title " style="color:#000">Cart</h4>
                        </div>
                        <div class="modal-body" style="color:#000">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>
                                    
                                        <tr>
                                        <th>Item</th>
                                        <th>QTY</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                    <tr>
                                        <td>America Elements</td>
                                        <td id="qty"><input type="number" id="editqty" style="width: 45px; padding: 1px" value="0" min="0"></td>
                                        <td id="price"><?php echo PRICE; ?></td>
                                        <td id="price_sub"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Sub Total</span></th>
                                        <th id="subtotal"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Shipping</span></th>
                                        <th id="shipping"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Total</span></th>
                                        <th id="total"></th>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn btn-primary" data-dismiss="modal" >Continue</a></td>
                                        <td colspan="3"><a href="javascript:void(0)" id="checkout" class="pull-right btn btn-success">Checkout</a></td>
                                    </tr>
                                 
                                    
                                </tbody>
                            </table>          

                       
                        </div>
                        
                      </div>

                    </div>
                </div>
                <div id="cart_empty" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title " style="color:#000">Cart</h4>
                        </div>
                        <div class="modal-body" style="color:#000">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>
                                    
                                      <tr>
                                        <th>Cart is Empty</th>
                                        
                                    </tr>
                                
                                    
                                </tbody>
                            </table>          

                       
                        </div>
                        
                      </div>

                    </div>
                </div>
                <div id="checkout_model" class="modal fade" role="dialog">
                    <div class="modal-ship">

              <!-- Modal content-->
              <div class="modal-content" style="color:#000">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#VerifyEmail-step" type="button" class="btn btn-primary btn-circle" id="AddressSetup-step-1" >
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </a>
                            <p>Address Details</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#ProfileSetup-step" type="button" class="btn btn-danger btn-circle" id="ProfileSetup-step-2" disabled="disabled">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                            <p>Review</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#Security-Setup-step" type="button"  class="btn btn-danger btn-circle"  disabled="disabled" id="Security-Setup-step-3">
                                <span class="glyphicon glyphicon-credit-card"></span>
                            </a>
                            <p>Pay</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!--SHIPPING METHOD-->
                        <div class="row setup-content" id="VerifyEmail-step">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <form role="form" class="form" id="address_form" action="#" method="post">
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><span><i class="glyphicon glyphicon-map-marker"></i></span> Enter Your Address Details</div>
                                        <div class="panel-body">
                                    <div class="form-horizontal">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                            <div class="form-horizontal">
                                                <fieldset>
                                                   <div class="form-group">
                                                      <label class="col-sm-3 control-label" for="email">Your Email</label>
                                                      <div class="col-sm-9">
                                                        <input  maxlength="100" name="email" type="email" required="required" class="form-control" placeholder="Enter Email"  />
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-lg-6 control-label" for="fname">First Name</label>
                                                              <div class="col-lg-6" >
                                                               <input maxlength="100" name="fname" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-lg-6 control-label" for="lname">Last Name</label>
                                                              <div class="col-lg-6" >
                                                               <input maxlength="100" name="lname" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="col-sm-6 control-label" for="phone">Primary Phone Number</label>
                                                      <div class="col-sm-6">
                                                          <input maxlength="20" type="text" name="phone" required="required" class="form-control" placeholder="Enter Phone Number" />
                                                      </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    
                                                      
                                                      <div class="col-sm-6">&nbsp;
                                                          
                                                      </div>
                                                      <div class="col-sm-6">&nbsp;
                                                          
                                                      </div>
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                      <label class="col-sm-3 control-label" for="address">Address</label>
                                                      <div class="col-sm-9">
                                                       <input maxlength="200" type="text" name="address" required="required" class="form-control" placeholder="Enter Address" />
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                          <label class="col-sm-6 control-label" for="country">Country</label>
                                                          <div class="col-sm-6">
                                                           <select required="required" class="form-control" name="country" >
                                                               <option value="0">Select Country</option>
                                                               <option value="india">India</option>
                                                               <option value="usa">USA</option>
                                                           </select>
                                                          </div>
                                                      </div>

                                                    </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="state">State/Province</label>
                                                              <div class="col-sm-6">
                                                               <input maxlength="100" type="text" name="state" required="required" class="form-control" placeholder="Enter State/Province" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="city">City</label>
                                                              <div class="col-sm-6">
                                                               <input maxlength="100" type="text" name="city" required="required" class="form-control" placeholder="Enter City" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="zipcode">Zipcode</label>
                                                              <div class="col-sm-6">
                                                               <input maxlength="6" type="text" name="zipcode" required="required" class="form-control" placeholder="Enter Zipcode" />
                                                              </div>
                                                            </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                    </form>
                                </div>
                            </div>
                    <div class="row setup-content" id="ProfileSetup-step">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><span><i class="glyphicon glyphicon-shopping-cart"></i></span> Review Order</div>
                                        <div class="panel-body">
                                    <table class="table table-striped table-hover table-bordered">
                                <tbody>
                                    
                                        <tr>
                                        <th>Item</th>
                                        <th>QTY</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                    <tr>
                                        <td>America Elements</td>
                                        <td id="rqty"></td>
                                        <td id="rprice"><?php echo PRICE; ?></td>
                                        <td id="rprice_sub"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Sub Total</span></th>
                                        <th id="rsubtotal"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Shipping</span></th>
                                        <th id="rshipping"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Total</span></th>
                                        <th id="rtotal"></th>
                                    </tr>
<!--                                    <tr>
                                        <td><a href="#" class="btn btn-primary" data-dismiss="modal" >Continue</a></td>
                                        <td colspan="3"><a href="javascript:void(0)" id="checkout" class="pull-right btn btn-success">Checkout</a></td>
                                    </tr>-->
                                 
                                    
                                </tbody>
                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg pull-right nextBtn" type="button">Confirm</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row setup-content" id="Security-Setup-step">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <!--CREDIT CART PAYMENT-->
                                    <form role="form" class="form" id="payment_form" action="charge.php" method="post">
                                    <div class="panel panel-info">
                                        <div class="panel-heading"><span><i class="glyphicon glyphicon-credit-card"></i></span> Secure Payment Transactions By Stripe</div>
                                        <div class="panel-body">
                                            <div class="form-horizontal">
                                                <fieldset>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="name_card">Name on card</label>
                                                              <div class="col-sm-6" style="">
                                                               <input maxlength="50" type="text" id="name_card" name="name_card" required="required" class="form-control" placeholder="Name on card" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="cardnumber">Credit Card Number</label>
                                                              <div class="col-sm-6" style="">
                                                               <input maxlength="20" type="text" name="cardnumber" id="cardnumber" required="required" class="form-control" placeholder="Card number" />
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="exp_month">Expiration Month</label>
                                                              <div class="col-sm-6" style="">
                                                               <select class="form-control" id="exp_month" name="exp_month" >
                                                                        <option value=""></option>
                                                                        <?php
                                                                        for($month = 01;$month < 13; $month++) {
                                                                            echo '<option value="'.str_pad($month, 2, '0', STR_PAD_LEFT).'">'.str_pad($month, 2, '0', STR_PAD_LEFT).'</option>';
                                                                        }
                                                                        ?>
                                                                </select>
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="exp_year">Expiration Year</label>
                                                              <div class="col-sm-6" style="">
                                                               <select class="form-control" id="exp_year" name="exp_year" >
                                                                        <option value=""></option>
                                                                        <?php
                                                                        for($year = date('Y');$year < date('Y')+20; $year++) {
                                                                            echo '<option value="'.$year.'">'.$year.'</option>';
                                                                        }
                                                                        ?>
                                                                </select>
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                              <label class="col-sm-6 control-label" for="cvv">Security code </label>
                                                              <div class="col-sm-6" style="">
                                                               <input type="password" placeholder="CVV" name="cvv" id="cvv" class="form-control" maxlength="4">
                                                              </div>
                                                            </div>
                                                    </div>
                                                        
                                                </fieldset>
                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="clearfix">&nbsp;</div>
                                                                    <span>Pay secure using your credit card.</span>
                                                                </div>
                                                                <div class="clearfix">&nbsp;</div>
                                                                <div class="col-md-12">
                                                                    <ul class="cards">
                                                                        <li class="visa hand">Visa</li>
                                                                        <li class="mastercard hand">MasterCard</li>
                                                                        <li class="amex hand">Amex</li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <!--<button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                    </div>
                                    <!--CREDIT CART PAYMENT END-->
                                    <button class="btn btn-primary btn-lg pull-right nextBtn" type="submit">Pay Securely</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                     <!--SHIPPING METHOD END-->
                        
                   
                                
                               
                </div>
                <div class="modal-footer">
                  <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
              </div>

            </div>
            </div>
	</body>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/validate.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script>
        var STRIPE_TEST_PUB_KEY = '<?php echo STRIPE_PUBLISH_KEY_TEST; ?>';
        </script>
<style>
/*.modal-dialog.bigBody {
    width: 80%;  
    }*/
    #checkout_model .modal-body{
/*    height:900px;*/
    overflow-y: auto;
}/*s*/

@media (min-height: 500px) {
    #checkout_model .modal-body { height: 400px; }
    .modal-dialog.bigBody {
    width: 80%; /* respsonsive width */
    }
}

@media (min-height: 800px) {
    #checkout_model .modal-body { height: 600px; }
}
</style>
</html>