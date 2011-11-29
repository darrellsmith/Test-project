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
    <style>
        p{
            font-family: fantasy;
            
        }
    </style>
    <body>
        <div style="text-align: center">
            <h1>GIT test site</h1>
        </div>
        <div style="text-align: left">
            <p>this is a test file</p>
            <?php
                echo date('<p>G:ia  D M Y</p>');
            
                $time = microtime();

                $time = explode(" ", $time);

                $time = $time[1] + $time[0];

                $finish = $time;

                $totaltime = ($finish - $start);
                
                echo("<br/>");
                echo("Extra features that I wanted to add to a new branch<br/>");
                echo ("<p>This page took ".round($totaltime,4) ."seconds to load.</p>");
                echo("<br/><br/>");
            ?>            
        </div>
    </body>
</html>

