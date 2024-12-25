<?php

echo "محمد الدبعي <br>";

// مثال عن استخدام switch
$number = 2;

switch ($number) {
    case 1:
        echo "الرقم 1 <br>";
        break;
    case 2:
        echo "الرقم 2 <br>";
        break;
    default:
        echo "خطأ <br>";
}

// مثال عن استخدام while
$num = 1;

while ($num <= 4) {
    echo "الرقم: $num <br>";
    $num++;
}

// مثال عن استخدام if-elseif
$mm = 10;
$ss = 2;

if ($mm > $ss) {
    echo "$mm أكبر من $ss <br>";
} elseif ($mm < $ss) {
    echo "$mm أصغر من $ss <br>";
} else {
    echo "$mm يساوي $ss <br>";
}

// مثال عن استخدام for
for ($i = 1; $i <= 4; $i++) {
    echo "العدد: $i <br>";
}

// مثال عن استخدام do-while
$dd = 1;

do {
    echo "الرقم: $dd <br>";
    $dd++;
} while ($dd <= 3);
// mohammed

?>