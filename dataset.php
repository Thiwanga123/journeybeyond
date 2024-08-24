<?php
$color1; 
$imagePath;
$text1;
$text2; 
$bottomText;
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        .Datasection{
            width:250px;
            height:120px;
            border-radius: 5px;
            padding: 20px;
            gap: 10px;
            color:rgba(255,255,255,1);
            box-shadow:0px 1px 3px 0px rgba(166,175,195,0.4);
            background-color: #FEFFFF;
            display: flex;
            flex-direction: column;

        }

        .sec1{
            width: 156px;
            height: 100px;
            gap:20px;
            display: flex;
            flex-direction: column;

        }

        .top{
            width: 156px;
            height: 50px;
            gap: 14px;
            display: flex;
        }

        .left{
            width: 50px;
            height: 50px;
           
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .icon{
            width: 26px;
            height: 26px;
            top: 12px;
            left: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            

        }
        .insert{
            width: 23.5px;
            height: 24.57px;
            top: 0.7px;
            left:1.22px;
            background-color: transparent;
            
            background-size: cover;
            background-position: center;
            
            
        }

        .right{
            width: 92px;
            height: 46px;
            display: flex;
            flex-direction: column;

        }

        .text1{
            width: 92px;
            height: 24px;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500;
            color: rgba(17, 25,40, 1);
            font-family: 'Inter';

        }

        .text2{
            width: 92px;
            height: 22px;
            font-size: 15px;
            line-height: 22px;
            font-weight: 400;
            color: rgba(99, 155, 129, 1);
            font-family: "Inter";
        }

        .bottom{
            width: 128px;
            height: 50px;
            font-weight: 700;
            font-size: 35px;
            line-height: 30px;
            color: rgb(17, 25, 40,1);
            font-family: "Inter";

        }

        .sec2{
            width: 184.2px;
            top: 144px;
            left: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<!-- <body> -->
    <div class="Datasection">
        <div class="sec1">
            <div class="top">
                <div class="left" style=" background-color: <?php echo $color1; ?>;">
                    <div class="icon">
                        <div class="insert" style="background-image: url('<?php echo $imagePath; ?>'); ">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="text1">
                    <?php echo $text1; ?>
                    </div>
                    <div class="text2">
                    <?php echo $text2; ?>
                    </div>
                </div>
            </div>
            <div class="bottom">
            <?php echo $bottomText; ?>
            </div>
        </div>
        <div class="sec2" style=" border: 2px solid <?php echo $color1; ?>;
            color: <?php echo $color1; ?>;">

        </div>
    </div>
<!-- </body> -->
</html>