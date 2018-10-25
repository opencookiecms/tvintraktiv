<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
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

        <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
      } ?>
      <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
      <!--<form  method="POST" action="?php echo site_url('Projek/insert_stepone') ?>">-->

      <?php $id = $get_detail[0]->id; ?>

        <?php echo validation_errors(); ?>

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Title:</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $get_detail[0]->notice_title?>">
        </div>

        <div class="form-group">
          <label for="message-text" class="col-form-label">Content:</label>
          <textarea class="ckeditor" name="content"><?php echo $get_detail[0]->notice_content ?></textarea>
          <script>
            CKEDITOR.replace( 'content' );
          </script>
        </div>

        <div class="form-group">
          <label for="message-text" class="col-form-label">Status:</label>
          <select type="text" class="form-control" id="status" name="status">
            <option value="<?php echo $get_detail[0]->notice_status?>"><?php echo $get_detail[0]->notice_status?></option>
            <option value="Show">Show</option>
            <option value="Not Show">Not Show</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message-text" class="col-form-label">Register:</label>
          <input class="form-control" type="timestamp" id="register" name="register" value="<?php echo $get_detail[0]->notice_reg?>">
          <label>Format : 0000-00-00 00:00:00</label>
        </div>

        <button type="cancel" name="cancel" class="btn btn-default">Cancel</button>
        <button type="update" name="update" class="btn btn-default">Update</button>

      
    </div>
</div>
<!-- /.col -->
</div>




</section>
<!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->
