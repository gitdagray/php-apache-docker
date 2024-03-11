<?php

declare(strict_types = 1);

echo '<pre>';
print_r(getenv('SITE_URL'));
echo '<br>';
print_r($_SERVER);
echo '</pre>';

phpinfo();