<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <link href="<?php echo base_url();?>assets/style/css/ourthemes.css" rel="stylesheet" type="text/css">
</head>
</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ps">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2 style="color:#ffff">
        Message
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

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body">
              
              <?php if (isset($_SESSION['success'])) { ?>
              <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
              <?php
            } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
            <!--<form  method="POST" action="?php echo site_url('Projek/insert_stepone') ?>">-->

            <h2><?php echo $title; ?></h2>

            <?php echo validation_errors(); ?>

            <?php echo form_open('welcome/message'); ?>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Content:</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Status:</label>
                    <select type="text" class="form-control" id="status" name="status">
                      <option value=""></option>
                      <option value="Show">Show</option>
                      <option value="Not Show">Not Show</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Register:</label>
                    <input class="form-control" type="timestamp" id="register" name="register">
                    <label>Format : 0000-00-00 00:00:00</label>
                  </div>

                  <button type="edit" name="edit" class="btn btn-default">Cancel</button>
                  <button type="submit" name="submit" class="btn btn-default">Add</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List of Message</h3>
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
                  <th>Register</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
               <?php 
               $i = 1; 

               foreach ($get_message as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->message_title?></td>
                  <td><?php echo $row->message_content?></td>
                  <td><?php echo $row->message_status?></td>
                  <td><?php echo $row->message_reg?></td>
                  <td><td><a href="<?php echo site_url("welcome/deletemessage/" . $row->id); ?>" onclick="return confirm('Delete Data?')">Delete</a>
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

