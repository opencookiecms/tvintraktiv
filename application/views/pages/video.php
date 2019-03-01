
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

               foreach ($get_playback as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->playback_title?></td>
                  <td><center><video width="300" height="300" controls>
                  <source src="<?php echo base_url("/assets/video/")?><?php echo $row->playback_content?>" type="video/mp4">
                  </video></center></td>
                  <td><?php echo $row->playback_status?></td>
                  <td><a href="<?php echo site_url("welcome/deletevideo/" . $row->id); ?>" onclick="return confirm('Delete Data?')">Delete</a>
                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>
