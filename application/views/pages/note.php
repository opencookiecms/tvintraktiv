

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
