<html>
    <body style="background-color:pink">
        <div style="color:green">
            <center style="font-size:20px">
                <?php
$num=$_POST['n'];
$i=1;
for($i=1;$i<=10;$i++){
    $table=$i*$num;
    echo $table;
    echo"<br>";
}
?>

            </center>
            
        </div>
        
    </body>
</html>





