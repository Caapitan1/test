<?php
$number= 100;
$mamber= 2;
while($number > $mamber) {$number= $number / $mamber; }
echo $number;

?>
<p>
    <?php
    $kvadrat=2;
    $kvadrats=$kvadrat* $kvadrat;
    while ($kvadrats< 100) {
        $kvadrats=$kvadrats*$kvadrats;
    }
    echo $kvadrats
    ?>
</p>
<p>
    <?php
    $name= 'Алексей ';
    $surname= 'Гавычев ';
    $age= '27 ';
    $array= [$name,$surname,$age];
    echo 'Имя: ' , $array [0] ;
    echo 'Фамилия: ', $array [1 ] ;
    echo 'Возраст: ', $array [2 ], 'лет' ;
    ?>
</p>
<p>
    <?php
    $even= 7;
    if ($even % 2==0) {echo 'Число четное';}
    else {echo 'Число нечетное';}
    ?>
</p>
<p>
<?php
?>
</p>