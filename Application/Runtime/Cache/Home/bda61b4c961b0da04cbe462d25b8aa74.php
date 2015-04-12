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
        	<a href="/9kd/Video/index.html" title=""><?php echo ($info['title']); ?></a><?php endif; ?>
        </div>
    </div>
</div>
        <!-- 课程试听 -->
        <div class="introduction kvideo">
            <div class="main_t center tac">
                <b><?php echo L('T_VIDEO');?></b>
            </div>
            <div class="introduction_h1 center">
                <div class="introduction_list clearfix">
                    <i class="icon fl"></i>
                    <div class="introduction_ty2 fl">
                        <div class="introduction_ty3 mt20">
                            <b>课程视频</b>
                        </div>
                    </div>
                </div>
                <div class="kvideo_ty1 clearfix">
                    <div class="kvideo_ty2 fl">
                        <div class="kvideo_ty3 wimg pr">
                            <img src="<?php echo get_default_img($list[0]['image_id']);?>" alt="" />
                            <div class="kvplayer pa">
                                <a href="<?php echo U('video/read',array('id'=>$list[0]['id']));?>" title="$list[0].title" target="_blank">
                                    <div class="kvplayer_a"><img src="/9kd/Public/Home/images/jkd_40.png" alt="" /></div>
                                    <div class="kvplayer_b kvplayer_d"></div>
                                </a>
                            </div>
                        </div>
                        <div class="kvideo_ty4">
                            <div class="kvideo_ty5">
                                <div class="kvideo_ty6 clearfix">
                                    <div class="kvideo_ty7 fl">
                                        <b>九口袋课程试听</b>
                                    </div>
                                    <div class="kvideo_ty8 tar fr">
                                        <?php echo (date('Y月m日',$list[0]["published"])); ?>
                                    </div>
                                </div>
                                <div class="kvideo_ty9">
                                    <b>域名网址：<?php echo ($list[0]["url"]); ?></b>
                                </div>
                                <div class="kvideo_ty10">
                                    课程介绍：</div>
                                <div class="kvideo_ty10 kvideo_ty11">
                                    <?php echo ($list[0]["content"]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kvideo_ty12 fl">
                        <ul>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="pr wimg">
                                <img src="<?php echo get_default_img($vo['image_id']);?>" alt="" />
                                <div class="kvplayer pa">
                                    <a href="<?php echo U('video/read',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>" target="_blank">
                                        <div class="kvplayer_a"><img src="/9kd/Public/Home/images/jkd_40.png" alt="" /></div>
                                    </a>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="introduction_h1 bgf8">
                <div class="center">
                    <div class="introduction_list introduction_list2 clearfix">
                        <i class="icon fl"></i>
                        <div class="introduction_ty2 fl">
                            <div class="introduction_ty3 mt20">
                                <b>课程图集</b>
                            </div>
                        </div>
                    </div>
                    <ul class="kvideo_ty13 clearfix">
                        <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=58 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(8) ->select(); foreach ($_news_list as $key=>$new):?><li class="pr">
                            <div class="kvideo_ty21">
                                <div class="kvideo_ty22 wimg pa">
                                    <a href="<?php echo U('news/read',array('id'=>$new['id']));?>" title="">
                                        <img src="<?php echo get_default_img($new['image_id']);?>" alt="" />
                                    </a>
                                </div>
                                <div class="kvideo_ty23">
                                    <b><?php echo cutStr($new['title'],30,0);?></b>
                                </div>
                            </div>
                        </li><?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="introduction_h2">
                <div class="center">
                    <div class="introduction_list introduction_list3 clearfix">
                        <i class="icon fl"></i>
                        <div class="introduction_ty2 fl">
                            <div class="introduction_ty3 mt20">
                                <b>诊断报告</b>
                            </div>
                        </div>
                    </div>
                    <div class="kvideo_ty14">
                        <div class="kvideo_ty15 tac">
                            <b>每日前10名咨询免费获得网络营销行业诊断报告一份</b>
                        </div>
                        <div class="clearfix">
                            <div class="kvideo_ty16 fl">

                            </div>
                            <div class="kvideo_ty17 fl">
                                <div class="kvideo_ty18">
                                    <b>请准确填写下列信息，我们的客服将在24小时内发给您！</b>
                                </div>

                                <form action="<?php echo U('message/add');?>" method="post">
                                    <div class="kvideo_ty19">
                                        姓&nbsp;&nbsp;&nbsp;&nbsp;名：&nbsp;&nbsp;<input name="name" id="uname" value="" type="text"  />
                                    </div>
                                    <div class="kvideo_ty19">
                                        电&nbsp;&nbsp;&nbsp;&nbsp;话：&nbsp;&nbsp;<input name="tel" id="utel" value="" type="text" />
                                    </div>
                                    <div class="kvideo_ty19">
                                        验&nbsp;证&nbsp;码：
                                        <input class="input" name="verify_code" id="verify_code" type="text" value="" style="width:100px;" />
                                        <img src="<?php echo U('Base/verify_code');?>"  title="看不清？单击此处刷新" onclick="this.src+='?rand='+Math.random();"  style="cursor: pointer; vertical-align: middle;"/>
                                    </div>
                                    <input type="submit" class="kvideo_ty20" value="" onclick="return check()" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="introduction_h6 pr wimg">
                <div class="introduction_ty24 pa">
                    <div class="center">
                        <!-- 我们最近的课程安排是在<span class="css29343">2014</span>年<span class="css29343">12</span>月<span class="css29343">11</span>日， -->
                        九口袋课堂欢迎您
                        <br />心动不如行动，赶快到现场参与我们的活动吧！
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
        Copyright © 2012-2015 www.9koudai.org.cn All Rights Reserved <?php echo ($site["name"]); ?> 版权所有 <?php echo ($site["icp"]); ?>      </div>
    </div>
    <!--footer结束-->

</body>
</html>