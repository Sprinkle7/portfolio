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
</style>
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
                        <h4 class="page-title">Information</h4>
                        <p class="text-muted page-title-alt">General Information!</p>
                    </div>
                </div>
                <?php if (!empty($User)) {?>
                    <?php echo form_open_multipart(base_url().'Resume/UpdateInformation','id="validate"')?>
                <div class="row">
                    <div class="card-box">
                        <h4>User Info</h4>
                        <hr>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="userName1">Full Name</label>
                                <div class="col-lg-4">
                                    <input class="form-control required" id="Name" value="<?php  if(!empty($User)){echo $User->name;}?>" name="Name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="password1"> Short Introduction</label>
                                <div class="col-lg-4">
                                    <textarea id="textarea" name="Intro" class="form-control" value=""  required maxlength="225" rows="2" placeholder="upto 225 chars."><?php  if(!empty($User)){echo $User->short_intro;}?></textarea>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="confirm1">Contact #</label>
                                <div class="col-lg-4">
                                    <input id="confirm1" required name="Contact" data-mask="(999) 999-9999" value="<?php  if(!empty($User)){echo $User->phone;}?>" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="confirm1">Address</label>
                                <div class="col-lg-4">
                                    <textarea id="textarea" name="Address" required class="form-control" value="" maxlength="200" rows="2" placeholder="upto 200 chars."><?php  if(!empty($User)){echo $User->address;}?></textarea>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <h4>Social Contacts</h4>
                        <small class="text-info">Note*: Paste The URL of Your Accounts </small>
                        <hr>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label" for="name1"> Facebook</label>
                                <div class="col-lg-4">
                                    <input id="name1"  value="<?php  if(!empty($User)){echo $User->facebook;}?>" name="Facebook" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="surname1"> Twitter</label>
                                <div class="col-lg-4">
                                    <input id="surname1" value="<?php  if(!empty($User)){echo $User->twitter;}?>" name="Twitter" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email1">Linkedin</label>
                                <div class="col-lg-4">
                                    <input id="email1" name="Linkedin" value="<?php  if(!empty($User)){echo $User->linkeden;}?>" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Gmail</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Gmail" value="<?php  if(!empty($User)){echo $User->gmail;}?>" name="address" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Yahoo</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Yahoo" value="<?php  if(!empty($User)){echo $User->yahoo;}?>" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Github</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Github" value="<?php  if(!empty($User)){echo $User->github;}?>" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Other Email</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="otherEmail" value="<?php  if(!empty($User)){echo $User->email;}?>" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-lg-4">
                                <input type="submit" name="updateinfo" value="Save Information" class="btn btn-default">
                                <input type="reset" value="Clear Form" class="btn btn-primary">
                            </div>
                        </div>      
                        </section>
                        
                        <!-- End #wizard-vertical -->
                    </div>
                </div>
            <?php echo form_close();
                }else{?>
                <?php echo form_open_multipart(base_url().'Resume/Userinformation','id="validate"')?>
                <div class="row">
                    <div class="card-box">
                        <h4>User Info</h4>
                        <hr>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="userName1">Full Name</label>
                                <div class="col-lg-4">
                                    <input class="form-control required" id="Name" name="Name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="password1"> Short Introduction</label>
                                <div class="col-lg-4">
                                    <textarea id="textarea" name="Intro" class="form-control" required maxlength="225" rows="2" placeholder="upto 225 chars."></textarea>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="confirm1">Contact #</label>
                                <div class="col-lg-4">
                                    <input id="confirm1" required name="Contact" data-mask="(999) 999-9999" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="confirm1">Address</label>
                                <div class="col-lg-4">
                                    <textarea id="textarea" name="Address" required class="form-control" maxlength="200" rows="2" placeholder="upto 200 chars."></textarea>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <h4>Social Contacts</h4>
                        <small class="text-info">Note*: Paste The URL of Your Accounts </small>
                        <hr>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label" for="name1"> Facebook</label>
                                <div class="col-lg-4">
                                    <input id="name1" name="Facebook" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="surname1"> Twitter</label>
                                <div class="col-lg-4">
                                    <input id="surname1" name="Twitter" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email1">Linkedin</label>
                                <div class="col-lg-4">
                                    <input id="email1" name="Linkedin" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Gmail</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Gmail" name="address" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Yahoo</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Yahoo" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Github</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="Github" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address1">Other Email</label>
                                <div class="col-lg-4">
                                    <input id="address1" name="otherEmail" type="text" class="form-control">
                                </div>
                            </div>
                        </section>
                        <hr>
                        <h4>Profile & Background Picture</h4>
                        <small class="text-info">Note*: For Background Image: Size must be 1700px x 1080px or 850px x 540px OR in same Ratio</small><br>
                        <small id="ratio1" class="text-info">Note*: Size must be 250px x 250px OR in same Ratio</small><br/>
                        <small id="ratio1" class="text-info">Note*: Maximum Upload Size 3mb</small>
                        <hr>
                        <section>
                            <div class="form-group clearfix" id="image-preview">
                                <label class="col-lg-4 control-label" id="image-label" for="address1">Profile Picture</label>
                                <div class="col-lg-6">
                                     <input type="file" name="ProfileImage" accept="image/png, image/jpeg image/jpg" id="image-upload" data-iconname="fa fa-user" class="filestyle col-lg-4" data-buttontxt="Profile Picture" data-buttonname="btn-white">
                                </div>
                            </div>
                            <div class="form-group clearfix" id="image-preview1">
                                <label class="col-lg-4 control-label " id="image-label1" for="address1">Background Picture</label>
                                <div class="col-lg-6">
                                    <input type="file" name="backgroundImage"  accept="image/png, image/jpeg, image/jpg"  id="image-upload1" data-iconname="fa fa-photo" class="filestyle col-lg-4" data-buttontxt="Profile Picture" data-buttonname="btn-white">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            </section>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <input type="submit" name="saveinfo" value="Save Information" class="btn btn-default">
                                    <input type="reset" value="Clear Form" class="btn btn-primary">
                                </div>
                            </div>      
                        <!-- End #wizard-vertical -->
                    </div>
                </div>
            <?php echo form_close(); }?>
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