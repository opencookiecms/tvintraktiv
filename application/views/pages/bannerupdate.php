<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <link href="<?php echo base_url();?>assets/style/css/ourthemes.css" rel="stylesheet" type="text/css">
</head>
</html>
<!-- Content Wrapper. Contains page content -->
<style>
  .error {color: #FF0000;}
</style>
<div class="content-wrapper ps">
  <!-- Content Header (Page header)
  <section class="content-header">
    <center>
      <h1>
        Daftar Projek
      </h1>
    </center>
  </section>
-->
<br>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-lg-12">

      <?php if (isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
    } ?>
    <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
    <!--<form  method="POST" action="?php echo site_url('Projek/insert_stepone') ?>">-->

    <br>




    <?php echo form_open_multipart('welcome/updatebanner'); ?>



    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Banner Details</h3>
      </div><!-- end of box header-->

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Id</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="hiddenid" value="<?php echo $get_banner[0]->id ?>" readonly>
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Title</label>

          <div class="col-sm-6">
            <input type="text" class="form-control" name="title" value="<?php echo $get_banner[0]->banner_title ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="message-text" class="col-form-label">Content:</label>
          <textarea class="ckeditor" name="content"><?php echo $get_banner[0]->banner_content ?></textarea>
          <script>
            CKEDITOR.replace( 'content' );
          </script>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Status</label>

          <div class="col-sm-2">
            <select type="text" class="form-control" id="status" name="status">
              <option value="<?php echo $get_banner[0]->banner_status ?>"><?php echo $get_banner[0]->banner_status ?></option>
              <option value="Show">Show</option>
              <option value="Not Show">Not Show</option>
            </select>
          </div>

        </div>
      </div>

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </form>
  </div>
</div><!--end of row-->



</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
