<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class ConnectController extends BaseController {

    public function index() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_INTRODUCE'));
        $this->jkdjs = M('Page')->where("unique_id = 'jkdjs' AND display = 1")->order('id')->field('id,page_name,content')->select();
        $this->display();
    }

}