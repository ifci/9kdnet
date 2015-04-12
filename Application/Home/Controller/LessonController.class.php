<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LessonController extends BaseController {

    public function index() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_LESSON'));
        $page = M('Page')->where("unique_id='kcjs' AND display=1")->field('id,page_name,content')->order('id')->select();
        $this -> assign("page", $page);
        $this->display();
    }

}