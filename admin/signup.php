<!DOCTYPE HTML>
<html>
<head>

<title>New user signup </title>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Power Switch</title>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.2.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet"/>
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="main container">
<div class="section">
<div class="row">
<div class="col-md-6 ml-auto mr-auto">
<h4 class="title mt-2">User Registration</h4>
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <label for="pwd" class="bmd-label-floating"> User Id</label>
   <input type="text" class="form-control" id="name" name="user_id"><br><br>

   <label for="pwd">Password</label>
   <input type="password" class="form-control" id="login" name="login"><br><br>
     
   <label for="pwd"> Confirm  Password </label>
   <input type="password" class="form-control" id="pass" name="pass"><br><br>

   <label for="uname" >Full Name</label>
   <input type="text" id="name" class="form-control" name="name"><br><br>
       
   
   <label for="uname">Email address</label>
   <input type="text" id="email" class="form-control" name="email"><br><br>
    
   <input type="submit" class="btn btn-info" name="submit" value="Signup">
	<p>Already Register <a href="index.php" class="btn-link mt-3">Login here</a></p>
                              

</form>
</div>
</div>
</div>
</div>


 
<script src="../assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
</body>
</html>