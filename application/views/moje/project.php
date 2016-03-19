<div class="content padded">
    <div class="row">
    	<div class="col-lg-6">
        	<!-- Top Bar -->
            <div class="top-bar">
            	<span class="pull-left"><a href="#" class="ajax-project-close btn btn-default btn-sm btn-pull-up"><i class="fa fa-times icon-before"></i>Close</a></span>
                <h6 class="pull-right text-muted short">Project Details</h6>
            </div>
  			<div class="long">
                <h2 class="short"><?php echo $portfolio->title;?></h2>
                <span class="text-muted"><?php echo $portfolio->category;?></span>
            </div>
            <div class="row">
            	<div class="col-lg-6">
                	<h5>General Info</h5>
                    <p><?php echo $portfolio->general;?></p>
                </div>
                
                <div class="col-lg-6">
                	<h5>Project Details</h5>
                    <p><?php echo $portfolio->details;?></p>
                </div>
                <div class="col-lg-12">
                	<h5>Results</h5>
                    <p><?php echo $portfolio->result;?></p>
                    <p><a href="<?php echo $portfolio->onlinelink;?>" class="btn btn-primary">Online version</a></p>
                </div>
            
            </div>
        
        </div>
        <div class="col-lg-6">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-inner">
              <?php if (!empty($pic)) {
                foreach ($pic as $pho) {?>
              <div class="item">
                <img src="<?php echo base_url().$pho->picture_url.$pho->picture_name;?>" alt="" />
              </div>
            </div>
            <?php }}?>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            
          </div>
        
        </div>
        
    </div>
    
</div>

<!-- Scripts -->
<script>
$(document).ready(function (){
	
  // Ajax Project Close	
	
  function closeContent() {
	  $('.project-content').delay(100).slideUp(1000,function() { $('.project-loader').show(0); $('.project-loader .logo-loader').show(0); $.waypoints('refresh') });
	  $('html, body').animate({scrollTop:$('#portfolio').position().top },600); 
  }
	
  $('.ajax-project-close').click(function() {
	  closeContent();
  });
  
});
</script>