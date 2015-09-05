<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView();
    }
    public function submitAction() {
        $retArr = array('errorno'=>0, 'message'=>'sucess', 'data'=>$_POST);
        echo json_encode($retArr);
        exit(0);
    }
}
