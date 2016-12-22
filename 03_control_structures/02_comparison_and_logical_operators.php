<?php

/*

    COMPARISON operators:
    
    * equal == (in terms of value)
    * identical === (Are the 2 things being compared of the same type?)
    * compare >   <   >=    <=    <> (this last one is 'less than or greater than')
    * not equal !=
    * not identical !== (Are the 2 things being compared of the same type?)
    
    LOGICAL operators:
    
    * AND &&
    * OR || 
    * NOT !
    
    (same as in Java)



    Now let's see some examples below...

*/


    if(4 == 4) {
        echo 'it is true' . '<br>';
    } // this will be true

    if(4 === 4) {
        echo 'it is true again' . '<br>';
    } //this will be true too

    if(4 == "4") {
        echo 'this is true as well' . '<br>';
    } //this will be true too. even though the data types are different, the values are the same - Need to read a little bit more about this though

    if(4 === '4') {
        echo 'this is true too';
    } //this will NOT be true. Even though the values are equal, the data types are not identical (one is a string, one is a number)...

    /*
    
    READ THIS - HAD SOME GREAT TABLES AT THE BOTTOM http://php.net/manual/en/types.comparisons.php
    
    + 
    
    http://php.net/manual/en/language.operators.comparison.php
    
    Another very good site:
    
    http://stackoverflow.com/questions/80646/how-do-the-php-equality-double-equals-and-identity-triple-equals-comp
    
    "If you are using the === operator, or any other comparison operator which uses strict comparison such as !== or ===, then you can always be sure that the types won't magically change, because there will be no converting going on. So with strict comparison the type and value have to be the same, not only the value."


    */


?>