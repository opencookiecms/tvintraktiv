
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

               foreach ($get_message as $row) {
                 # code.. 

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->message_title?></td>
                  <td><?php echo $row->message_content?></td>
                  <td><?php echo $row->message_status?></td>
                  <td><td><a href="<?php echo site_url("welcome/deletemessage/" . $row->id); ?>" onclick="return confirm('Delete Data?')">Delete</a>
                  <a href="<?php echo site_url("welcome/updatemessage/" . $row->id); ?>">Update</a>
                  </td>
                </tr>


                <?php } ?>

              </tbody>

            </table>
