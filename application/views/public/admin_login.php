<?php include_once 'public_header.php'?>
<div class="container">
<?php echo form_open('AdminController/dashboard',['class'=>'form-horizontal']); ?>
<!--<form class="form-horizontal" action="AdminController/dashboard">-->
  <fieldset>
    <legend>Article</legend>
    <div class="form-group">
        <label for="username" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-10">
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','type'=>'text'])?>
<!--            <input class="form-control" placeholder="Username" type="text" >-->
        </div>
    </div>    
     <div class="form-group">
        <label for="password" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Password','type'=>'password']) ?>
            <!--<input class="form-control" placeholder="Password" type="password">-->
        </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
<?php echo form_close(); ?>
</div>
</fieldset>


<?php $this->load->view('public/public_footer')?>

