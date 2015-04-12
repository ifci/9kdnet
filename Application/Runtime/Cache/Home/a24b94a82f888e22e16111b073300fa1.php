<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($webtitle); ?>-<?php echo ($site["name"]); ?></title>
<meta name="keywords" content="<?php echo ($site["keyword"]); ?>,<?php echo ($info['keywords']); ?>" />
<meta name="description" content="<?php echo ($site["description"]); ?>,<?php echo ($info['description']); ?>" />
<link rel="stylesheet" type="text/css" href="/9kd/Public/Min/?f=/9kd/Public/Home/css/base.css|/9kd/Public/Home/css/index.css|/9kd/Public/Home/css/main.css" />
<script type="text/javascript" src="/9kd/Public/Min/?f=/9kd/Public/Home/js/jquery.js|/9kd/Public/Home/js/jquery.flexslider.min.js|/9kd/Public/Home/js/jquery.SuperSlide.2.1.1.js|/9kd/Public/Home/js/jquery.rotate.min.js|/9kd/Public/Home/js/index.js"></script>
<script>
$(window).load(function() {
    $('.flexslider').flexslider();      //引用幻灯片
});
</script>
</head>

<body>
    <!--header开始-->
    <div id="header" class="clearfix">
        <!--logo开始-->
        <div class="logo fl">
            <div class="logo_t clearfix pr">
                <a href="/9kd/"><img src="/9kd/Public/Home/images/logo.png" alt="" /></a>
               <!--  <a href="#" title=""></a> -->
                <ul class="city_ul pa">
                <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php echo ($i == 1 ? 'class="city_active"' :''); ?>><a href="<?php echo ($vo["c_url"]); ?>" title=""><?php echo ($i==1 ? '[' : ''); echo ($vo["area"]); echo ($i==1 ? ']' : ''); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!-- <select name="" id="" class="city_ul pa">
                    <option value="上海">[ 上海 ]</option>
                    <option value="杭州">[ 杭州 ]</option>
                    <option value="成都">[ 成都 ]</option>
                    <option value="广州">[ 广州 ]</option>
                </select> -->
            </div>
            <div class="logo_b">
                CCTV财经战略合作伙伴<br />
                让中国制造成为世界品牌
            </div>
        </div>
        <!--logo结束-->
        <div class="header_r fr">
            <div class="tel">
                <b class="fr">免费热线电话：<?php echo ($site["tel"]); ?></b>
            </div>
            <!--导航开始-->
            <div class="nav">
                <ul class="clearfix">
                    <li class="<?php echo CONTROLLER_NAME == 'Index'?'nav_on':'';?>"><a href="/9kd/">首页</a></li>
                    <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='top' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li <?php if($nav_name == $webtitle): ?>class='nav_on'<?php endif; ?>">
                        <a href="<?php if($action == null): echo ($link); else: echo U($action); endif; ?>" <?php if($target == 1): ?>target="_blank"<?php endif; ?>><?php echo ($nav_name); ?></a>
                        <?php if(!empty($child)): ?><ul class="nav2">
                                <?php if(is_array($child)): $i = 0; $__LIST__ = $child;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nc): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo U($nc[action]);?>"><?php echo ($nc["nav_name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul><?php endif; ?>
                    </li><?php endforeach; ?>
                </ul>
            </div>
            <!--导航结束-->
        </div>
    </div>
    <!--header结束-->






 <!--content开始-->
    <div id="content">
        <div class="main_ban wimg">
    <!-- <img src="/9kd/Public/Home/images/pic_111.jpg" alt="" /> -->
    <img src="/9kd/Uploads/picture/<?php echo ($ad_info[0]["ad_img"]); ?>" alt="" />
    <div class="main_nav center pr">
        <div class="main_navbg"></div>
        <div class="main_tel pa"><b>全国免费热线：<?php echo ($site["tel"]); ?></b></div>
        <div class="main_po pa">
        	当前页面：
        	<a href="/9kd/" title="">首页</a>
        	>
        	<a href="<?php echo U($b_url);?>" title=""><?php echo ($webtitle); ?></a>
        	<?php if($details == 1): ?>>
        	<a href="/9kd/News/read/id/21.html" title=""><?php echo ($info['title']); ?></a><?php endif; ?>
        </div>
    </div>
</div>
        <!-- 案例 -->
        <div class="introduction" style="margin-top:20px;">
            <div class="casede center clearfix">
                <div class="categoryLeft">
                    <div class="fatherNav">
                        热门资讯<a href="<?php echo U('/News/');?>" title="点击查看更多新闻">查看更多>></a>
                    </div>
                    <div class="leftNav">
                        <ul>
                            <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="leftContact">
                        <span>九口袋在线咨询</span>
                        <div class="tencent">
                            <ul>
                                <li>建站顾问：&nbsp;&nbsp;
                                    <a href="tencent://message/?uin=<?php echo ($site["qq"]); ?>">
                                        <img title="点击这里给我发消息" border="0" alt="点击这里给我发消息" src="http://pub.idqqimg.com/qconn/wpa/button/button_11.gif">
                                    </a>
                                </li>
                                <li>技术支持：&nbsp;&nbsp;
                                    <a href="tencent://message/?uin=<?php echo ($site["qq"]); ?>">
                                        <img title="点击这里给我发消息" border="0" alt="点击这里给我发消息" src="http://pub.idqqimg.com/qconn/wpa/button/button_11.gif">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span class="leftTel">
                            咨询电话：<?php echo ($site["tel"]); ?>
                        </span>
                    </div>
                    <div class="leftBottom"></div>
                </div>




<div style="float:left;width:730px;border:1px solid #c7c7c7;margin-bottom: 20px;">
                <div class="casede_t tac">
                        <b><?php echo ($info["title"]); ?></b>
                    </div>
                <p class="bottom">

                </p>
                    <div class="casede_c">
                        <?php echo ($info['content']); ?>
                    </div>

                <div class="casede_b clearfix">
                    <div class="casede_bl fl">
                        <a href="<?php echo $prev == null ? 'javascript:':U('News/read',array('id'=>$prev[id]));?>" title="<?php echo ($prev["title"]); ?>">上一篇： <?php echo $prev[title] == null ?'没有了':$prev[title];?></a>

                    </div>
                    <div class="casede_br fr">
                        <a href="<?php echo $next == null ? 'javascript:':U('News/read',array('id'=>$next[id]));?>" title="<?php echo ($next["title"]); ?>">下一篇： <?php echo $next[title] == null ?'没有了':$next[title];?></a>
                    </div>
                </div>
                <div class="weibo">
                    <script type="text/javascript">
                        (function(){
                        var url = "http://widget.weibo.com/distribution/comments.php?width=680&url=http%3A%2F%2F9koudai.net&color=cccccc,ffffff,4c4c4c,5093d5,cccccc,33fe54&colordiy=1&dpc=1";
                        document.write('<iframe id="WBCommentFrame" src="' + url + '" scrolling="no" frameborder="0" style="width:680px"></iframe>');
                        })();
                        </script>
                        <script src="http://tjs.sjs.sinajs.cn/open/widget/js/widget/comment.js" type="text/javascript" charset="utf-8"></script>
                        <script type="text/javascript">
                        window.WBComment.init({
                            "id": "WBCommentFrame"
                        });
                    </script>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--content结束-->
<!--footer开始-->
    <div id="footer">
        <!--第十个内容块-->
        <div class="cont_h10">
            <div class="center clearfix">
                <ul class="cont_ty45 clearfix">
                    <li class="cont_ty46"  ><a href="/9kd/" title='首页'  ><span>首页</span></a></li>
                    <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='top' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li>
                        <a href="<?php echo ($link); ?>" title="<?php echo ($nav_name); ?>"><span><?php echo ($nav_name); ?></span></a>
                    </li><?php endforeach; ?>
                </ul>
                <div class="cont_ty47 fl">
                    九口袋公司地址: <?php echo ($site["address"]); ?><br />
                </div>
                <div class="cont_ty48 fl">
                    九口袋全国免费服务热线：<br /><?php echo ($site["tel"]); ?>
                </div>
                <div class="cont_ty49 tac fl">
                    <img src="/9kd/Public/Home/images/qr.png" alt="" />
                    <i>九口袋网络官方微信</i>
                </div>
            </div>
        </div>
        <div class="flink tac qds">
            九口袋友情链接：
            <?php $__m_link=M("link");$__link_list=$__m_link->where('display=1')->order('sort DESC')->limit(6)->select();foreach($__link_list as $_lk=>$_lv):extract($_lv);?><a href="<?php echo ($link); ?>" <?php if($target == 2): ?>target='_blank'<?php endif; ?> title="<?php echo ($title); ?>"><?php echo ($title); ?></a><span>|</span><?php endforeach; ?>
        </div>
        <div class="flink tac" style="padding-top:0;">
        九口袋提供：
        <a href="<?php echo U('/lesson/index');?>">三天两夜封闭课程</a>|
        <a href="<?php echo U('/service/index');?>http://www.9koudai.org.cn/service/index.html">加速工厂落地操作</a>|
        <a href="<?php echo U('/service/index');?>http://www.9koudai.org.cn/service/index.html">代运营入驻服务</a>|
        <a href="http://www.9koudai.cn">手工网站建设业务</a>
        <strong>九口袋--落地操作赚钱首选</strong>
         <br />
        Copyright © 2012-2015 www.9koudai.net All Rights Reserved 上海九口袋实业有限公司 版权所有 <?php echo ($site["icp"]); ?>      </div>
    </div>
    <!--footer结束-->

</body>
</html>