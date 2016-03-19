<?php $this->load->view('includes/page_head');?>
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
                                <h4 class="page-title">Detail</h4>
                                <p class="text-muted page-title-alt">Detail Information!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-box">
                                    <h4>Detail Information</h4>
                                    <form action="<?php echo base_url()?>Resume/Uploadwhoru" method="post">
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName1">About You (short)</label>
                                            <div class="col-lg-4">
                                                <input class="form-control required" required id="Name" name="title" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password1"> About You (Detail)</label>
                                            <div class="col-lg-4">
                                               <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1"></label>
                                            <div class="col-lg-6">
                                                <input type="submit" name="savewho" value="Save Information" class="btn btn-default">
                                                <input type="reset" value="Clear Form" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <!-- End #wizard-vertical -->
                            </div>
                            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Rating</th>
                                <th></th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($Table)){ foreach($Table as $EachTable){?>
                            <tr>
                                <th><?php echo $EachTable->header; ?></th>
                                <th><?php echo $EachTable->description; ?></th>
                                <th></th>
                                <th></th>
                                <th><a href="<?php echo base_url();?>Resume/Deletewhoru/<?php echo $this->session->userdata('userid');?>"><i class="fa fa-trash"></i></a></th>
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
                    2016 © PortFolio.
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