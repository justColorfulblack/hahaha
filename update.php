<?php
shell_exec('git pull origin master');
if (1 == count($argv)) {
    exit();
}

foreach ($argv as $key=>$file){
    if ($key>0){
        shell_exec("git add {$file}");
    }
}



fwrite(STDOUT,'请输入您本次提交的说明：');
$commit = fgets(STDOUT);
shell_exec("git commit -m '$commit'");
shell_exec('git push origin master');