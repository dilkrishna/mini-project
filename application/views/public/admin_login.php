<?php $this->load->view('public/public_header')?>
<div class="container">
<form class="form-horizontal">
  <fieldset>
    <legend>Article</legend>
    <div class="form-group">
        <label for="username" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-10">
            <input class="form-control" id="inputEmail" placeholder="Username" type="text">
        </div>
    </div>    
     <div class="form-group">
        <label for="password" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
            <input class="form-control" id="inputEmail" placeholder="Password" type="text">
        </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>


<?php $this->load->view('public/public_footer')?>

