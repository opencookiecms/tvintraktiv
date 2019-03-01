
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

               foreach ($get_slide as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->slide_title?></td>
                  <td><img src="<?php echo site_url("/assets/images/")?><?php echo $row->slide_content?>" style="width: 30%"></td>
                  <td><?php echo $row->slide_status?></td>
                  <td><a href="<?php echo site_url("welcome/deletephoto/" . $row->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>
