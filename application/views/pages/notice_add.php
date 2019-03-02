<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Notice</h4>
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
                    <div class="col-md-9">
                    <?php echo validation_errors(); ?>
                      <?php echo form_open('add/notice') ?>
                      
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Notice</h5>
                                <div class="form-group row">
                                    <label class="col-md-3">Title</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            
                            
                                <div class="form-group row">
                                    <label class="col-md-3">Notice Content</label>
                                    <div class="col-md-9">
                                         <textarea type="text" name="notice" id="noticeeditor" class="form-control"></textarea>
                                         <script>
                                             // Replace the <textarea id="editor1"> with a CKEditor
                                            // instance, using default configuration.
                                              CKEDITOR.replace( 'noticeeditor' );
                                        </script>         
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
                    <div class="col-md-3">
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
