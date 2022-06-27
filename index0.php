
<?php
echo(hideMyBugs(1,10));
?>

<?php
 function hideMyBugs($bugs, $places):string
{
    $freePlaces = [$places];


    for ($i=1; $i<=$bugs; $i++){
        $canHide=array_shift($freePlaces);
        $left=floor($canHide/2);
        if ($left>0) {
        array_push($freePlaces,$left);}
        else return 'no place to hide';
        $right = ceil($canHide/2)-1;
        if ($right>0) {
    array_push($freePlaces, $right);
            }
        else return 'no place to hide';
}
 return 'left: '. array_pop($freePlaces).' right: ' . array_pop($freePlaces);

}


?>