<h2><?php echo $title; ?></h2>

<!-- BEGIN CONTAINER -->   
        <div class="container margin-bottom-40">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login-signup-page">
                <?php echo form_open_multipart('users/register','class="form-horizontal"'); ?>          
                    
                    <h2>Signup</h2>

                    <?php if($errmsg){?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php 
						echo validation_errors(); 
					?>
					</div>
					<?php } ?>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="emmail" class="form-control" placeholder="E-mail" name="email">
                    </div>    
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Zip Code" name="zip_code">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn theme-btn pull-right">Signup</button>                        
                        </div>
                    </div>

                <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        <!-- END CONTAINER -->