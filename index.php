        <?php

            echo  '<b>' . "lesson № 2" . '</b>' . '<br>';

        echo"Hello World! <br>";

        echo date('Y') . '<br> lklk';

            echo  '<br>' . '<b>' . "lesson № 3" . '</b>' ;

        echo "<br> fdfd ";

        $number = 10;

        $num = 45;

        echo '<br>' . $number;

        echo '<br>' . $number . $num;

        const My_age = 25;

        echo '<br>' .  "My age:" . My_age .  '<br>';



        //mathh

            echo '<b>' . "lesson № 4" . '</b>' . '<br>';


        $x = 10;
        $y = 20;


        echo $x + $y . '<br>';
        echo $x - $y . '<br>';
        echo $x * $y . '<br>';
        echo $x / $y . '<br>';
        echo $x % $y . '<br>';

        $x += 10; // $x = $x + 10; -- однакові

        echo $x;


            echo '<br>' . '<b>' . "lesson № 5" . '</b>' . '<br>';


        $Id = "Hello";
        echo "Variable: $Id"; // echo = 'Veriable:' . $ld; 

        echo "<input type='password' onclick='func(\"some\")'>";

        echo '<br>' . md5("zxc");


            echo "<br> <b> lesson № 6 </b> <br>";


        $a = 6;

        $str = "Hello";

        if ($str == "Some") {
            echo 'Yes';
        } else {
            echo 'No';
        }


            echo "<br> <b> lesson № 7 </b> <br>";


        $x = 40;

        switch($x) {
            case 5:
                echo 'Num is 5';
                break;
            case 15:
                echo 'Num is 15';
                break;
            case 25:
                echo 'Num is 25';
                break;
            case 40:
                echo 'Num is 40';
                break;
                default:
                    echo 'deff';
                    break;

        }


            echo "<br> <b> lesson № 8 </b> <br>"; 


        $nn = array(4, 5, 12, 34, 0, 4);
        $nn[0] = 45545;
        $nn[4] = 7474;
        echo $nn[4];

        $qq = [1, 0, 3, 4, 7,];

        echo "<br> $qq[4] <br>";

        $user = ['name' => 'broski', 'age' => 3, 'hobby' => 'basketball' ];
        echo $user['hobby']. '<br>';


            echo "<b> lesson № 9 </b> <br>";


            // for
        for($i = 100; $i >= 20; $i-= 10) {
            echo "El: $i<br>";
        }

            //while
        #$i = 0;
        #while($i < 10) {
        #    echo "El: $i<br>";
        #    $i++;
        #}

             // do while
        #$i = 100;
        #do {
        #    echo "El: $i<br>";
        #    $i--;
        #} while($i < 10);

            //Op  in ...


            echo "<b> lessom № 10 </b> <br>";


        // function info($word){
        //     echo "$word <br>";
        // }

        function summary($x, $y) {
            $res = $x + $y;
            echo "$res <br>";
        }

        summary(13, 124); 


        // info("Heyy");
        // $n1 = "Niggs";
        // info($n1);
        // info(1234);


            echo "<b> lesson №11 </b> <br>";



            
        ?>


<?php

$tit = "Home";

require "blocks/header.php";

?>


<h1>Home page</h1>


<?php

require "blocks/footer.php";


    echo "<b>lesson № 12 in </b> <a href=\"about.php\"> About</a> <br>";    


    echo "<b> lesson № 13 </b> <br>";


//echo date('t F');

date_default_timezone_set('Europe/Kiev');
echo date('m-l ЧАС: H:i:s') . "<br>";



//echo $_SERVER['HTTP_USER_AGENT'];



    echo "<b> lesson № 14 </b> <br>";


    
?>
