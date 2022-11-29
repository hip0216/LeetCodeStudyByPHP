<?php
class MyStack {
    /**
     */
    function __construct() {
        $this->stack=[];
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[]=$x;
    }
  
    /**
     * @return Integer
     */
    function pop() {
        return array_pop($this->stack);
    }
  
    /**
     * @return Integer
     */
    function top() {
        return ($this->stack)?end($this->stack):false;
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return ($this->stack)?false:true;
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
?>