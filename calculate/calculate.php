<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简单的计算器</title>
    <style>
        .wrap{
            width: 500px;
            height: 300px;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["sub"])){
    //文本框num1 ，num2 是否为空的标记，默认true 表示不为空
    $num1=true;
    $num2=true;
    //文本框num1，num2是否为数字的标记，默认true表示是数字
    $numa=true;
    $numb=true;
    //错误信息
    $message="";
    //判断num1是否为空
    if ($_GET["num1"]==""){
        $num1=false;
        $message.="第一个文本框不能为空";
    }
    //判断num1是否为数字
    if (!is_numeric($_GET["num1"])){
        $numa=false;
        $message.="第一个文本框必须为数字！";
    }
    //这里开始判断第二个文本框的值，方法和第一个相同
    if ($_GET["num2"]==""){
        $num2=false;
        $message.="第二个文本框不能为空";
    }
    if (!is_numeric($_GET["num2"])){
        $numb=false;
        $message.="第二个文本框必须为数字";
    }

    //对两个文本框输入的值进行计算
    if($num1&&$num2&&$numa&&$numb){
        //计算结果
        $sum=0;
        switch ($_GET["ysf"]){
            case "+":
                $sum=$_GET["num1"]+$_GET["num2"];
                break;
            case "-":
                $sum=$_GET["num1"]-$_GET["num2"];
                break;
            case "x":
                $sum=$_GET["num1"]*$_GET["num2"];
                break;
            case "/":
                $sum=$_GET["num1"]/$_GET["num2"];
                break;
            case "%":
                $sum=$_GET["num1"]%$_GET["num2"];
                break;
        }
    }
}
?>


<div class="wrap">
    <h1>计算器</h1>
    <form  action="" method="get">
    <table border="1px solid black">
           <tr>
               <td>
                   <input type="text"size="10" name="num1" value="<?php if(isset($_GET["num1"])) echo $_GET["num1"];?>">
               </td>
               <td>
                   <select name="ysf">
                       <option value="+" <?php if (isset($_GET["ysf"])){if ($_GET["ysf"]=="+") echo "selected";} ?>>+</option>
                       <option value="-" <?php if (isset($_GET["ysf"])){if ($_GET["ysf"]=="-") echo "selected";} ?>>-</option>
                       <option value="x" <?php if (isset($_GET["ysf"])){ if ($_GET["ysf"]=="x") echo "selected";} ?>>x</option>
                       <option value="/" <?php if (isset($_GET["ysf"])){if ($_GET["ysf"]=="/") echo "selected"; } ?>>/</option>
                       <option value="%" <?php if (isset($_GET["ysf"])){if ($_GET["ysf"]=="%") echo "selected";} ?>>%</option>
                   </select>
               </td>
               <td>
                   <input type="text" size="10" name="num2" value="<?php if (isset($_GET["num2"])) echo $_GET["num2"]; ?>">
               </td>
               <td>
                   <input type="submit" name="sub" value="计算">
               </td>
           </tr>
<!--        输出计算的结果-->
        <?php
        if (isset($_GET["sub"])){
            echo "<tr><td colspan='4'>";
            if ($num1&&$num2&&$numa&&$numb){
                echo "结果是：".$_GET["num1"]."  ".$_GET["ysf"]."  ".$_GET["num2"]."=".$sum;
            }
            else{
                echo $message;
            }
            echo "</td></tr>";
        }
        ?>
    </table>
    </form>
</div>
</body>
</html>