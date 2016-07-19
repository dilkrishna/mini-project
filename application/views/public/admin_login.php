<?php include_once 'public_header.php'?>
<div class="container">
<?php echo form_open('LoginController/admin_login',['class'=>'form-horizontal']); ?>
<!--<form class="form-horizontal" action="AdminController/dashboard">-->
  <fieldset>
    <legend>Article</legend>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="username" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-6">
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','name'=>'username','type'=>'text','value'=>  set_value('username')])?>
                <!--            <input class="form-control" placeholder="Username" type="text" >-->
                   </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <?php echo form_error('username','<p class=text-danger>','</p>'); ?>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                     <label for="password" class="col-lg-2 control-label">Password</label>
                   <div class="col-lg-6">
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'Password','name'=>'password','type'=>'password']) ?>
                        <!--<input class="form-control" placeholder="Password" type="password">-->
                    </div>
                </div> 
            </div>
                <div class="col-lg-6">
                    <?php echo form_error('password','<p class=text-danger>','</p>');?>
                </div>
        </div> 
     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</div>

<?php $this->load->view('public/public_footer')?>

