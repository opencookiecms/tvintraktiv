
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper ub">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Banner</h4>
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
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <a href="<?php echo site_url('add/banner') ?>" class="btn btn-info">Add</a>
            <p>
            <h5 class="card-title m-b-0">List view</h5>
          </div>

          <table id="example1" class="table">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th style="width:50%;">Content</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
               <?php
               $i = 1;

               foreach ($get_banner as $row) {
                 # code..

                 ?>

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->banner_title?></td>
                  <td><img src="<?php echo site_url("/assets/images/")?><?php echo $row->banner_content?>" style="width: 30%"></td>
                  <td><?php echo $row->banner_status?></td>
                  <td>
                  <a class = "btn btn-primary" href="<?php echo site_url("datahandler/delete_banner/" . $row->id); ?>" onclick="return confirm('Delete Data?')">delete</a>
         

                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>


          </div>
        </div>
      </div>
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
    <!-- ============================================================== -->
