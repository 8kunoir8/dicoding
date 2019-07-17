<?php
    $card = $this->db->query("select *, 
    (select is_done from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as is_done, 
    (select is_called from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as is_called, 
    (select member_id from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as member_id, 
    (select ticket from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1) as ticket, 
    (select name from member where id = (select member_id from queue where is_done = 0 and counter_id = counter.id order by ticket limit 1)) as member  
    from counter where counter_type = 'Skin Consultation' order by counter_number asc")->result();
?>

<!-- <div class="" style="text-align:center;margin-top: -5%;margin-left: 25%;margin-bottom:1%">
    <strong style="font-size:30px;color:white">New User</strong>
</div> -->
<div class="col-lg-12" style="width:129%">

    <?php
        foreach($card as $item) {
    ?>
            <div class="col-lg-2 card-slide">
                <div class="row">
                    <small class="pull-left card-head"><strong>Table <?php echo $item->counter_number; ?></strong></small>
                </div>
                <hr>
                <div class="row" style="margin-top:5%">
                    <span style="color: white;font-size: 90px;"><?php echo $item->ticket == null ? "-" : $item->ticket; ?></span>
                </div>
                <div class="row <?php if($item->counter_status == 1){echo "card-sign-red";} else {echo "card-sign-green";} ?>">
                    <span style="color: white;font-size: 20px;"><?php if($item->counter_status == 1){echo $item->member;} else {echo "Empty";} ?>   </span>
                </div>
            </div>
    <?php
        }
    ?>

</div>