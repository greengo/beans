<?php
  class QueueController extends BaseController{

    public function add()
    {
      Queue::push('MyQueue', array());
    }

    public function log()
    {
      //Queue::push('MyQueue', array());
      Log::info('testing log functionality');
    }
}
