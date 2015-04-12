<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {

    public function index() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_HOME'));
        $this->gsry = M('Page')->where("unique_id = 'gsry' AND display = 1")->order('id desc')->field('id,page_name,image_id')->select();
        $this->assign("hzhb", M('Ad')->where("position = 'bottom'")->order('id desc')->field('id,ad_name,ad_link,ad_img')->limit('5')->select());
        $this->display();
    }

    /**
     * UC登录测试
     */
    function test(){
        $uc = new \Ucenter\Client\Client();
        $re = $uc->uc_user_login("zhangsan", "123456");//也可以$uc->ucUserLogin(),兼容驼峰式风格
        dump($re);
    }

}