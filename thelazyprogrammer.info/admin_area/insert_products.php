<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<!DOCTYPE html>
<?php

include("include/db.php");

?>

<html>
<head>
	<title>Insert Posts</title>
	<meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
</head>
<body>

<div class="jumbotron" >
	

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">INSERT THE POSTS</h3>





<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
    <form action="" method="post" enctype="mutlipart/form" >
    <tr>
	    <td>Post ID :</td>
		<td> <input type="text" name="post_id" size="60" required /></td> 
	</tr>
	<tr>
	    <td>Post Title :</td>
		<td> <input type="text" name="post_title" size="60" required /></td> 
	</tr>


<tr>
      <td>Post Main Category </td>
    <td> <select name="m_category" required />
      <option>Android</option>
      <option>Java</option>
      <option>C</option>
      <option>C++</option>
           
    </select>
     </td> 
  </tr>




















	<tr>
	    <td>Post Category </td>
		<td> <select name="category" required />
			<option>Select your category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysql_query($get_cats, $con);


                     while ($row_cats = mysql_fetch_array($run_cats) ) 
               {
    	             $cat_id = $row_cats['cat_id'];
    	             $cat_title = $row_cats['category'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?>

		</select>
		 </td> 
	</tr>
	<tr>
	    <td>Post Sub-category:</td>
		<td> <select name="sub_category" id="mydropdown" required/>
			<option>Select your Sub-category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from subcategories";
                     $run_cats = mysql_query($get_cats, $con);


                     while ($row_cats = mysql_fetch_array($run_cats) ) 
               {
    	             $cat_id = $row_cats['subcat_id'];
    	             $cat_title = $row_cats['subcat'];

        
          
                     echo "<option > $cat_title </option> ";
                  


                 } 

              

             ?>

		</select>
		 </td> 
	</tr>
	<!--<tr>
	    <td>Post Category 3:</td>
		<td> <select name="Post_cat3" id="mydropdown" required/>
			<option>Select your category</option>
             <?php
               
            	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysql_query($con,$get_cats);


                     while ($row_cats = mysql_fetch_array($run_cats) ) 
               {
    	             $cat_id = $row_cats['cat_id'];
    	             $cat_title = $row_cats['cat_title'];

        
          
                     echo "<option > $cat_title </option> ";
                  

                 } 

              

             ?> 

		</select>
		 </td> 
	</tr>

	<tr>
	    <td>Post Category 4 :</td>
		<td> <select name="Post_cat4" id="mydropdown" required/>
			<option>Select your category</option>
             <?php
              
                	global $con ;
    
                     $get_cats = "select * from categories";
                     $run_cats = mysql_query($con,$get_cats);


                     while ($row_cats = mysql_fetch_array($run_cats) ) 
               {
    	             $cat_id = $row_cats['cat_id'];
    	             $cat_title = $row_cats['cat_title'];

        
          
                    echo "<option> $cat_title </option> ";
                  

                 } 

              

             ?>

		</select>
		 </td> 
	</tr> -->
<!--
	<tr>
	    <td>Post Image 1:</td>
		<td> <input type="file" name="uploadedfile" required/>
         
      </td> 
	</tr>

	
	<tr>
	    <td>Post Image 2:</td>
		<td> <input type="file" name="Post_image2" required/></td> 
	</tr>

		<tr>
	    <td>Post Image :</td>
		<td> <input type="file" name="Post_image" required/></td> 
	</tr>
-->



  <tr>      <td>Code-1</td>
    <td> <textarea class="ckeditor" id="editor"  name="code" ></textarea> </td> 
  </tr>

    <tr>      <td>Code-2</td>
    <td> <textarea class="ckeditor" id="editor"  name="code1" ></textarea> </td> 
  </tr>


  <tr>      <td>Code-3</td>
    <td> <textarea class="ckeditor" id="editor"  name="code2" ></textarea> </td> 
  </tr>

  

  <tr>      <td>Code-4</td>
    <td> <textarea class="ckeditor" id="editor"  name="code3" ></textarea> </td> 
  </tr>

    <tr>      <td>Code-Explaination</td>
    <td> <textarea class="ckeditor" id="editor"  name="code_explain" ></textarea> </td> 
  </tr>



  <tr>
      <td>Code snippet</td>
    <td> <textarea name="code_s"  cols="20" rows="10" style="margin: 0px; width: 540px; height: 176px;"></textarea> </td> 
  </tr>























	<tr>
	    <td>Author Name :</td>
		<td> <input type="text" name="author_name" required/></td> 
	</tr>

  <tr>
      <td>Author facebook :</td>
    <td> <input type="url" name="author_face" required/></td> 
  </tr>
 <tr>
      <td>Author LinkedIn :</td>
    <td> <input type="url" name="author_linkedIn" required/></td> 
  </tr>
 <tr>
      <td>Author Image Link :</td>
    <td> <input type="url" name="author_image" required/></td> 
  </tr>


 <tr>
      <td>Author Bio</td>
    <td> <textarea name="author_bio"  cols="20" rows="10" style="margin: 0px; width: 540px; height: 176px;"></textarea> </td> 
  </tr>






<tr>
      <td>Youtube Link :</td>
    <td> <input type="url" name="author_youtube" required/></td> 
  </tr>





	<tr>
	    <td>Post Keywords :</td>
		<td> <input type="text" name="post_keywords" size="50" required/></td> 
	</tr>
	



<tr>
      <td></td>
    <td> <input type="submit" name="insert_post" value="Inerst the Post" ></td> 
  </tr>


  </table>
</div>
</form>


</div>



         

</body>
</html>


<?php

if ( (isset($_POST['insert_post'])) || (isset($_FILES['uploadedfile']) )) {
	//getting the text data

   $Post_id=$_POST['post_id']; 
   $Post_title= $_POST['post_title'];
   $Post_cat= $_POST['category'];
   $sub_category= $_POST['sub_category'];
   $code= $_POST['code'];
   $code1= $_POST['code1'];
   $code2= $_POST['code2'];
   $code3= $_POST['code3'];

   $code_explain= $_POST['code_explain'];
   $code_s = $_POST['code_s'];
   $author_name= $_POST['author_name'];  
   $author_face= $_POST['author_face'];
   $author_linkedIn = $_POST['author_linkedIn'];
   $author_image= $_POST['author_image'];  
   $author_bio= $_POST['author_bio'];  

   $author_youtube = $_POST['author_youtube'];
   $post_keywords= $_POST['post_keywords'];
    $m_category = $_POST['m_category'];
   
      

   $insert_Post = "INSERT INTO post (post_id , post_title, m_category, category, sub_category  , code, code1, code2, code3, code_explain, code_snippet, author_name, author_face, author_linkedIn, author_image, author_bio,  author_youtube , post_keywords) VALUES ('$Post_id','$Post_title','$m_category','$Post_cat','$sub_category', '$code' , '$code1', '$code2', '$code3' , '$code_explain', '$code_s', '$author_name', '$author_face', '$author_linkedIn', '$author_image', '$author_bio' ,'$author_youtube','$post_keywords') ";


 



  
if (mysql_query( $insert_Post, $con)) {
    echo "New record created successfully";

    echo "<script>alert('Post has been added')</script>";
    echo "<script>window.open('index.php?view_products','_self')</script>";
} else {
    echo "Error: " . $insert_Post . "<br>" . mysql_error($con);
}
}




 


    
?>


<?php } ?>