
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./CSS/index.css">

</head>
<body>

<div class="wrapper" >
  <div class="inner-warpper text-center">
    <h2 class="title">Enter  password</h2>
    <form action="actions/update_password.php" id="formvalidate" method="post">
      <div class="input-group">  
        <label class="palceholder" for="userName" >Enter Password</label>
        <input type="password" class="form-control" name="password" id="userEmail" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">  
        <label class="palceholder" for="userName" >New Password</label>
        <input type="password" class="form-control" name="confirm_password" id="userEmail" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <button type="submit" id="reset" name="reset">reset</button>
    </form>
  </div>
</div>
<!<!-- partial -->
   <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./javascript/jscript.js"></script>
</body> 
</html>
