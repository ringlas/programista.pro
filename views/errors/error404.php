<?php $title = 'Error 404' ?>

<?php ob_start() ?>

    <!-- breadcrumbs -->

    <ul class="crumb">
        <li><a href="/">Home</a></li>
        <li class="sep">/</li>
        <li>404</li>
    </ul>

<?php $breadcrumbs = ob_get_clean() ?>

<?php ob_start() ?>


    <!-- content begin -->

    <div id="content" class="no-bottom no-top">

        <div class="container project-view">

            <div class="row">

				<div class="col-md-12">
				    
				    <h2>Ooops, the page you were looking for was not found!</h2>
			
				</div>

            </div>

        </div>

    	<?php require 'views/elements/footer.php' ?>
    
    </div>

<?php $content = ob_get_clean() ?>

<?php require_once 'views/layouts/simple.php' ?>