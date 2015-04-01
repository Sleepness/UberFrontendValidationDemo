<?php

function show_run($text, $command, $canFail = false)
{
    echo "\n* $text\n$command\n";
    passthru($command, $return);
    if (0 !== $return && !$canFail) {
        echo "\n/!\\ The command returned $return\n";
        exit(1);
    }
}

show_run('Building bootstrap', 'vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/bin/build_bootstrap.php');
show_run("Drop current database", "app/console doctrine:database:drop --force");
show_run("Create database", "app/console doctrine:database:create");
show_run("Create schema", "app/console doctrine:schema:create");
show_run("Destroying cache dir manually", "rm -rf app/cache/*");
show_run("Warming up dev cache", "app/console --env=dev cache:clear");
show_run("Dump Assets to File system", "app/console assetic:dump");
show_run("Install Assets", "app/console assets:install");
show_run("Install Assets env=dev", "app/console assets:install --env=dev");
show_run("Changing permissions", "sudo chmod -R 777 app/cache app/logs");

exit(0);
