<?php require APPROOT . '/views/inc/header.php'; ?>
        
            <div class="form-layout">
            <h2>Create An Account</h2>
            <p>Please fill out this form to register with us.</p>
            <form method="post" action="<?=URLROOT;?>/users/register">
            
            <!-- Name -->
                <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['name_err']))? 'is-invalid' : '' ;?>" value="<?= $data['name'];?>">
                <span class="invalid-feedback"><?=$data['name_err'];?></span>
                </div>
            
            <!-- Email -->
                <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['email_err']))? 'is-invalid' : '' ;?>" value="<?= $data['email'];?>">
                <span class="invalid-feedback"><?=$data['email_err'];?></span>
                </div>
            
            <!-- Password -->
                <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['password_err']))? 'is-invalid' : '' ;?>" value="<?= $data['password'];?>">
                <span class="invalid-feedback"><?=$data['password_err'];?></span>
                </div>

            <!-- Confirm Password -->
                <div class="form-group">
                <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                <input type="password" name="confirm_password" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['confirm_password_err']))? 'is-invalid' : '' ;?>" value="<?= $data['confirm_password'];?>">
                <span class="invalid-feedback"><?=$data['confirm_password_err'];?></span>
                </div>

                
                    <div class="form-buttons">

                        <input type="submit" value="Register" class="btn light-blue-bg">
                    
                    
                        <a href="<?= URLROOT;?>/users/login" class="btn">Have an Account?  Login</a>
                    </div>
                    
                

            </form>

            
            </div>
        




<?php require APPROOT . '/views/inc/footer.php'; ?>