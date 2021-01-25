<?php



set_time_limit(-1);
ini_set("memory_limit",-1);

for ($c=0; $c < 1000000000; $c++){
    for ($b= 0 ; $b < 1000000000; $b++){
        for($i = 0; $i < 1000000000; $i++) {
            $a += $i;
        }
    }
}

