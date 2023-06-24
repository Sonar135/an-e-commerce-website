<?php
    include "../connect.php";

    if(isset($_POST["enter"])){
        $category=$_POST["category"];

        if($category==""){
            echo "<script>
                alert('enter a category name')
            </script>";
        }

        
       else{
        $query= mysqli_query($conn, "INSERT INTO `categories` (category) VALUES('$category')");
        
        if($query){
            echo "<script>
            alert('done')
        </script>";
        }
       }     
        

    }
?>





<div class="insert_brands">
<form action="" method="post">
 <div>
    <div class="insert_brand">
        <input type="text" name="category" placeholder="enter category name">
        <button name="enter">submit</button>
    </div>

    <div class="manage_brands">
        <div class="manage_button">
            see your categories
        </div>
    </div>
    </div>
  
</form>
</div>