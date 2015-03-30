<?php $title = 'Careers' ?>

<?php ob_start() ?>

    <!-- breadcrumbs -->

    <ul class="crumb">
        <li><a href="/">Home</a></li>
        <li class="sep">/</li>
        <li>Careers</li>
    </ul>

<?php $breadcrumbs = ob_get_clean() ?>

<?php ob_start() ?>

    <!-- content begin -->

    <div id="content" class="no-bottom no-top">

        <div class="container project-view">

        	<div class="row">

        		<div class="col-md-12">

	        		<h2>Our Passion</h2>

	        		<p>
	        			Programista; Ltd. develops rapidly as a company and to continue our growth, we are currently 
	        			seeking highly motivated and dedicated individuals interested in joining our expanding team.

	        			We offer a competitive salary and benefits package as well as a casual but professional work 
	        			environment that is challenging, exciting and rewarding. We promote passion, integrity, 
	        			commitment, fun, and mutual respect and our employees are living these core values.

	        			Here are our current job openings. Please click on the job title for more information.
	        		</p>

	        		<h2>Current Career Paths</h2>

	    			<table class="table">
	    				<tr>
	    					<th>Department</th>
	    					<th>Position(s)</th>
	    					<th>Job Location</th>
	    				</tr>

	    				<?php foreach ($careers as $career) { ?>
	    					
	    					<tr>
	    						<td> <?php echo $career['department'] ?> </td>
	    						<td> <a href="/careers/view/<?php echo $career['id'] ?>"> <?php echo $career['position'] ?> </a> </td>
	    						<td> <?php echo $career['location'] ?> </td>
	    					</tr>

	    				<?php } ?>

	    			</table>
        			
        		</div>
        		
        	</div>

        </div>

    	<?php require 'views/elements/footer.php' ?>
    
    </div>

<?php $content = ob_get_clean() ?>

<?php require_once 'views/layouts/simple.php' ?>