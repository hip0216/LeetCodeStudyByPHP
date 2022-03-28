<?php
class MyQueue {
    /**
     */
    function __construct() {
        $this->stackarr=[];
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stackarr[]=$x;
    }
  
    /**
     * @return Integer
     */
    function pop() {
        return array_shift($this->stackarr);
    }
  
    /**
     * @return Integer
     */
    function peek() {
        return count($this->stackarr)>0?$this->stackarr[0]:false;
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return !$this->stackarr;
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
?>