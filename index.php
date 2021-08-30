<!DOCTYPE html>
<html lang="en">

<?php 
  
  include 'db.php';

  $sql = "SELECT * FROM tasks ";

  $rows=$db->query($sql);

?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Todo App</title>
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <center>
                <h1>Todo List</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                    <button type="button" class="btn btn-default pull-right">Print</button>
                    <hr><br>

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Task</h4>
                                </div>
                                <div class="modal-body">
                                   <form >
                                     <div class="form-group">
                                       <label >Task Name</label>
                                       <input type="text" required name="task" class="form-control">
                                     </div>
                                     <input type="submit" name="send" value="send" class="btn btn-success">
                                   </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php  while($row= $rows->fetch_assoc());  ?>
                           
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td class="col-md-10"><?php echo $row['name'] ?></td>
                            <td><a href="" class="btn btn-success">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>   <?php var_dump($row)?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>