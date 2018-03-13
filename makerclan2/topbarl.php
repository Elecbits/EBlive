<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<div class="container-fluid" style="background-color:#0070FF;">






  <div id="topbar" class="col-lg-12   hidden-xs hidden-sm hidden-md " style=" float: right;  font-family: 'Montserrat', sans-serif; font-size: 12px;  padding:10px 20px 0px 0px; margin: 0px  10px 10px 0px; color: white;">

 
 



<div  class="navbar-right " >
 <span  style="padding-right: 400px; font-weight: 300; text-decoration:none; ">&nbspOhhh yeah, Elecbits Android App is realising soon !</span> 



   <a href="#" style="padding-left: 20px; ">&nbsp</a>
    <a href="#" style="padding-left: 20px; ">&nbsp</a>
    <a href="#" style="padding-left: 20px; ">&nbsp</a> 
    <a href="#" style="padding-left: 20px; ">&nbsp</a> 
    <a href="#" style="padding-left: 20px; ">&nbsp</a> 



 

</div>





    </div>  
 </div> 
 </div>



</body>
</html>



<script type="text/javascript">
    $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            {
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                }
            };  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

</script>