<?php $title = 'Job Requirements' ?>

<?php ob_start() ?>

    <!-- breadcrumbs -->

    <ul class="crumb">
        <li><a href="/">Home</a></li>
        <li class="sep">/</li>
        <li><a href="/careers">Careers</a></li>
        <li class="sep">/</li>
        <li>Job Requirements</li>
    </ul>

<?php $breadcrumbs = ob_get_clean() ?>

<?php ob_start() ?>

    <!-- content begin -->

    <div id="content" class="no-bottom no-top">

        <div class="container project-view">

        	<div class="row">

        		<div class="col-md-12">

	        		<h1><?php echo $career['title'] ?></h1>

	        		<h2>Overview</h2>

	        		<p> <?php echo $career['overview'] ?> </p>

	        		<h2>Responsibilites</h2>

	        		<ul>
	        			<?php foreach ($career['responsibilities'] as $responsibility) { ?>
    					
	    					<li> <?php echo $responsibility ?> </li>

	    				<?php } ?>

	        		</ul>

	        		<h2>Qualifications</h2>

	        		<ul>
	        			<?php foreach ($career['qualifications'] as $qualification) { ?>
    					
    						<?php if (is_array($qualification)) : ?>

    							<ul>
    								<?php foreach ($qualification as $sub) { ?>

    								<li> <?php echo $sub ?> </li>

    								<?php } ?>
    							</ul>
    							
    						<?php else : ?>
	    					
	    					<li> <?php echo $qualification ?> </li>

	    					<?php endif ?>

	    				<?php } ?>

	        		</ul>
        			
        		</div>
        		
        	</div>

        </div>

    	<?php require 'views/elements/footer.php' ?>
    
    </div>

<?php $content = ob_get_clean() ?>

<?php require_once 'views/layouts/simple.php' ?>