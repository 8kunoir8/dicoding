        <style>
        .collapsible {
        background-color: white;
        color: #980a2b;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 20px;
        }

        .active, .collapsible:hover {
        background-color: #f2dede;
        }

        .content {
        padding: 0 18px;
        overflow: hidden;
        background-color: #f2dede;
        height:450px;
        }
        </style>
        <script type="text/javascript"> 
            function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct() {
            var x = new Date()
            var x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
            document.getElementById('ct').innerHTML = x1;
            display_c();
            }
        </script>
        
        <div class="container" style="width:100%;">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color:#980a2b;font-size:20px">
                    <div class="panel-heading collapsible">
                        <h4 class="panel-title">
                        <strong>Ticket</strong>
                        </h4>
                    </div>
                </a>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                </div>
                <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color:#980a2b;font-size:20px">
                    <div class="panel-heading collapsible">
                        <h4 class="panel-title">
                        <strong>Flower Counter</strong>
                        </h4>
                    </div>
                </a>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        <div class="row" style="text-align: center;color:white;margin-top: 1px;margin-bottom: -5px">
                        <div class="col-lg-12">
                            <!-- <marquee direction="right" style="background-color: #f8f8f8;color: #980a2b;">SK II - Running Text</marquee> -->
                            <span class="copyright text-muted small" style="color:white;">Copyright &copy; Kunoir 2019.</span>
                        </div>
            </div>
    </body>
    <style>
        .error{
            color:red;
        }
    </style>
</html>