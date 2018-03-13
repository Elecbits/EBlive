<html>
<head>
<title>PHP microsoft docx file Upload script</title>
</head>
<body>
<div><?php
if ( isset( $_FILES['docFile'] ) ) {
    if ($_FILES['docFile']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
        $source_file = $_FILES['docFile']['tmp_name'];
        $dest_file = "admin_area/".$_FILES['docFile']['name'];
            
        if (file_exists($dest_file)) {
            print "The file name already exists!!";
        }
        else {
            move_uploaded_file( $source_file, $dest_file )
            or die ("Error!!");
            if($_FILES['docFile']['error'] == 0) {
            print "File was successfully uploaded!! <br/><br/>";
            print "<b><u>Details : </u></b><br/>";
            print "File Name : ".$_FILES['docFile']['name']."<br.>"."<br/>";
            print "File Size : ".$_FILES['docFile']['size']." bytes"."<br/>";
            print "File location : admin_area/".$_FILES['docFile']['name']."<br/>";
            }
        }
    }
    else {
        if ( $_FILES['docFile']['type'] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
            print "Error occured while uploading file : ".$_FILES['docFile']['name']."<br/>";
            print "Invalid  file extension, should be docx !!"."<br/>";
            print "Error Code : ".$_FILES['docFile']['error']."<br/>";
        }
    }
}
?></div>
<form enctype="multipart/form-data"
    action="<?php print $_SERVER['PHP_SELF']?>" method="post">
<p><input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> <input
    type="file" name="docFile" /><br />
<input type="submit" value="upload!" /></p>
</form>
</body>
</html>