<?php
include 'header.php';



?>
<div class="row mt-5" position="relative">
	
	<div class="col-md-12">
		<h3 align="center">Earn more than N200000   working within your neighboorhood.</h3>

		
	</div>
	
</div>
<div class ='row'>
<div class="col-md-4">
		
	</div>
	
<div class="col-md-6">
	<p align="">Fill the sign up form below</p>
</div>

</div>



<div class="row mt-12" position:relative;>

            <div class="col-md-4"></div>
            <div class="col-md-7">
              
              

               <form action="fastfix_pros.php" method="post" accept-charset="utf-8"id="form-join" >
                      <div class="form-group">
                        <fieldset>
                        	<legend>Secured Access details<i class="fa fa-profile"></i></legend>
                        </fieldset>
                          
                          <div class="form-group">
                        <label>First name<input type="text" name="name" value="" class="form-control" placeholder="First Name name" id="f"></label>
                        
                      </div>
                      <div class="form-group">
                        <label>Last name<input type="text" name="lastname" value="" class="form-control name " placeholder="last name" id="l"></label>
                        
                      </div>
                      <div class="form-group">
                        <label>Phone<input type="number" name="phone" value="" class="form-control" placeholder="phone number" id="e" ></label>
                        
                      </div>
                      <div class="form-group">
                        <label>Email<input type="email" name="mail" value="" class="form-control" placeholder="Email Address" id="e" ></label>
                        
                      </div>
                        
                        <label>Username<input type="text" name="usr_name" value="" class="form-control" placeholder="Type your username" id="us" ></label>
                        
                      </div>

                       <div class="form-group">
                        <label>Password<input type="password" name="pass" value="" class="form-control" placeholder="Type your password" id="psd"></label>
                        
                      </div>
                       <div class="form-group">
                        <label>Confirm password<input type="password" name="pwd" value="" class="form-control" placeholder="Confirm password" id="cfpsd" r></label>
                        <p style="color: red" id="war"></p>
                        <div class="form-group">
                        <p class="text-primary">Please select what you need</p>

                        <select name="type" style="border-radius:5%; background-color:tomato" id="pick" required="required">
                          <option value="">Select</option>
                          <option value="service">I need a handy man</option>
                          <option value="artisan">I need a  job</option>
                        </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label>Address<br><textarea name="add" cols="15" rows="5"></textarea></label><br>
                        
                     <button type="button" class='btn btn-success' id="sign">Sign up</button>
                      
                       
                </form>
              
            </div>

            <div class=""><i class="fas fa-calendar"></i></div>
          </div>
        </div>
      </div>



<?php

include 'footer.php';
?>