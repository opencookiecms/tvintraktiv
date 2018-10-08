<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
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
              <h3>Add New Message</h3>
              <br>
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Content:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Status:</label>
                    <select type="text" class="form-control" id="jenissebut" name="jenissebut">
                      <option value=""></option>
                      <option value="Lantikan Terus">Show</option>
                      <option value="Sebutharga">Not Show</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Register:</label>
                    <input class="form-control" id="message-text">
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
            <h3 class="box-title">List of Banner</h3>
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

               {  

                 ?> 

                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><button type="edit" name="edit" class="btn btn-default">Edit</button>
                    <button type="delete" name="delete" class="btn btn-default">Delete</button>
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

