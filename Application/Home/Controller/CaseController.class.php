<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CaseController extends BaseController {

    public function index() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_CASE'));

        /*$N = M('News'); // 实例化User对象// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $N->where('status=1 AND cid=57')->order('create_time')->page($_GET['p'].',25')->select();
        $this->assign('list',$list);// 赋值数据集
        $count = $N->where('status=1 AND cid=57')->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出*/


        $N = M("News");
        $C = M("Category");
        //$cid=I('get.cid');
        //if($cid){
            $map['n.cid']=57;
        //}
        $map['n.status']=1;
        $map['n.lang']=LANG_SET;
        $count = $N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->field('n.id')
            ->where($map)->count();
        $page = new \Think\Page($count,2);

        $page -> setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page -> setConfig('next', '下一页');
        $page -> setConfig('prev', '上一页');

        $showPage = $page->show();



        $this->assign("page", $showPage);
        $list=$N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->field('n.id,n.cid,n.title,n.summary,n.update_time,n.click,n.image_id,c.name as cname,n.published,n.url')
            ->where($map)->order('id desc')->limit("$page->firstRow, $page->listRows")->select();
        $this->assign("list", $list);

        $this->display();
    }

    public function read() {
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_CASE'));


        $this->assign('details', 1);


        $id=I('get.id');
        $m_news=M('news');
        if(!$id){$this->_empty($id);}
        $map['id']=$id;
        if($info=$m_news->where($map)->find()){
            if($info['status']==0){
                $this->_empty($id);
            }
            $C = M("Category");
            $map2['cid']=$info['cid'];
            $info['cname']=$C->where($map2)->getField('name');
            $this->assign('info',$info);
            $this->assign('auther',$this->getAuther($info['aid']));
            $m_news->where($map)->setInc('click',1);

	        // 热门案例
	        $hot = $m_news -> where('status=1 and cid=57') -> order('click DESC') -> limit(10) -> select();
	        $this -> assign('hot',$hot);

	        $next = M('News')->where('id > '.$this->info['id'].' AND cid = '.$this->info['cid'])->order('id asc')->field('id,title')->find();
	        $prev = M('News')->where('id < '.$this->info['id'].' AND cid = '.$this->info['cid'])->order('id desc')->field('id,title')->find();
	        $this->assign('next',$next);
	        $this->assign('prev',$prev);

            $this->display();
        }else{
            $this->_empty($id);
        }
    }


    protected function getAuther($id){
        if(!$id){return '';}
        $admin=M('admin');
        $map['aid']=$id;
        return $admin->where($map)->getField('nickname');
    }

}