<?php
$time = microtime();

$time = explode(" ", $time);

$time = $time[1] + $time[0];

$start = $time;

?>
<html>
    <head>
        <title>Git Test</title>

    </head>
    <body>
        <div style="text-align: center">
            <h1>GIT test site</h1>
        </div>
        <div style="text-align: left">
            <p>this is a test file</p>
            <?php
                echo date('G:ia  D M Y');
            
                $time = microtime();

                $time = explode(" ", $time);

                $time = $time[1] + $time[0];

                $finish = $time;

                $totaltime = ($finish - $start);
                
                echo("<br/><br/>");
                
                echo ("This page took ".round($totaltime,4) ."seconds to load.");
            ?>            
        </div>
    </body>
</html>

