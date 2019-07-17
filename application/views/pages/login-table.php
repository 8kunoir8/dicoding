<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SK - II</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url() ?>asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url() ?>asset/custom.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/icheck/flat/green.css" rel="stylesheet">

  <!-- Script -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>asset/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>asset/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url() ?>asset/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url() ?>asset/build/js/custom.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="page-container">
    <div class="page-wrapper" align="center" style="margin-top:50px;margin-bottom: 0px;bottom:0;">
      <div class="row" style="align-content: center;">
        <img src="<?php echo base_url() ?>asset/images/sk-ii-logo-white.png" alt="" style="height: 200px; width: 500px;">
      </div>
      <!-- <div class="row">
        <h3><i>SK - II</i></h3>
      </div> -->
    </div>
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form role="form" method="post" action="<?php echo base_url('front/setTable') ?>">
            <h1>Login Table</h1>
            <!-- <div>
              <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div> -->
            <div class="form-group">
                        <select id="table" name="table" class="form-control" placeholder="Table Number" required>
                            <?php foreach($this->db->query("select * from counter order by counter_number asc")->result() as $a): ?>
                                <option value="<?php echo $a->counter_number ?>"><?php echo $a->counter_number ?></option>
                            <?php endforeach ?>
                          </select>
            <div>
              <br>
              <button type="submit" class="btn btn-default submit">Sign In</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
     
    </div>
    <div class="wrapper">
      <div class="row x_footer">
        
      </div>
    </div>
  </div>

</body>

</html>
