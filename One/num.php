<?php
 $numb=$_POST['number'];
 $flag=0;
 $arr=str_split($numb);
 $status=true;
 //echo $arr[0];
 $status=strpos($numb,"ab");
 //echo $status;
 if($arr[0]=='+' && $arr[1]=='9' && $arr[2]=='1')
 	$flag=1;
 //if(strpos($numb,"+91")==FALSE)
 //{
 //	echo "non-valid";
    
 //}
 
 //echo "flag=".$flag;
 if($flag==1)
 {
 	$val=ltrim($numb,"+91");
 	if(is_numeric($val))
 	{
       if(strlen($val)==10)
       	echo "Your response is correct";
       else
       	echo "You have less or more number of digits";
 	}
 	else
 		echo "Number must be valid";

 }
 else
 	echo "Only Indian users are allowed";


?>