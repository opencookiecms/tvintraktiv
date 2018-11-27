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


    

     <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
      </div><!-- end of box header-->

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Id</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="hiddenid" value="<?php echo $get_height[0]->id ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Logo Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="logoheight" value="<?php echo $get_height[0]->logoheight ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Media Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="mediaheight" value="<?php echo $get_height[0]->mediaheight ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Slide Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="slideheight" value="<?php echo $get_height[0]->slideheight ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Message Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="messageheight" value="<?php echo $get_height[0]->messageheight ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Banner Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="bannerheight" value="<?php echo $get_height[0]->bannerheight ?>">
          </div>
        </div>

      </div>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2">Footer Height</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="footerheight" value="<?php echo $get_height[0]->footerheight ?>">
          </div>
        </div>

      </div>


      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-default">Save</button>
      </div>
    </div>
  </form>
</div>
</div><!--end of row-->



</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
