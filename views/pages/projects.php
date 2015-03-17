<?php $title = 'Project Details' ?>

<?php ob_start() ?>

    <!-- breadcrumbs -->

    <ul class="crumb">
        <li><a href="/">Home</a></li>
        <li class="sep">/</li>
        <li>Past Work</li>
    </ul>

<?php $breadcrumbs = ob_get_clean() ?>

<?php ob_start() ?>


    <!-- content begin -->

    <div id="content" class="no-bottom no-top">

        <div class="container project-view">

            <div class="row">

                <div class="col-md-8 project-images">
    				
    				<?php echo $this->html->img($project['img'], array('class' => 'img-responsive')) ?>
				</div>

				<div class="col-md-4">
				    <div class="project-info">

					    <h2>Product(s) Description</h2>
					    <p> <?php echo $project['desc'] ?> </p>
					    
					    <span class="title">Project Duration</span>
					    <span class="val"> <?php echo $project['duration'] ?> </span>
					    
					    <span class="title">Client</span>
					    <span class="val"> <?php echo $project['client'] ?> </span>
					    
					    <span class="title">Outstaffed Developers</span>
					    <span class="val"> <?php echo $project['developers'] ?> </span>
					    
					    <span class="title">Required Expertise</span>
					    <span class="val"> <?php echo $project['expertise'] ?> </span>
				    
				    </div>
			
				</div>

            </div>

        </div>

    	<?php require 'views/elements/footer.php' ?>
    
    </div>

<?php $content = ob_get_clean() ?>

<?php require_once 'views/layouts/simple.php' ?>