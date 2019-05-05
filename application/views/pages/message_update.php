<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Message of The Day</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                    <?php echo validation_errors(); ?>
                      <?php echo form_open('datahandler/update_message') ?>
                      
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Message</h5>
                                <div class="form-group row">
                                    <label class="col-md-3">Title</label>
                                    <div class="col-md-5">
                                        <input type="hidden" name="hiddenid" value="<?php echo $get_message[0]->id?>">
                                        <input type="text" class="form-control" name="title" value="<?php echo $get_message[0]->message_title?>">
                                    </div>
                                </div>
                            
                            
                                <div class="form-group row">
                                    <label class="col-md-3">Message Content</label>
                                    <div class="col-md-7">
                                         <textarea type="text" name="message" class="form-control"><?php echo $get_message[0]->message_content?></textarea>         
                                     </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Status</label>
                                    <div class="col-md-4">
                                        <select name="status" class="form-control">
                                            <option value="<?php echo $get_message[0]->message_status?>"><?php echo $get_message[0]->message_status?></option>
                                            <option value="Show">Show</option>
                                            <option value="Off">Off</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>
                  

                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Recent</h5>


                            </div>
                        </div>
                    </div>
   
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
