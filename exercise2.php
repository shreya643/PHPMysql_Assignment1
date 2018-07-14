<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 7/13/18
 * Time: 9:25 AM
 */
function countWords($str)
{
    $words=explode(' ',$str);

    for($i=0;$i<=(count($words)-1);$i++)
    {
        $count=0;
        for ($j=0;$j<=(count($words)-1);$j++)
        {
        if(strcasecmp($words[$i],$words[$j])==0)
        {
            $count+=1;
        }
        }
        $word[$words[$i]]=$count;
    }

    foreach($word as $x => $x_value) {
        echo  $x . "= " . $x_value;
        echo "<br>";
    }

}

if (isset($_GET['submit']))
{
    $sen=$_GET['sentence'];
    countWords($sen);
}
?>
<html>
<head>
</head>
<body>
<form method="get" action="exercise2.php">
    <label>Sentence</label>
    <input type="text" name="sentence">

    <input type="Submit" value="Submit" name="submit">

</form>

</body>
</html>
