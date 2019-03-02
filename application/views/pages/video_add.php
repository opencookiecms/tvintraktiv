        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
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
                      <?php echo form_open_multipart('add/video') ?>
                      
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adding Vedio</h5>
                                <div class="form-group row">
                                    <label class="col-md-3">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label class="col-md-3">Vedio Content</label>
                                    <div class="col-md-9">
                                        <textarea cols="5" name="content" class="form-control"></textarea>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label class="col-md-3">Select Video</label>
                                    <div class="col-md-5">
                                        <div class="custom-file">
                                            <input type="file" name="video" class="form-control">         
                                            <small>Upload only MP4, FLV or AVI only</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Status</label>
                                    <div class="col-md-4">
                                        <select name="status" class="form-control">
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
                <!-- editor -->
           
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
