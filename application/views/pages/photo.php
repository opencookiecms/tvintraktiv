
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
        <h4 class="page-title">Video List</h4>
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
          <a href="<?php echo site_url('add/slide') ?>" class="btn btn-info">Add</a>
            <p>
            <h5 class="card-title m-b-0">List view</h5>
          </div>

        

    
          <table id="example1" class="table">
              <thead class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
               <?php 
               $i = 1; 

               foreach ($get_slide as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->slide_title?></td>
                  <td><img src="<?php echo site_url("/assets/images/")?><?php echo $row->slide_content?>" style="width: 30%"></td>
                  <td><?php echo $row->slide_status?></td>
                  <td>
                  <a class="btn btn-danger" href="<?php echo site_url("datahandler/slide_delete/". $row->id); ?>" onclick="return confirm('Are you sure? There was no turning if you delete this item')">Delete</a>
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
