      

      <style>
      canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
      }
      </style>
      <!-- page content -->
      <div class="right_col" role="main">

      <div class="row x_title">
          <div class="title">
            <h1>Queue List</h1>
          </div>
      </div>

       <div class="x_panel">
         <div class="x_content">

          <div class="col-md-6 col-sm-6 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                       <!--  <tr>
                          <td colspan='5' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#new">New</a></td>
                        </tr> -->
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Ticket</th>
                          <th>Table</th>
                          <th>Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $content = $this->db->query("select *, (select name from member where id = queue.member_id) as name, (select counter_number from counter where id = queue.counter_id) as counter_number, (select counter_type from counter where id = queue.counter_id) as counter_type from queue where is_done = 0 and is_called = 0 order by ticket desc"); ?>
                        <?php $i=1; foreach($content->result() as $con): ?>
                        <tr>
                          <td><?php echo $i++ ?></td>
                          <td><?php echo $con->name ?></td>
                          <td><?php echo $con->ticket ?></td>
                          <td><?php echo $con->counter_number ?></td>
                          <td><?php echo $con->counter_type ?></td>
                        </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

          <div class="clearfix"></div>
          
            
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
