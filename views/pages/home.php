<?php $title = 'Добре дошли на началната страница!' ?>

<?php ob_start() ?>

<!-- breadcrumbs -->

<?php $breadcrumbs = ob_get_clean() ?>

<?php ob_start() ?>
    
<!-- content -->                         
    
<?php $content = ob_get_clean() ?>

<?php require_once 'views/layouts/main.php' ?>
