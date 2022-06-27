
<?php
echo 'Задача о жуках';
echo '</br>';
echo(hideMyBugs(2,8)); //вводим значения с помощью параметров функции
?>

<?php
function hideMyBugs($bugs, $places):string
{
    $canHideLeft = $places-1;
    $canHideRight=$places;
$left=0;
$right=0;
    for ($i=1; $i<=$bugs; $i++){
        $canHideLeft = $canHideLeft-$left;
        $left=ceil($canHideLeft/2)-1;
        if ($left<=0)
         return 'no place to hide';
       $canHideRight=$canHideRight-$right;
        $right = ceil($canHideRight/2);
        if ($right<=0)
         return 'no place to hide';
    }
    return 'left: '. $left.' right: ' . $right;
}
?>
