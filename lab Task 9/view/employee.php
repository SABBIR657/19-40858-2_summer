<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
        integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">

    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    $(function() {
        $("#start_date").datepicker();
    });
    $(function() {
        $("#end_date").datepicker();
    });
    </script>

    <title>employee</title>

    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background: #edf2f5;
    }

    body {
        padding: 30px;
    }

    .dropdown {
        List-style-type: none;
    }

    .dropdown a b {
        color: #fff;
    }

    .dropdown-menu {
        border-radius: 0;
        padding: 10px;
        width: 145%;
    }

    .headItem {
        margin-top: -17px;
        margin-left: 42px;
    }
    </style>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #ffff; padding-bottom:19px;">
                    <strong>Search for Employee</strong>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTask"
                        style="float:right;">Add Employee</button>
                    <!-- Modal -->
                    <div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" id="postData">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="control-label">Employee Name</label>

                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="emp_name"
                                                        id="employee_name">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="control-label">Task/Role</label>

                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="task_details"
                                                        id="task_details">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="control-label">Start Date</label>

                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="start_date"
                                                        id="start_date">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="control-label">End Date</label>

                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="end_date"
                                                        id="end_date">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="control-label">Status</label>

                                                </div>

                                                <div class="col-md-6">
                                                    <select class="form-control" name="status" id="status">
                                                        <option>Select</option>
                                                        <option value="1">Completed</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">Hold</option>
                                                        <option value="4">Inprogress</option>
                                                    </select>


                                                </div>
                                            </div>
                                        </div>






                                        <div class="modal-footer">
                                            <input type="submit" value="Add Task" class="btn btn-primary" />
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                onclick="location.reload(true);">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>








                </div>

                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="emp_name" id="emp_name" class="form-control"
                                placeholder="Search Employee">
                        </div>
                    </form>
                </div>
            </div>
            <table class="table" style="background: #fff;">
                <caption>List of employees</caption>
                <thead>
                    <tr style="background: #4683de; color: #fff;">
                        <th style="width:15%">Emp. name</th>
                        <th style="width:30%">Task Details
                            <ul class="headItem">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <b class="caret"></b>
                                    </a>
                                </li>
                            </ul>
                        </th>

                        <th style="width:15%">Start Date</th>
                        <th style="width:15%">End Date</th>
                        <th style="width:15%"></th>
                        <th style="width:10%">Action</th>

                    </tr>
                </thead>
                <tbody id="post_list">

                </tbody>
            </table>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    $('#btn').on('click', function() {
        $('#myModal').modal('show');
    });
    </script>
</body>

</html>



<script type="text/javascript">
fetchData();

function fetchData() {
    var action = 'fetchData';

    $.ajax({
        url: "action.php",
        method: "POST",
        data: {
            action: action
        },
        success: function(data) {
            $('#post_list').html(data);
            // alert(data);
        }
    });

}

$(document).ready(function() {
    $('#postData').submit(function(event) {
        event.preventDefault();

        var emp_name = $('#employee_name').val();
        var task_details = $('#task_details').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var status = $('#status').val();

        if (emp_name != "" || task_details != "" || start_date != "" || end_date != "" || status !=
            "") {
            $.ajax({
                url: "upload.php",
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(data) {
                    alert(data);
                    $('#addTask').modal('hide');
                    location.reload();
                }
            });
        } else {
            alert('Please fill all the details');
        }

    });

});

$(document).ready(function() {
    //searching employee details 

    $('#emp_name').keyup(function(event) {
        event.preventDefault();
        var action = 'searchRecord';
        var emp_name = $('#emp_name').val();
        if (emp_name != '') {
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action,
                    emp_name: emp_name
                },
                success: function(data) {
                    //alert(data);
                    $('#post_list').html(data);
                }
            });
        }
    });
});
</script>