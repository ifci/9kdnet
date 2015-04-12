<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class ServiceController extends BaseController {

    public function index() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_SERVICE'));
        $page = M('Page')->where("unique_id='fwjs' AND display=1")->field('id,page_name,content')->order('id')->select();
        $this -> assign("page", $page);
        $this->display();
    }

}