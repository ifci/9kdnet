<?php
/**
 * Created by PhpStorm.
 * User: cony
 * Date: 14-3-7
 * Time: 下午3:21
 */
namespace Home\Controller;
use Think\Controller;
class NewsController extends BaseController {
    /**
     * 列表页
     */
    public function index(){
        $N = M("News");
        $C = M("Category");
        /*$cid=I('get.cid');
        if($cid){
            $map['n.cid']=$cid;
        }*/
        $map['n.cid']=58;
        $map['n.status']=1;
        $map['n.lang']=LANG_SET;
        $count = $N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->field('n.id')
            ->where($map)->count();
        $page = new \Think\Page($count,C('LISTNUM.newslist'));
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $list=$N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->field('n.id,n.cid,n.title,n.summary,n.update_time,n.click,n.image_id,c.name as cname,n.published')
            ->where($map)->order('id desc')->limit("$page->firstRow, $page->listRows")->select();
        $this->assign("list", $list);
        $this->assign("ad_info", $this->getAd());
        $this->assign('webtitle',L('T_NEWS'));
        $this->display();
    }
    /**
     * 详情页
     */
    public function read(){
        $this->assign("ad_info", $this->getAd());
        $this->assign('details', 1);

        $id=I('get.id');
        $m_news=M('news');
        if(!$id){$this->_empty($id);}
        $map['id']=$id;
        if($info=$m_news->where($map)->find()){
            if($info['status']==0){
                $this->_empty($id);
            }
            $this->assign('info',$info);

            // 热门资讯
            $hot = $m_news -> where('status=1 and cid='.$info['cid']) -> order('click DESC') -> limit(10) -> select();
            $this -> assign('hot',$hot);

            // 下一页
            $next = M('News')->where('id > '.$this->info['id'].' AND cid = '.$this->info['cid'])->order('id asc')->field('id,title')->find();
            // 上一页
            $prev = M('News')->where('id < '.$this->info['id'].' AND cid = '.$this->info['cid'])->order('id desc')->field('id,title')->find();
            $this->assign('next',$next);
            $this->assign('prev',$prev);


            $C = M("Category");
            $map2['cid']=$info['cid'];
            $info['cname']=$C->where($map2)->getField('name');
            $this->assign('info',$info);
            $this->assign('auther',$this->getAuther($info['aid']));
            $m_news->where($map)->setInc('click',1);
            $this->assign('webtitle',L('T_NEWS'));
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