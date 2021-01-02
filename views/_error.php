<?php

/** @var $exception \Exception */
$this->title = $exception->getCode();
?>
<h1><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h1>
