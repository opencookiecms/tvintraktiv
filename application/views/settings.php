<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
</head>
</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
        Settings
      </h2>
    </center>
  </section>
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="table-responsive"></div>
      <div class="col-md-12">

        <div class="box">
          <!-- /.box-header -->
          
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Logo Height</th>
                  <th>Media Height</th>
                  <th>Slide Height</th>
                  <th>Message Height</th>
                  <th>Banner Height</th>
                  <th>Footer Height</th>
                </tr>
              </thead>

              <tbody>
               <?php 
               $i = 1; 

               foreach ($get_height as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->logoheight?></td>
                  <td><?php echo $row->mediaheight?></td>
                  <td><?php echo $row->slideheight?></td>
                  <td><?php echo $row->messageheight?></td>
                  <td><?php echo $row->bannerheight?></td>
                  <td><?php echo $row->footerheight?></td>
                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
    </div>




  </section>
  <!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->

