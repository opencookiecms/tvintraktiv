
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

               foreach ($get_banner as $row) {
                 # code..

                 ?>

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->banner_title?></td>
                  <td><?php echo $row->banner_content?></td>
                  <td><?php echo $row->banner_status?></td>
                  <td><a href="<?php echo site_url("welcome/deletebanner/" . $row->id); ?>" onclick="return confirm('Delete Data?')">Delete</a>
                  <a href="<?php echo site_url("welcome/updatebanner/" . $row->id); ?>">Update</a>

                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>
