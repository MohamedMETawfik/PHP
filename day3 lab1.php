<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $AgreeErr = $groupErr = "";
$name = $email = $gender = $comment = $class_details = $courses = $Agree = $group = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["group"])) {
    $group = "";
  } else {
    $group = test_input($_POST["group"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["class_details"])) {
    $class_details = "";
  } else {
    $class_details = test_input($_POST["class_details"]);
  }

  if(isset($_POST['courses'])&& !empty($_POST['courses'])){
    $courses = $_POST['courses'];
}

  if (empty($_POST["agree"])) {
    $AgreeErr = "Click here";
  } else {
    $Agree = test_input($_POST["agree"]);
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>Application name: AAST_BIS class registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Group #: <input type="text" name="group">
  <span class="error"><?php echo $groupErr;?></span>
  <br><br>
  Class details: <textarea name="class_details" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Select Courses:
  <select name="courses[]" multiple ="multiple">
    <option value="PHP">PHP</option>
    <option value="JavaScript">JavaScript</option>
    <option value="MySQL">MySQL</option>
    <option value="HTML">HTML</option>
  </select>
  <br><br>
  Agree:
  <input type="checkbox" id="agree" name="agree" value="agree">
  <span class="error">* <?php echo $AgreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $group;
echo "<br>";
echo $class_details;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
foreach($courses as $value) {
  echo $value;
}


?>
</body>
</html>