<!DOCTYPE>
<html>
    <head>
        <title>Articles list</title>
        <?= link_tag('assets/css/bootstrap.min.css')?>
    </head>
    <body>
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li class="disabled"><a>Disabled</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
  </li>
</ul>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
