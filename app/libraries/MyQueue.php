<?php

class MyQueue{

  public function fire($job, $data)
  {
    $query = DB::insert('INSERT INTO queue (created_at) VALUES(NOW())');
    $job->delete();
  }

}
