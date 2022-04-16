<!DOCTYPE html>
<html lang="en">
<?php include_once 'partials/head.php';?>
<body>

<?php include_once 'partials/nav.php';?>

<hr>





<div class="content-area">

    <a href="student.php">Back</a>

    <div>
        <form>
            <div class="form-group">
                <label> full name</label>
                <input type="text" name="name" id="name" class="input" placeholder="Insert student name">
                <small style="color: red"> please insert student name</small>
            </div>
           <div class="form-group">
               <label>Roll</label>
               <input type="text" name="roll" id="name" class="input" placeholder="Insert student roll">
               <small style="color:red">please insert student roll</small>

           </div>

           <div class="form-group">
               <label for="">Semester</label>
            <select class="input-select" name="Semester" id="Semester">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
            </select>
        </div>

           <div class="form-group">
               <label for="">Section</label>
            <select class="input-select" name="Section" id="Section">
                <option value="">A</option>
                <option value="">B</option>
                <option value="">C</option>
                <option value="">D</option>
                <option value="">E</option>
                <option value="">F</option>
                <option value="">G</option>
                <option value="">H</option>
                <option value="">I</option>
            </select>
           </div>

           <div class="form-group">
               <label for="">Group</label>
            <select class="input-select" name="Group" id="Group">
                <option value="">Science</option>
                <option value="">Commers</option>
                <option value="">Arts</option>
               
            </select>
           </div>

           <button type="submit" name="add">Add Student</button>
        </form>

</div>

<hr>
<?php include_once 'partials/footer.php';?>

    
</body>
</html>