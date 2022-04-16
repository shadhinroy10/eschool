<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php';?>
<body>

<?php include_once 'partials/nav.php';?>



<hr>





<div class="content-area">
    
        <div> 
        <form method="POST" action="controller/classcontroller.php">
            <div class="form-group">
                <label> full name</label>
                <input type="text" name="name" id="name" class="input" placeholder="Insert class name">

                <?php
                
                if(isset($_GET['name_error'])){

                ?>
                <small id="name_error" style="color: red"> 
            <?php echo $_GET['name_error'];?>
            </small>
                <?php
                }
                
                ?>


                
            </div>
        

           <button type="submit" name="add">Add Student</button>
        </form>
        </div>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th> #</th>
                        <th>class/semester</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                
                $sql = "SELECT * FROM semester";
                $query = $conn->query($sql);
                
                ?>

                    
                    <tr>
                        <td>1</td>
                        <td>6</td>
                        <td>
                            <a href="">edit</a>
                            <a href="">delete</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    

</div>

<hr>
<?php include_once 'partials/footer.php';?>
<script>
    $('#name').keyup(function(event){
        if($(this).val() !=''){
            $('#name_error').html('');
        }
    }); 
</script>

    
</body>
</html