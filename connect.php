<?php
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="exam management";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
echo"Unable to connect database".mysqli_error($conn);
die;
}

$dateforexm=date("Y/m/d");
$sqlexm="select * from student_visibility where exam_status=1";
$resexm=$conn->query($sqlexm);
if($resexm->num_rows>0)
{
    while($rotexm=$resexm->fetch_assoc())
    {
        $exmid=$rotexm["id"];
        $upexmdu="select DATEDIFF(du_date,date) as diff from student_visibility where id='$exmid'";
        $resupexdm=$conn->query($upexmdu);
        if($resupexdm->num_rows>0)
        {
            $roupexmdu=$resupexdm->fetch_assoc();
            $diff=$roupexmdu["diff"];
            if($diff>0)
            {
                $upexm="update student_visibility set exam_status=0 where id='$exmid'";
                if($conn->query($upexm))
                {
                    
                }
    
            }
        }
       
           
            
        
    }
}


$dateforexmf=date("Y/m/d");
$sqlexmf="select * from examduty where exam_status=1";
$resexmf=$conn->query($sqlexmf);
if($resexmf->num_rows>0)
{
    while($rotexmf=$resexmf->fetch_assoc())
    {
        $exmidf=$rotexmf["id"];
        $upexmduf="select DATEDIFF(du_date,Date) as diffe from examduty where id='$exmid'";
        $resupexdmf=$conn->query($upexmduf);
        if($resupexdmf->num_rows>0)
        {
            $roupexmduf=$resupexdmf->fetch_assoc();
            $diffe=$roupexmduf["diffe"];
            if($diffe>0)
            {
                $upexmf="update examduty set exam_status=0 where id='$exmid'";
                if($conn->query($upexmf))
                {
                    
                }
    
            }
        }
       
           
            
        
    }
}

?>