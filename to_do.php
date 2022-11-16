<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $task_name=$_POST['Name'];
    $dbc = mysqli_connect('localhost','root','','to_do_list')
            or die('Not connected to database.');

    $query="INSERT INTO to_do_list (`TASK`) 
            VALUES ('$task_name')";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');

    echo 'Thanks for submitting';
   }
?>
        <script>
                if(confirm("Form is submitted successfully"))
                {
                        window.history.back();
                }
        </script>