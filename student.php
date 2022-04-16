<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php';?>
<body>

<?php include_once 'partials/nav.php';?>

<hr>





<div class="content-area">
    <a href="student-add.php">Add Student</a>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Semester</th>
                <th>Section</th>
                <th>Group</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>shakib</td>
                <td>3</td>
                <td>scince</td>
                <td> 
                    <a href="student-edit.php?i=1"> Edit</a>
                    <a href="">Delet</a> 
            </td>
           </tr>
            </tbody>

          <tfoot>
              <tr>
                <th>ID</th>
                <th>Class</th>
                <th>Roll</th>
                <th>Section</th>
                <th>Action</th>
              </tr>
          </tfoot>
        </table>

</div>

<hr>
<?php include_once 'partials/footer.php';?>

    
</body>
</html>