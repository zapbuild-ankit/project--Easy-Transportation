<body>
  <div class='rounded mb-2 w-10 0 h-70 p-4 ' style='background-color: #eee;'>
    <h1 style='color:red;'>Register here</h1>
<?=$this->Form->create($admin)?>
<!--<form method ='post'>
  <div class="form-group">
    <label for="yourname">Yourname:</label>
    <input type="text" class="form-control" placeholder="Enter your name" id="name">
  </div>
  <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" placeholder="Enter username" id="username">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="password">
  </div>
  <div class="form-group">
    <label for="email">email:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="username">mobileno:</label>
    <input type="text" class="form-control" placeholder="Enter mobile no" id="mobile">
  </div>
  <div class='form-group'>
    <label for="role">Select Your Role:</label></div>
   <label class="radio-inline"><input type="radio" name="optradio" checked>0</label>
<label class="radio-inline"><input type="radio" name="optradio">1</label>
  <div class="form-group form-check">
<div>-->
<?php
echo $this->Form->control('name', ['class'     => 'form-control', 'label'     => 'yourname*']);
echo $this->Form->control('username', ['class' => 'form-control', 'label' => 'username*']);
echo $this->Form->control('password', ['class' => 'form-control', 'label' => 'password*']);
?>
<?=' Already a user? '?>
<a  href="/Users/login" style ="color:red;">LOGIN</a><br>
<?=$this->Form->button('Submit', ['class' => 'btn btn-success btn-lg'])?></div>
<?=$this->Form->end()?>
</body>
</html>