<!-- page content -->
        <style>
          body, html {width: 100%; height: 100%; margin: 0; padding: 0}
          .first-row {position: absolute;top: 0; left: 0; right: 0; height: 100px;}
          .second-row {top: 100px; left: 0; right: 0; bottom: 0;height: 650px;}
          .second-row #frame {display: block; width: 100%; height: 100%; border: none;}
          .second-row iframe {display: block; width: 100%; height: 100%; border: none;}
        </style>
        

        <div class="right_col" role="main"">

          <div class="page-container" style="height: 700px;top:30%;left:25%;">
            <div class="row x_title">
                  <div class="col-md-6">
                    <h3>CCTV : <small><?php echo $frame1['name']; if($frame1['portHttp'] == ''){echo $frame1['portHttp'];} ?> </small></h3>
                  </div>
            </div>
            <div class="second-row">
              <div class="col-md-6">
                <small>Username : <?php echo $frame1['user'] ?> | Password : <?php echo $frame1['pass'] ?> | ID : <?php echo $frame1['dvrId'] ?> | Port DVR : <?php echo $frame1['portDvr'] ?> | Link : <strong><i><a id="login" href="<?php if($frame1['portHttp'] == ''){echo $frame1['link'];}else{echo $frame1['link'].':'.$frame1['portHttp'];} ?>" target="_blank">Open in New Tab</a></i></strong></small>
              </div>
              <!--div id="frame"></div-->
              <hr>
              <div class="vxgplayer" id="vxg_media_player1" url="rtsp://184.72.239.149/vod/mp4:BigBuckBunny_115k.mov" autostart controls avsync nmf-src="<?php echo base_url() ?>asset/vxgplayer/pnacl/Release/media_player.nmf" nmf-path="media_player.nmf" ></div>
              <hr>
              <iframe src="<?php if($frame1['portHttp'] == ''){echo $frame1['link'];}else{echo $frame1['link'].':'.$frame1['portHttp'];} ?>" id="excontent" frameborder="0"></iframe>
              <!--iframe src="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame['portHttp'] ?>/mpeg4/ch1/sub/av_stream " id="excontent" frameborder="0"></iframe-->
              
              <!--embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org"
               width="320"
               height="240"
               target="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>/mpeg4/ch1/sub/av_stream"
               id="vlc" />

               <video src="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>/mpeg4/ch1/sub/av_stream"></video>

               <a href="rtsp://admin:act12345@<?php //echo $frame1['ipPub'] ?>/mpeg4/ch1/sub/av_stream" class="btn btn-primary">Camera 1</a>

               <object classid="clsid:9BE31822-FDAD-461B-AD51-BE1D1C159921" codebase="http://download.videolan.org/pub/videolan/vlc/last/win32/axvlc.cab" id="vlc" name="vlc" class="vlcPlayer" events="True"> <param name="Src" value="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>/mpeg4/ch1/sub/av_stream" />  <param name="ShowDisplay" value="True" /> <param name="AutoLoop" value="True" /> <param name="AutoPlay" value="True" />  <embed id="vlcEmb" type="application/x-google-vlc-plugin" version="VideoLAN.VLCPlugin.2" autoplay="yes" loop="no" width="640" height="480" target="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>/mpeg4/ch1/sub/av_stream" ></embed> 
               </object>
               <video id="test_video" controls="" autoplay="" src="blob:https://specforge.com/9882ce18-1c08-434b-bbb9-92ef3f25a655">
                    <source src="rtsp://admin:act12345@<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>/mpeg4/ch1/sub/av_stream">
                    <source src="rtsp://11.2.3.4/H264" type="application/x-rtsp">
                    <source src="rtsp://192.168.11.89:554/H264_LOW" type="application/x-rtsp">
                    <source src="rtsp://184.72.239.149/vod/mp4:BigBuckBunny_115k.mov" type="application/x-rtsp">
                    <source src="http://www.streambox.fr/playlists/x36xhzz/x36xhzz.m3u8" type="application/x-mpegurl">
                    <source src="http://212.113.50.162/hls2/14653256347a11c.mp4.m3u8" type="application/x-mpegurl">
                    <source src="unix://hls.stream1:hls1/hls2/14653256347a11c.mp4.m3u8" type="application/x-mpegurl" data-master-id="1">
                    <source src="unix://hls.stream:hls/hls2/14653256347a11c.mp4.m3u8" type="application/x-mpegurl" data-mirror-for="1">
                    <source src="unix://hls.stream:hls//hls/vid.mp4.m3u8" type="application/x-mpegurl">
                </video>
                <div class="controls form">
                    <div>
                        Playback rate:&nbsp;
                        <input id="rate" class="input" type="range" min="0.5" max="5.0" value="1.0" step="0.5">
                        <output for="rate" id="rate_res">live</output>
                    </div>
                    <div>
                        <button id="to_end" class="btn btn-success">live</button>
                    </div>
                </div>
                <script src="<?php //echo base_url('asset/') ?>test.bundle.js"></script>
                <script>
                    //var range = document.getElementById('rate');
                    //var set_live = document.getElementById('to_end');
                    //var range_out = document.getElementById('rate_res');
                    //var player = document.getElementById('test_video');
                    //range.addEventListener('input', function () {
                    //    player.playbackRate = range.value;
                    //    range_out.innerHTML = `x${range.value}`;
                    //});
                    //set_live.addEventListener('click', function () {
                    //    range.value = 1.0;
                    //    range_out.innerHTML = `live`;
                    //    player.playbackRate = 1;
                    //    player.currentTime = player.buffered.end(0);//player.seekable.end(player.seekable.length - 1);
                    //});
                </script-->
              
            </div>
          </div>
          
          <br />
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div style="position:absolute;">
            <marquee behavior="" direction="right"><span style="font-color:red;">Disarankan menggunakan <i>Internet Explorer</i> untuk mengakses Website Portal CCTV ini !</span></marquee>
          </div>
          <div class="clearfix"></div>
        </footer>
        <script type="text/javascript">

          //if ( parent && parent.attachEvent && parent !== parent.top ) {
          //  parent.attachEvent( "onunload", function() {
          //    setDocument();
          //  });
          //}


          //load div frame
          //$("#frame").html("<object style='display: block; width: 100%; height: 100%; border: none;' data='<?php //echo $frame1['link'].':'.$frame1['portHttp'] ?>'>");
          

          //var $user = "<?php //echo $frame1['user'] ?>";
          //var $pass = "<?php //echo $frame1['pass'] ?>";
          ////jQuery('#frame').ready().contents().find('#username').val(user);
          //if(jQuery('#frame').contents().find('#login-user')){
          //  var $elem = jQuery('#frame').contents().find('#login-user');
          //  alert($elem.attr('#username'));
          //  //$('#frame').contents().find('#username').appendTo('ng-value',user);
          //}
          
        </script>
        <script type="text/javascript">
          //$('button').click(function(){
          //    var user = $('input#username');
          //    var pass = $('input#password');
          //    function loginController($scope) {
          //      $scope.username = 'admin';
          //      $scope.password = 'act12345';
          //      user.trigger('input'); // Use for Chrome/Firefox/Edge
          //      user.trigger('change'); // Use for Chrome/Firefox/Edge + IE11
          //      pass.trigger('input'); // Use for Chrome/Firefox/Edge
          //      pass.trigger('change'); // Use for Chrome/Firefox/Edge + IE11
          //    }
          //    user.val('admin');
          //    user.trigger('input'); // Use for Chrome/Firefox/Edge
          //    user.trigger('change'); // Use for Chrome/Firefox/Edge + IE11
          //    pass.val('act12345');
          //    pass.trigger('input'); // Use for Chrome/Firefox/Edge
          //    pass.trigger('change'); // Use for Chrome/Firefox/Edge + IE11
          //});
        </script>
        
        <script type="text/javascript">
          //window.onload = function() {
          //  function (document.getElementById("<?php //echo $frame1['name'] ?>").onload == true){
          //    alert('working');
          //  }
          //}
        </script>

        <script type="text/javascript">
          //window.onload = function(){
          // Define the target
          //var win = document.getElementById('pool').contentWindow;
          //document.getElementById('username').value = 'admin';
          //document.getElementById('password').value = 'act12345';
          //    //// Define the event trigger
          //    //document.getElementById('form').onsubmit = function(e){
          //    //    // Define source value or message
          //    //    win.postMessage(document.getElementById('source').value);  
          //    //    e.preventDefault();
          //    //};
          //};
        </script>
          
        <script type="text/javascript">
          
          //window.onload = function(){
          //  var ifrm = document.getElementById("SUMURBATU");
          //  var inDoc = (ifrm.contentDocument) ? ifrm.contentDocument : ifrm.contentWindow.document;
          //  document.getElementById("SUMURBATU").onload = function(){
          //    document.getElementById('username').value = 'admin';
          //    document.getElementById('password').value = 'act12345';
          //    //alert("jalan");
          //  }
          //}
          //function getid(){
          //  var ifrm = document.getElementById("SUMURBATU");
          //  var inDoc = (ifrm.contentDocument) ? ifrm.contentDocument : ifrm.contentWindow.document;  
          //  inDoc.getElementById('username').value = 'admin';
          //  inDoc.getElementById('password').value = 'act12345';
          //  inDoc.getElementById('username').text = 'admin';
          //  inDoc.getElementById('password').text = 'act12345';         
          //  if(document.getElementById('SUMURBATU').contentWindow.document.getElementById('username').value = ""){
          //    alert('ada');
          //  }
          //}
        </script>

        <script type="text/javascript">
          //$(document).ready(function(){
          //  var ifrm = $("iframe#SUMURBATU");
          //  ifrm.load(function(){
          //    var user = 'admin';
          //    ifrm.contents().find('#username').appendTo('[value]=admin');
          //  })
          //  //ifrm.find(".page").css("background-color", "#fff");
          //});
        </script>
        <!-- /footer content -->
      </div>
    </div>