<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chessboard</title>
    <style>
#container{
    display:grid;
    grid-template-rows:repeat(8,30px);
    grid-template-columns:repeat(8,30px);
   
}
.cell{
    height:30px;
    width:30px;
    border:solid;
    text-align:center;

}
.white{
    background-color:white;

}
.black{
    background-color:grey;
}

    </style>
</head>
<body>
    <h2>chessboard</h2>
    <div id="container">
        <?php
        $is_white=true;
        for($row=1;$row<=8;$row++){
            for($col=1;$col<=8;$col++){
                $cellcolor=$is_white?"white":"black";
                echo "<div class='cell $cellcolor'>$row,$col</div>";
                $is_white=!$is_white;
            }
            $is_white=!$is_white;
        }
        ?>
    </div>
</body>
</html>