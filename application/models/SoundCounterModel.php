<?php

class SoundCounterModel extends CI_Model {

    public function get() {
        $query = $this->db->get('queue');
        return $query;
    }

    public function getNext() {
        $query = $this->db->query('SELECT * from queue inner join counter on queue.counter_id = counter.id where queue.is_called = 0 AND queue.is_done = 0 AND counter.counter_status = 0');
        // $query =  $this->db->get_where('queue', array('is_called' => 0, 'is_done' => 0));
        return $query;
    }

}