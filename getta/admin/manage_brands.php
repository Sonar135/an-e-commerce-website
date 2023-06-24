<?php
    include "../connect.php";

    if(isset($_POST["enter"])){
        $brand=$_POST["brand"];

        if($brand==""){
            echo "<script>
                alert('enter a brand name')
            </script>";
        }

        else{
            $query= mysqli_query($conn, "INSERT INTO `brands` (brand) VALUES('$brand')");

            
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
    
    <div class="insert_brand">
        <input type="text" name="brand" placeholder="enter brand name">
        <button name="enter">submit</button>
    </div>

    <div class="manage_brands">
        <div class="manage_button">
            see your brands
        </div>
    </div>

    
</form>
</div>

