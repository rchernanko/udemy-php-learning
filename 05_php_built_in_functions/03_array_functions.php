<?php

//Built in string functions
//Obviously I will need to play around with this in a little more detail

//http://php.net/manual/en/ref.array.php

$list = [324, 234, 676, 356, 134, 8, 25];

//find the max value in an array...
echo max($list);
echo '<br>';

//find the max value in an array...
echo min($list);
echo '<br>';

//sorting values in an array
echo sort($list);
print_r($list);

/*

 TODO - how to sort a custom class into natural order (e.g. in Java you use comparator...how does it work in php?)

 */