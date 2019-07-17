        <style>
            .verticalLine {
                border-left: thin solid white;
            }

            .card-slide {
                width: 165px;
                background: #a20111;
                height: 275px;
                border-width: thick;
                border-color: white;
                text-align: center;
                margin-left: 5px;
            }

            .marq-text {
                margin-top: 3%;
                margin-left: 5%;
                width: 120%;
                background-color: #a20111;
                color: white;
                height: 35px;
                font-size: 28px;
            }

            .foot {
                text-align: center;
                color: white;
                /*margin-top: 2%;*/
                margin-bottom: -5px;
            }

            .left-card-top {
                background: #a20111;
                height: 215px;
                border-width: thick;
                border-color: white;
                text-align: center;
                margin-left: 5px;
                margin-top: 7%;
            }

            .left-card-bottom {
                background: #a20111;
                height: 460px;
                border-width: thick;
                border-color: white;
                text-align: center;
                margin-left: 5px;
            }

            .card-head {
                color: white;
                font-size: 30px;
                margin-top: 9%;
                margin-left: 22%;
            }

            .card-sign-red {
                background-color: red;
                margin-top: 5%;
            }

            .card-sign-green {
                background-color: green;
                margin-top: 5%;
            }
        </style>
        <script type="text/javascript">
            function cardNewMember() {
                $("#nextNumber").load("/sk2/front/LoadCardNewMember");
            }

            // function cardLoyalMember() {
            //     $("#nextNumber").load("/sk2/front/LoadCardLoyalMember");
            // }

            function queueNewUser() {
                $("#counterConsul").load("/sk2/front/LoadQueueNewUser");
            }

            function queueLoyalUser() {
                $("#counterPurchase").load("/sk2/front/LoadQueueLoyalUser");
            }

            function LoadNewUser() {
                cardNewMember();
                queueNewUser();
                setTimeout(() => {
                    LoadLoyalUser();
                    console.log("load new user");
                }, 8000);
            }

            function LoadLoyalUser() {
                cardNewMember();
                queueLoyalUser();
                setTimeout(() => {
                    LoadNewUser();
                    console.log("load loyal user");
                }, 8000);
            }

            function loadSoundCounter() {
                setTimeout(() => {
                    console.log("load sound");
                    // $("#counterSoundContent").load('/sk2/front/LoadSoundContent');
                }, 100);
            }
            $(document).ready(function() {
                LoadNewUser();
                // loadSoundCounter();
                setInterval(function() {
                    console.log("load counter");
                    $("#counterSoundContent").load('/sk2/front/LoadSoundContent');
                }, 18000);
                $.ajaxSetup({
                    cache: false
                });
            });
            function display_c() {
                var refresh = 1000; // Refresh rate in milli seconds
                mytime = setTimeout('display_ct()', refresh);
            }

            function display_ct() {
                var x = new Date();
                var x1 =(x.getHours()<10?"0"+x.getHours():x.getHours()) + ":" + (x.getMinutes()<10?'0'+x.getMinutes():''+x.getMinutes());
                document.getElementById('ct').innerHTML = x1;
                display_c();
            }
        </script>
        <div id="counterSoundContent">

        </div>
        <div class="container">
            <div class="col-lg-12" style="margin-left: -100px;margin-top: -5px;">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="left-card-top">
                            <div class="row" style="text-align:center;">
                                <img src="<?php echo base_url() ?>asset/images/sk-ii-logo-white.png" style="width:70px;margin-left: 5px;margin-top: 15px">
                            </div>
                            <hr>
                            <div class="row" style="margin-top:-5%">
                                <span style="color: white;font-size: 20px;">Emporium, 22 - 28 April 2019</span>
                            </div>
                            <div class="row" style="margin-top:3%">
                                <span style="color: white;font-size: 60px;"><span id="ct"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="nextNumber" style="margin-top: 3.25%;">
                        <div class="left-card">
                            <div class="row" style="text-align:center">
                                <small class="pull-left" style="color: white;font-size:20px;margin-top: 5%;margin-left: 25%;"><strong>Next Loyal User</strong></small>
                            </div>
                            <hr>
                            <!-- <div class="row" style="margin-top:-5%">
                                        <span style="color: white;font-size: 20px;">Emporium, 22 - 28 April 2019</span>
                                    </div>   -->
                            <div class="row" style="margin-top:15%">
                                <span style="color: white;font-size: 60px;">103</span>
                            </div>
                            <div class="row" style="margin-top:5%">
                                <span style="color: white;font-size: 20px;">Frans Lazuardi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <span style="font-size:65px;text-align:center;color:white;margin-left:55%;">
                            <img src="<?php echo base_url() ?>asset/images/sk-ii-logo-white.png" style="width:120px;">
                        </span>
                    </div>
                    <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:130%">
                        <div class="carousel-inner">
                            <div class="item active"> -->
                    <div class="row" id="counterPurchase" style="">
                       
                    </div>
                    <div class="row" id="counterConsul">
                        
                    </div>
                    <!--  </div>
                            <div class="item">
                                <div class="row" style="margin-top:5%">
                                        <div class="col-lg-12" style="width:129%">
                                            <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 7</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">107</span>
                                           
                                            <div class="row card-sign-red">
                                                <span style="color: white;font-size: 20px;">Occupied</span>
                                            </div>      
                                        </div>
                                        <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 8</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">-</span>
                                            </div>  
                                           
                                            <div class="row card-sign-green">
                                                <span style="color: white;font-size: 20px;">Empty</span>
                                            </div>        
                                        </div>
                                        <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 9</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">109</span>
                                            </div>  
                                            <div class="row card-sign-red">
                                                <span style="color: white;font-size: 20px;">Occupied</span>
                                            </div>        
                                        </div>
                                        <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 10</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">-</span>
                                            </div>  
                                         
                                            <div class="row card-sign-green">
                                                <span style="color: white;font-size: 20px;">Empty</span>
                                            </div>        
                                        </div>
                                        <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 11</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">-</span>
                                            </div>  
                                       
                                            <div class="row card-sign-green">
                                                <span style="color: white;font-size: 20px;">Empty</span>
                                            </div>        
                                        </div>
                                        <div class="col-lg-2 card-slide">
                                            <div class="row">
                                                <small class="pull-left card-head"><strong>Table 12</strong></small>
                                            </div>
                                            <hr>
                                            <div class="row" style="margin-top:35%">
                                                <span style="color: white;font-size: 60px;">112</span>
                                            </div>  
                                           
                                            <div class="row card-sign-red">
                                                <span style="color: white;font-size: 20px;">Occupied</span>
                                            </div>        
                                        </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                   
                    </div> -->
                    <marquee direction="right" class="marq-text">SPECIAL OFFER FOR SK-II NEW USERS</marquee>
                </div>
            </div>

        </div>
        <!-- <div class="row foot">
            <div class="col-lg-12">

                <span class="copyright text-muted small" style="color:white;">Copyright &copy; Kunoir 2019.</span>
            </div>
        </div> -->
        </body>
        <style>
            .error {
                color: red;
            }
        </style>

        </html>