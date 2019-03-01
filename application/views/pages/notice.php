<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <link href="<?php echo base_url();?>assets/style/css/ourthemes.css" rel="stylesheet" type="text/css">
</head>
</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2 style="color:#ffff">
        Notice Board
      </h2>
    </center>
  </section>
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="table-responsive"></div>
      <div class="col-md-12">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add</button>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List of Notice Board</h3>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
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

               foreach ($get_notice as $row) {
                 # code..

                 ?>
                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->notice_title?></td>
                  <td><?php echo $row->notice_content?></td>
                  <td><?php echo $row->notice_status?></td>
                  <td><a href="<?php echo site_url("welcome/deletenotice/" . $row->id); ?>" onclick="return confirm('Delete Data?')">Delete</a>
                  <a href="<?php echo site_url("welcome/updatenotice/" . $row->id); ?>">Update</a>
                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

     
      <!-- /.col -->
    </div>




  </section>
  <!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->
