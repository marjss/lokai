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
                    <div class="modal-dialog bigBody" >

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title " style="color:#000">Checkout</h4>
                        </div>
                        <div class="modal-body" style="color:#000">
                            <div class="row cart-body">
                            <form class="form-horizontal" method="post" action="">
                               <!--SHIPPING METHOD-->
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h4>Shipping Address</h4>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-6 col-xs-12">
                                                <strong>First Name:</strong>
                                                <input type="text" name="first_name" class="form-control" value="" />
                                            </div>
                                            <div class="span1"></div>
                                            <div class="col-md-6 col-xs-12">
                                                <strong>Last Name:</strong>
                                                <input type="text" name="last_name" class="form-control" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Address:</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" name="address" class="form-control" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-xs-12">
                                                <strong>Country:</strong>
                                                <input type="text" name="country" class="form-control" value="" />
                                            </div>
                                            <div class="span1"></div>
                                            <div class="col-md-6 col-xs-12">
                                                <strong>State:</strong>
                                                <input type="text" name="state" class="form-control" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-xs-12">
                                                <strong>City:</strong>
                                                <input type="text" name="city" class="form-control" value="" />
                                            </div>
                                            <div class="span1"></div>
                                            <div class="col-md-6 col-xs-12">
                                                <strong>Zip / Postal Code:</strong>
                                                <input type="text" name="zip_code" class="form-control" value="" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Phone Number:</strong></div>
                                            <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Email Address:</strong></div>
                                            <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                                        </div>
                                    </div>
                                
                                <!--SHIPPING METHOD END-->

                            

                            </form>
                            </div>
                        </div>
                        
                      </div>

                    </div>
                </div>
	</body>
<script>
    
    // override jquery validate plugin defaults
    $.validator.setDefaults({
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
    jQuery.validator.addMethod("validEmail", function(value, element) 
    {
    if(value == '') 
        return true;
    var temp1;
    temp1 = true;
    var ind = value.indexOf('@');
    var str2=value.substr(ind+1);
    var str3=str2.substr(0,str2.indexOf('.'));
    if(str3.lastIndexOf('-')==(str3.length-1)||(str3.indexOf('-')!=str3.lastIndexOf('-')))
        return false;
    var str1=value.substr(0,ind);
    if((str1.lastIndexOf('_')==(str1.length-1))||(str1.lastIndexOf('.')==(str1.length-1))||(str1.lastIndexOf('-')==(str1.length-1)))
        return false;
    str = /(^[a-zA-Z0-9]+[\._-]{0,1})+([a-zA-Z0-9]+[_]{0,1})*@([a-zA-Z0-9]+[-]{0,1})+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,6})$/;
    temp1 = str.test(value);
    return temp1;
}, "Please enter valid email.");
    function doLogout(){
           $.ajax({
               url:"logout.php",
               success:function(){
                   var url = removeURLParameter(window.location.href, 'code')
                   window.location.href = url;
                   location.reload();
               }
           })
       } 
    function showForm(id,hide){
           $("#"+id).toggle();
           $("#"+hide).toggle();
       } 
    function removeURLParameter(url, parameter) {
        
    //prefer to use l.search if you have a location/link object
    var urlparts= url.split('?');   
    if (urlparts.length>=2) {

        var prefix= encodeURIComponent(parameter)+'=';
        var pars= urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i= pars.length; i-- > 0;) {    
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                pars.splice(i, 1);
            }
        }

        url= urlparts[0]+'?'+pars.join('&');
        return url;
    } else {
        return url;
    }
}
    
    $(document).ready(function(){
        var cartobj;
        $("[type='number']").keypress(function (evt) {
            evt.preventDefault();
        });
        $('#login').on('hidden.bs.modal', function () {
           
            $(this).find('form')[0].reset();
        });
        
        //validation for login
        
        $("#OtpForm").validate({
			rules: {
                            email: {
                                required: true,
                                validEmail: true
                            }
                        },
                            messages: {
                                email: "Please enter a valid email address",
			},
                        submitHandler: function() {
                            var email = $("#email").val();
                          $.ajax({
                                type: 'POST',
                                url:"otp.php",
                                data:{email:email},
                                success:function(success){
                                    $("#backButton").remove();
                                    $("#submitButton").remove();
                                    var count=300;
                                    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
                                    function timer()
                                    {
                                      count=count-1;
                                      if (count <= 0)
                                      {
                                         clearInterval(counter);
                                         $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="'+email+'" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                                         return;
                                      }
                                      var content = '<div class="form-group" id="otp-group"><label class="sr-only" for="otp">OTP</label><div class="input-group mb-2 mr-sm-2 mb-sm-0"><input type="text" class="form-control" name="otp" id="otp" placeholder="OTP" required="required"></div></div><a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>';
                                    
                                      $("#email-group").replaceWith(content);
                                      $("#timer").html(count+" Seconds left to input OTP")
                                    }
                                },
                                error:function(error){
                                    console.log(error);
                                }
                            })
                         }
		});
        $.validator.addMethod("checkotp",
            function (value, element) {
                return false;
            },
        'One time password is invalid.');
        $(document).on('click',"#otpButton",function(){
            $( "#otp" ).rules( "remove", "checkotp" );
            if($("#otp").valid()){
                var otp = $("#otp").val();
                $.ajax({
                    type: 'POST',
                            url:"loginOTP.php",
                            data:{otp:otp},
                            success:function(success){
                                if(success == "success"){
                                     location.reload();
                                } else {
                                   $("#otp").rules('add', {checkotp: true});
                                   $("#otp").valid();
                                    return
                                }
                            },
                            error:function(error){}
                });
            }
        });
        $(document).on('click',"#cart_icon",function(){
            $.ajax({
                    type: 'POST',
                    data:{show:1},
                    url:"addTocart.php",
                    success:function(success){
                        cartObj = $.parseJSON(success)
                        if(cartObj.status && cartObj.qty !=0){
                            
                            $("#buynow").attr("data-session",cartObj.qty);
                            $("#editqty").val(cartObj.qty);
                            $("td#price_sub").text(cartObj.price);
                            $("th#subtotal").text(cartObj.price);
                            $("th#shipping").text(cartObj.shipping);
                            $("th#total").text(cartObj.gtotal);
                            $("#cart").modal("show");
                        } else {
                            $("#cart_empty").modal("show");
                        }
                    },
                    error:function(error){}
            });
        })
        $(document).on('click',"#regenotpButton",function(){
            var email = $(this).data("email");
            $(this).replaceWith('<a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>');
            $.ajax({
                        type: 'POST',
                        url:"otp.php",
                        data:{email:email},
                        success:function(success){
                            if(success == 'true'){
                                var count=300;
                                var counter=setInterval(timer, 1000);
                                function timer()
                                {
                                  count=count-1;
                                  if (count <= 0)
                                  {
                                     clearInterval(counter);
                                     $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="'+email+'" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                                     return;
                                  }

                                  $("#timer").html(count+" Seconds left to input OTP")
                                }
                            } else {
                                alert("Problem in generating OTP")
                            }

                        },
                        error:function(error){}
            })
        });
        $(document).on('click',"#buynow",function(){
            var cart = $(this).attr('data-session');
                $.ajax({
                    type: 'POST',
                    data:{add:cart},
                    url:"addTocart.php",
                    success:function(success){
                         cartObj = $.parseJSON(success)
                        if(cartObj.status){
                            $("#buynow").attr("data-session",cartObj.qty);
                            $("#editqty").val(cartObj.qty);
                            $("td#price_sub").text(cartObj.price);
                            $("th#subtotal").text(cartObj.price);
                            $("th#shipping").text(cartObj.shipping);
                            $("th#total").text(cartObj.gtotal);
                            $("#cart").modal("show");
                        } else {
                            location.reload();
                            return
                        }
                    },
                    error:function(error){}
            });
        });
                var carQty = $("#editqty").val();
        $("#editqty").on('keyup change click', function() {
            if (this.value !== carQty) {
                
                $.ajax({
                    type: 'POST',
                    data:{add:this.value},
                    url:"addTocart.php",
                    success:function(success){
                         cartObj = $.parseJSON(success);
                         
                        if(cartObj.status){
                           
                            $("#buynow").attr("data-session",cartObj.qty);
                            $("#editqty").val(cartObj.qty);
                            $("td#price_sub").text(cartObj.price);
                            $("th#subtotal").text(cartObj.price);
                            $("th#shipping").text(cartObj.shipping);
                            $("th#total").text(cartObj.gtotal);
                            $("#cart").modal("show");
                        } else {
                            location.reload();
                            return
                        }
                    },
                    error:function(error){}
            });
//              value = this.value;
            } else  {
                emptyCart();
            }
        });
        $(document).on('click',"#checkout",function(){
             $.ajax({
                    type: 'POST',
                    async:true,
                   
                    url:"checkSession.php",
                    success:function(success){
                       if(success == "true"){
                            $("#cart").modal("hide");
                            $("#checkout_model").modal("show");
                       } else {
                            $("#cart").modal("hide");
                            $("#login").modal("show");
                       }
                        
                    },
                    error:function(error){}
            });
        });
        
        $('#cart').on('show.bs.modal', function () {
           
          
        });
        
          function emptyCart(){
              $.ajax({
                    type: 'POST',
                    data:{add:0},
                    url:"addTocart.php",
                    success:function(success){
                        cartObj = $.parseJSON(success);
//                            $("#buynow").attr("data-session",0);
                            $("#editqty").val(0);
                            $("td#price_sub").text(0);
                            $("th#subtotal").text(0);
                            $("th#shipping").text(0);
                            $("th#total").text(0);
                            $("#cart").modal("hide");
                            $("#cart_empty").modal("show");
                            return
                        
                    },
                    error:function(error){}
            });
          }    
          
                
    });
</script>
<style>
.modal-dialog.bigBody {
    width: 80%; /* respsonsive width */
    }
    #checkout_model .modal-body{
    height:800px;
    overflow-y: auto;
}

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