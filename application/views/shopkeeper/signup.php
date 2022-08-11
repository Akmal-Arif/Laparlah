<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/profile.css');?>">
</head>

<body>
    <div class="wrapper container">
    <form action="<?php echo base_url().'shopkeeper/signup/create_shop';?>" method="POST"
        class="form-container mx-auto  shadow-container" id="myForm" style="width:90%" enctype="multipart/form-data">
        <h3 class="mb-3 p-2 text-center mb-3">Add Restaurant Details</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" name="username" id="rname" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" placeholder="Add Username"
                    value="<?php echo set_value('username');?>">

                    <?php echo form_error('username'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Restaurant Name</label>
                    <input type="text" name="res_name" id="rname" class="form-control
                    <?php echo (form_error('res_name') != "") ? 'is-invalid' : '';?>" placeholder="Add Restaurant Name"
                    value="<?php echo set_value('res_name');?>">

                    <?php echo form_error('res_name'); ?>
                    <span></span>
                </div>
                 <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control
                <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="password"
                            placeholder="Password" value="<?php echo set_value('password')?>">
                        <?php echo form_error('password'); ?>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Bussiness E-mail</label>
                    <input type="text" name="email" id="email" class="form-control form-control-danger
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" placeholder="example@gmail.com"
                        value="<?php echo set_value('email');?>">

                        <?php echo form_error('email'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Contact</label>
                    <input type="number" name="phone" id="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" placeholder="01123456789"
                        value="<?php echo set_value('phone');?>">
                        <?php echo form_error('phone'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label class="control-label">Website URL</label>
                    <input type="text" name="url" id="url" class="form-control form-control-danger
                    <?php echo (form_error('url') != "") ? 'is-invalid' : '';?>"
                        placeholder=" http://example.com" value="<?php echo set_value('url');?>">
                        <?php echo form_error('url'); ?>
                    <span></span>
                </div>
            </div>
              <div class="col-md-6">
             <div class="form-group">
                    <label class="control-label">Opening Time</label>
                    <select name="o_hr" id="o_hr" class="form-control
                    <?php echo (form_error('o_hr') != "") ? 'is-invalid' : '';?>">
                        <option value="">--Select your Hours--</option>
                        <option value="6am">6am</option>
                        <option value="7am">7am</option>
                        <option value="8am">8am</option>
                        <option value="9am">9am</option>
                        <option value="10am">10am</option>
                        <option value="11am">11am</option>
                        <?php echo set_select('o_hr'); ?>
                    </select>
                    <?php echo form_error('o_hr');?>
                    <span></span>
                </div>
                <div></div>
                 <div class="form-group">
                    <label class="control-label">Closing Time</label>
                    <select name="c_hr" id="c_hr" class="form-control
                    <?php echo (form_error('c_hr') != "") ? 'is-invalid' : '';?>">
                        <option value="">--Select your Hours--</option>
                        <option value="3pm">3pm</option>
                        <option value="4pm">4pm</option>
                        <option value="5pm">5pm</option>
                        <option value="6pm">6pm</option>
                        <option value="7pm">7pm</option>
                        <option value="8pm">8pm</option>
                        <option value="9pm">9pm</option>
                        <option value="10pm">10pm</option>
                        <option value="11pm">11pm</option>
                    </select>
                    <?php echo form_error('c_hr');?>
                    <span></span>
                </div>
                 <div class="form-group">
                    <label class="control-label">Open Days</label>
                    <select name="o_days" id="o_days" class="form-control <?php echo (form_error('o_days') != "") ? 'is-invalid' : '';?>">
                        <option value="">--Select your Days--</option>
                        <option value="mon-tue">mon-tue</option>
                        <option value="mon-wed">mon-wed</option>
                        <option value="mon-thu">mon-thu</option>
                        <option value="mon-fri">mon-fri</option>
                        <option value="mon-sat">mon-sat</option>
                        <option value="24hr-x7">24hr-x7</option>
                    </select>
                    <?php echo form_error('o_days');?>
                    <span></span>
                </div> 
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control 
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Address</label>
            <textarea name="address" id="address" type="text" style="height:70px;"
                class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address');?></textarea>
            <?php echo form_error('address');?>
            <span></span>
        </div>
        <div class="form-actions">
            <input type="hidden" name="c_name" value="1">
            <input type="submit" id="btn" name="submit" class="btn btn-success" value="Signup">
            <a href="<?php echo base_url().'shopkeeper/login/index';?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
<script>
    const o_hr = document.getElementById("o_hr");
    const c_hr = document.getElementById("c_hr");
    const o_days = document.getElementById("o_days");
    const c_name = document.getElementById("c_name");

    o_hr.value = "<?php echo $_POST['o_hr']; ?>";
    c_hr.value = "<?php echo $_POST['c_hr']; ?>";
    o_days.value = "<?php echo $_POST['o_days']; ?>";
    c_name.value = "<?php echo $_POST['c_name']; ?>";
</script>

 
</body>
</html>
<script type="text/javascript">
    function noti() {
    if (confirm("Your request has been sent to administration. Please kindly wait until you are verified.")) {
        window.location.href = '<?php echo base_url().'shopkeeper/Login/index/';?>';
    }
}
</script>
