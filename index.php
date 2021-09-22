<body>

   <?php
    
    //pole array
    $zamesnanci = ["David","Anna","Marek","Jana"];
    $mzdy = [20000,30000,15000,30000];
    $mix = [20,"David","<h1>Nadpis</h1>"];
   
    // 1. zpusob vypsání
    echo $zamesnanci [0];
    echo "<br>";
    echo $zamesnanci [1];
    echo "<br>";
    echo $zamesnanci [2];
    echo "<br>";
    echo $zamesnanci [3];
    echo "<br>";
    echo "<br>";
    //2. zpusob vypsani
    print_r($zamesnanci);
    
    ?>

</body>