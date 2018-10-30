<?php
        $flag=0;
        $b=50;
        $sq=sqrt($b); 

        for($i=$b;$i>=0;$i--)
        {

            if($i%2!=0)
            {
                    for($b=3;$b<=$sq;$b++)
                    {
                            if($i%$b!=0)
                            {
                                $flag=1;
                            }
                            elseif($i%$b==0)
                            {
                                $flag=0;
                                break;
                            }
                    }
            if($flag==1){ 
                echo('highest prime number is '.$i);  
                break;
            }
        }
    }
?>