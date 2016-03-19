<?php $this->load->view('includes/page_head');?>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <?php $this->load->view('includes/top_head');?>
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view('includes/side_menu');?>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">PortFolio</h4>
                        <p class="text-muted page-title-alt">Uploaded PortFolio!</p>
                    </div>
                </div>       
                <div class="row">
                <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>General Desc</th>
                                <th>Details</th>
                                <th>Result</th>
                                <th>OnlineLink</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($Table)){ foreach($Table as $EachTable){?>
                            <tr>
                                <th><?php echo $EachTable->title; ?></th>
                                <th><?php echo $EachTable->category; ?></th>
                                <th><?php echo $EachTable->general; ?></th>
                                <th><?php echo $EachTable->details; ?></th>
                                <th><?php echo $EachTable->result; ?></th>
                                <th><?php echo $EachTable->onlinelink; ?></th>
                                <th><a href="<?php echo base_url();?>Resume/DeletePort/<?php echo $EachTable->pfid;?>"><i class="fa fa-trash"></i></a></th>
                            </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
               </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
        <footer class="footer text-right">
            2014 © PortFolio.
        </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<?php $this->load->view('includes/page_footer');?>
<script>
    $('#validate').validate();    
    $('textarea#textarea').maxlength({
        alwaysShow: true
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
  $.uploadPreview({
    input_field: "#image-upload1",   // Default: .image-upload
    preview_box: "#image-preview1",  // Default: .image-preview
    label_field: "#image-label1",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>