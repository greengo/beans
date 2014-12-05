<?php
  class QueueController extends BaseController{

    public function add()
    {
      Queue::push('MyQueue', array());
    }
}
