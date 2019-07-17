
      <!-- page content -->
      <div class="right_col" role="main">

      <div class="row x_title">
          <div class="title">
            <h1><?php echo $title ?></h1>
          </div>
      </div>

       <div class="x_panel">
         <div class="x_content">
           <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Membership</th>
                        <th>Know</th>
                        <th>From</th>
                        <th>Type</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $content = $this->db->query("select * from member join survey on survey.member_id = member.id join membership on membership.member_id = member.id") ?>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->name ?></td>
                        <td><?php echo $con->age ?></td>
                        <td><?php echo $con->phone ?></td>
                        <td><?php echo $con->email ?></td>
                        <td><?php echo $con->member_type." : ".$con->type_data ?></td>
                        <td><?php echo str_replace("Male User","Male Usher",$con->source) ?></td>
                        <td><?php echo $con->from ?></td>
                        <td><?php if($con->type == "Skin Consultation"){echo "Loyal User";}else{echo "New User";} ?></td>
                        <td><?php echo date("d M Y",strtotime($this->db->query("select date from queue where member_id = '".$con->member_id."'")->row()->date)) ?></td>
                      </tr>
                       
                    <?php endforeach ?>
                    </tbody>
                  </table>
         </div>
       </div>
        <!-- footer content -->

      


        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>
