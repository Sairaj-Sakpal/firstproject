<?php
        require("conn.php");
			$notarray = array();
            $query_not="select * from country_data";
            $result_not=mysqli_query($conn,$query_not);
                if(mysqli_num_rows($result_not)>0)
                {
                        while($row_not=mysqli_fetch_assoc($result_not))
                        {
                              
                                $notarray[] = array('name'=>$row_not["Name"],'roll'=>$row_not["Roll"],'country'=>$row_not["Country"],'number'=>$row_not["Number"]);
                        }
                }
            $data = array('Notification' => $notarray);
            print json_encode($data);
            mysqli_close($conn);
        
?>