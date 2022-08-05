<?php
include("../config/db.php");

if(isset($_POST['action']))
{
    $output = '';

    if($_POST['action'] == 'fetchData'){
        $query = "SELECT * FROM datafilter JOIN status ON datafilter.status = status.status_id ORDER BY datafilter.id DESC";

        getData($query);
    }

    //search employee name 

    if($_POST['action'] == 'searchRecord'){
        $emp_name = $_POST['emp_name'];
        $query = "SELECT * FROM datafilter JOIN status ON datafilter.status = status.status_id WHERE emp_name LIKE '%$emp_name%' ORDER BY datafilter.id DESC";
        getData($query);
    }
}

function getData($query)
{
    include("../config/db.php");

    $output = "";
    $total_row = mysqli_query($connect, $query) or die ('error');
    if(mysqli_num_rows($total_row)>0){
        foreach($total_row as $row){
            $output .= '
            <tr>
            <td>'.$row['emp_name'].'</td>
            <td>'.$row['task_details'].'</td>
            <td>'.$row['start_date'].'</td>
            <td>'.$row['end_date'].'</td>
            <td>'.$row['taskStatus'].'</td>

            <td>
                <a href = "" style ="margin:5px;" class="label label-danger" data-val='.$row['id'].'><i class="fa fa-trash " style = "font-size: 12px;"></i>Delete</a>
            </td>

            </tr>
            ';
        }
    }

    else{
        $output = "<h2>Post not found!!</h2>";
    }

    echo $output;


}

?>