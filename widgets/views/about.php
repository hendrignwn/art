<?php

use app\models\Page;

?>

<?= Page::getAboutPartial() ? Page::getAboutPartial()->description : '' ?>