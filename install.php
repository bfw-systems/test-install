<?php

echo "  \033[1;33mCreate install_test.php file into web directory\033[0m\n";
file_put_contents(WEB_DIR.'/install_test.php', 'myTest');
