<html>
<?php
/*
Template Name: Contact us
*/
?>
<style>
body{
    margin:0;
    padding:0;
}    
.popup{
    display:flex;
    justify-content:center;
    text-align:center;
    border:1px solid black;
    padding:2px 10px;
    height:200%;
    width: 50%;
}
.main-popup{
   
    display:flex;
    justify-content:center;
    text-align:center;
}
.font-name{
    font-size:25px;
    margin-top:20px;
}
.box{
    padding:3px 20px;
    border:1px solid black;
}
</style>
    <body>
            <?php get_header() ?>
            <div class=main-popup>
                <div class=popup>
                    <form method="POST" >
                        <label class="font-name"> Enter Name-</label>
                        <input type="text" placeholder="Enter your number" name="nm" class="box">
                        <br><br>
                        <label class="font-name"> Enter Number-</label>
                         <input type="tel" value="" placeholder="Enter your number" name="number" class="box">
                        <br><br>
                        <input type="submit" value="submit" name="insert" class="box">
                        <br>

                    </form>   
                    <?php
                    if(isset($_POST['insert'])){
                        $n=$_POST['nm'];
                        $p=$_POST['number'];
                        global $wpdb;
                        $sql=$wpdb->insert("record",array("name"=>$n,"number"=>$p));
                        if($sql==true){
                            echo "<script>alert('data inserted')</script>";
                        }
                    }
                    ?>
                </div>
            </div>   
    
        <?php get_footer() ?>
    </body>
    </html>