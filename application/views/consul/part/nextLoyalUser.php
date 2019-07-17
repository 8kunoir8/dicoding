<?php
    $data = $this->db->query("select queue.id, is_called, is_done, date, ticket, counter_id, member_id, member.`name` as name from queue
                              left join member on queue.member_id = member.id
                              where is_called = 0 and is_done = 0 and counter_id = 'Empty' and 
                              member_id in (select id from member where type = 'Product Purchase') order by ticket desc limit 6;")->result();
?>

<div class="left-card-bottom">
  <div class="row" style="text-align:center">
        <small class="pull-left" style="color: white;font-size:20px;margin-top: 5%;margin-left: 25%;"><strong>Next Loyal User</strong></small>
    </div>
    <!-- <hr> -->
    <?php if($data == null || $data == ""): ?>
  <span style="text-align: center"> - </span>
    <?php endif ?>
<?php foreach($data as $item): ?>
    <hr>
    <div class="row">
        <span style="color: white;font-size: 18px;"><?php echo $item->ticket == null ? "-" : $item->ticket ?> : <?php echo $item->name ?></span>
    </div>
<?php endforeach ?>
</div>