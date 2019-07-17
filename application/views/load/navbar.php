<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="<?php //if($this->session->userdata('pic') == '' OR $this->session->userdata('pic') == NULL){echo base_url().'asset/images/avatar.jpg';}else{echo base_url().'asset/images/'.$this->session->userdata('pic');} ?>" alt=""> -->
                    <?php echo $this->session->userdata('fullname') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li-->
                    <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li><div class="clearfix">           </div></li>

                <li role="presentation">
                  <!--img src="<?php //echo base_url() ?>uploads/logo.png" alt="" style="margin-left:25px;height: 50px; width: 150px;"-->
                </li>
              </ul>
            </nav>
          </div>
        </div>