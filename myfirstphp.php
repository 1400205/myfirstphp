<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    echo "<p>Hello World</p>";


    echo "<p>Hello," . " " . "world" . "!</p>";
    $myname="Prosper";
    $myage="111";
    echo "<p>my name is ". $myname ." and my age is " . $myage;

    //if else statement
    $surname="yeng";
    if ($surname=="prosper")
    {echo "i know you";
    }
    else
    {echo"<p>i dont know you";

    }

$myage=18;
if ($myage>16)
{echo "<P>Yaw you can buy specs ";

}
    elseif($myage>18)
    {
        echo "Kwame you can buy mugs ";

    }

elseif($myage>21)
{
    echo "Kwame you can buy sausage rolls  ";

}

    else
    {echo "done";}

$mygoods=mugs;
    switch ($mygoods) {
        case specs:
            echo "you have to be more than 16";
            break;

        case mug:

            echo "you have to be more than 18";
            break;

        case mug:

            echo "you have to be more than 18";
            break;



    }


//working through arrays
$provisionedActivities=Array(drugs,specs,rucks,rolls);
    echo "<p></p>";
    foreach($provisionedActivities as $s)
    {print "<p> $s</p>";}
    $mymonthdays = 0;
    $mymonth = "september";
    switch ($mymonth) {
        case "september":
            $mymonthdays = 30;
            break;
        case "january":
    }

    $timezone = date_default_timezone_get();
    echo "The current server timezone is: " . $timezone;

    $date = date('m/d/Y h:i:s a', time());
    echo "The current server date is: " . $date;
    ?>
</p>
</body>
</html>
