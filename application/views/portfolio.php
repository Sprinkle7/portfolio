<?php $this->load->view('includes/page_head');?>
<style type="text/css">
    #image-preview {
      width: 250px;
      height: 250px;
      float:left;
      margin-left:2em;
      background-color: #ffffff;
      color: #ecf0f1;
     }
     #image-preview1 {
      width: 250px;
      height: 250px;
      float:left;
      margin-left:2em;
      background-color: #ffffff;
      color: #ecf0f1;
     }
     #image-preview2 {
      width: 250px;
      height: 250px;
      float:left;
      margin-left:2em;
      background-color: #ffffff;
      color: #ecf0f1;
     }
</style>
    <body class="fixed-left">
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
                                <h4 class="page-title">Portfolio</h4>
                                <p class="text-muted page-title-alt">Add Projects To Your Portfolio</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-box">
                                <form enctype="multipart/form-data" action="<?php echo base_url()?>Resume/UploadPortfolio" method="post">
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">Project Title</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" placeholder="Project Title" id="Name" name="Title" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password1">Category</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" placeholder="Category name e.g. Android" id="Name" name="Category" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1">Introduction</label>
                                            <div class="col-lg-4">
                                                <textarea id="textarea" name="Intro" class="form-control" maxlength="200" rows="2" placeholder="upto 200 chars."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1">Project Details</label>
                                            <div class="col-lg-4">
                                                <textarea id="textarea" class="form-control" name="Detail" maxlength="500" rows="2" placeholder="upto 500 chars."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1">Project Result</label>
                                            <div class="col-lg-4">
                                                <textarea id="textarea" name="Result" class="form-control" maxlength="500" rows="2" placeholder="upto 500 chars."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password1">Online Link</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" name="Link" placeholder="Category name e.g. Android" id="Name"  type="text">
                                            </div>
                                        </div>
                                        <h3>Portfolio Pictures</h3>
                                        <div class="clearfix">  </div>
                                        <div class="form-group clearfix" id="image-preview">
                                            <label class="col-lg-4 control-label" id="image-label" for="address1">Picture 1</label>
                                            <div class="col-lg-6">
                                                 <input type="file" accept="image/png, image/jpeg image/jpg" name="pic1"  id="image-upload" id="profile" data-iconname="fa fa-user" class="filestyle col-lg-4" data-buttontxt="Profile Picture" data-buttonname="btn-white">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix" id="image-preview1">
                                            <label class="col-lg-4 control-label " id="image-label1" for="address1">Picture 2</label>
                                            <div class="col-lg-6">
                                                <input type="file"  accept="image/png, image/jpeg, image/jpg"  name="pic2" id="image-upload1" data-iconname="fa fa-photo" class="filestyle col-lg-4" data-buttontxt="Profile Picture" data-buttonname="btn-white">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix" id="image-preview2">
                                            <label class="col-lg-4 control-label " id="image-label2" for="address1">Picture 3</label>
                                            <div class="col-lg-6">
                                                <input type="file"  accept="image/png, image/jpeg, image/jpg"  name="pic3" id="image-upload2" data-iconname="fa fa-photo" class="filestyle col-lg-4" data-buttontxt="Profile Picture" data-buttonname="btn-white">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1"></label>
                                            <div class="col-lg-4">
                                                <input type="submit" name="portfolio" value="Save Information" class="btn btn-default">
                                                <input type="reset" value="Clear Form" class="btn btn-primary">
                                            </div>
                                        </div>
                                                                    
                                    </section>
                                </form>
                                <!-- End #wizard-vertical -->
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
   $.uploadPreview({
    input_field: "#image-upload2",   // Default: .image-upload
    preview_box: "#image-preview2",  // Default: .image-preview
    label_field: "#image-label2",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>