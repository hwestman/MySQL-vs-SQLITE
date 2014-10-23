<?php

/*
 *  This is a script that generates queries according to the design specified by the SQLite Corporation
 *	http://sqlite.org/speed.html
 *
 *	It will output one file for each function listed below with sql syntax for query evaluation.
 *  Author: Hallvard Westman (s2873575)
 */


require_once 'Faker/src/autoload.php';
$faker = Faker\Factory::create();

query1();
query2();
query3();
query4();
query5();
query6();
query7();
query8();
query9();
query10();
query11();
query12();
query13();
query14();
query15();
query16();


function query1(){
    
    global $faker;
    $file = 'query1.sql';
    file_put_contents($file,"");
    
    $line = "CREATE TABLE t1(a INTEGER, b INTEGER, c VARCHAR(100));\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=1000;$i++){
       $number = $faker->randomNumber(0,99999);
       $line = "INSERT INTO t1 VALUES(".$i.",".$number.",'".convert_number_to_words($number)."');\n";
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    }; 
    
}
function query2(){
    
    global $faker;
    $file = 'query2.sql';
    file_put_contents($file,"");
    $line = "BEGIN;\nCREATE TABLE t2(a INTEGER, b INTEGER, c VARCHAR(100));\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=25000;$i++){
       $number = $faker->randomNumber(0,99999);
       $line = "INSERT INTO t2 VALUES(".$i.",".$number.",'".convert_number_to_words($number)."');\n";
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query3(){
    
    global $faker;
    $file = 'query3.sql';
    file_put_contents($file,"");
    $line = "   BEGIN;\n
                CREATE TABLE t3(a INTEGER, b INTEGER, c VARCHAR(100));\n
                CREATE INDEX i3 ON t3(c);\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=25000;$i++){
        $number = $faker->randomNumber(0,99999);
       $line = "INSERT INTO t3 VALUES(".$i.",".$number.",'".convert_number_to_words($number)."');\n";
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query4(){
    
    global $faker;
    $file = 'query4.sql';
    file_put_contents($file,"");
    $line = "   BEGIN;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    $j = 1000;
    for($i = 0;$i<100;$i++){
/********************************************************/
        $lower = $i*100;
        $higher = $j+$i*100;
        $line = "SELECT count(*), avg(b) FROM t2 WHERE b>= ".$lower." AND b<".$higher.";\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query5(){
    
    global $faker;
    $file = 'query5.sql';
    file_put_contents($file,"");
    $line = "   BEGIN;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    $j = 1000;
    for($i = 1;$i<=100;$i++){
/********************************************************/
       
        $line = "SELECT count(*), avg(b) FROM t2 WHERE c LIKE '%".convert_number_to_words($i)."%';\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}
function query6(){
    
    global $faker;
    $file = 'query6.sql';
    file_put_contents($file,"");
    $line = "   CREATE INDEX i2a ON t2(a);\n
                CREATE INDEX i2b ON t2(b);\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}
function query7(){
    
    global $faker;
    $file = 'query7.sql';
    file_put_contents($file,"");
    
    for($i = 0,$j=1;$i<5000;$i++,$j++){
/********************************************************/
        $lower = $i*100;
        $higher = $j*100;
        $line = "SELECT count(*), avg(b) FROM t2 WHERE b>=".$lower." AND b<".$higher.";\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    
}

function query8(){
    
    global $faker;
    $file = 'query8.sql';
    file_put_contents($file,"");
    $line = "BEGIN;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 0,$j=1;$i<1000;$i++,$j++){
/********************************************************/
        $lower = $i*10;
        $higher = $j*10;
        $line = "UPDATE t1 SET b=b*2 WHERE a>=".$lower." AND a<".$higher.";\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query9(){
    
    global $faker;
    $file = 'query9.sql';
    file_put_contents($file,"");
    $line = "BEGIN;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=25000;$i++){
/********************************************************/
        
        $line = "UPDATE t2 SET b=".$faker->randomNumber(0,999999)." WHERE a=".$i.";\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}
function query10(){
    
    global $faker;
    $file = 'query10.sql';
    file_put_contents($file,"");
    $line = "BEGIN;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=25000;$i++){
/********************************************************/
        
        $line = "UPDATE t2 SET c='".convert_number_to_words($faker->randomNumber(0,999999))."' WHERE a=".$i.";\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query11(){
    
    global $faker;
    $file = 'query11.sql';
    file_put_contents($file,"");
    $line = "   BEGIN;\n
                INSERT INTO t1 SELECT b,a,c FROM t2;\n
                INSERT INTO t2 SELECT b,a,c FROM t1;\n
                COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
}

function query12(){
    
    global $faker;
    $file = 'query12.sql';
    file_put_contents($file,"");
    $line = "   DELETE FROM t2 WHERE c LIKE '%fifty%';";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
}

function query13(){
    
    global $faker;
    $file = 'query13.sql';
    file_put_contents($file,"");
    $line = "DELETE FROM t2 WHERE a>10 AND a<20000;";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
}

function query14(){
    
    global $faker;
    $file = 'query14.sql';
    file_put_contents($file,"");
    $line = "INSERT INTO t2 SELECT * FROM t1;";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
}

function query15(){
    
    global $faker;
    $file = 'query15.sql';
    file_put_contents($file,"");
    $line = "BEGIN;\n
             DELETE FROM t1;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    for($i = 1;$i<=12000;$i++){
/********************************************************/
        $number = $faker->randomNumber(0,99999);
        $line = "INSERT INTO t1 VALUES(".$i.",".$number.",'".convert_number_to_words($number)."');\n";
/********************************************************/    
       if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
           echo "went to shit";
       }
    };
    $line = "COMMIT;\n";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
    
}

function query16(){
    
    global $faker;
    $file = 'query16.sql';
    file_put_contents($file,"");
    $line = "   DROP TABLE t1;
                DROP TABLE t2;
                DROP TABLE t3;";
    if(!file_put_contents($file, $line, FILE_APPEND | LOCK_EX)){
        echo "went to shit";
    }
}


/*
 * 
 * THANKS TO http://www.karlrixon.co.uk/writing/convert-numbers-to-words-with-php/
 * FOR THIS FUNCTION FULL CREDIT
 * 
 */
function convert_number_to_words($number) {
    
//    $hyphen      = '-';
//    $conjunction = ' and ';
//    $separator   = ', ';
//    $negative    = 'negative ';
//    $decimal     = ' point ';
    
    $hyphen      = ' ';
    $conjunction = ' ';
    $separator   = ' ';
    $negative    = ' ';
    $decimal     = ' ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
    
    if (!is_numeric($number)) {
        return false;
    }
    
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    
    $string = $fraction = null;
    
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
    
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    
    return $string;
}


?>