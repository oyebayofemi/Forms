
<title>Contact Us</title>
<html>
<h1>Contact Us</h1>
    <form method="post">

        First Name: <input type="text" name="fname" required /><br />
        Last Name: <input type="text" name="lname" required /><br />
        Email: <input type="text" name="email" /><br />
        Mobile Number: <input type="text" name="mobile" maxlength="11" /><br />
        <select name="gender">
        <option value="">Gender</option>
        <option>male</option>
        <option>female</option>
        <option>Transgender</option>
    </select><br />
    <br/>
    Your Message:
    <textarea name="data">

      <?php echo @$contents ; ?>

       </textarea><br />

        <input type="submit" value="Save" name="save" />

    </form>

    </html>
    <?php

    if(isset($_POST['save']))

    {

    	$f=$_POST['fname'];
      $l=$_POST['lname'];
      $e=$_POST['email'];
      $g=$_POST['gender'];
      $m=$_POST['mobile'];
      $cvsData = $f.",".$l.",".$e.",".$m.",".$g;

    	$ext= '.csv';

    	$data=$_POST['data'];

    	$file=$f.$ext;

    	if(file_exists($file))

    	{

    	echo "<font color='red'>FILE ALREADY EXISTS</font>";

    	}

    	else	{

    	$fo = fopen($file,"w");

    	fwrite($fo,$cvsData);

    	echo "<font color='green'>YOUR DATA IS SAVED</font>";

    	}

    }

    ?>
