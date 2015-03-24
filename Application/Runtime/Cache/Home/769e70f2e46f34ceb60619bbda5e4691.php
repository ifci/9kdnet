<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($webtitle); ?>-<?php echo ($site["name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="<?php echo ($site["keyword"]); ?>,<?php echo ($info['keywords']); ?>" />
<meta name="description" content="<?php echo ($site["description"]); ?>,<?php echo ($info['description']); ?>" />
<meta name="author" content="fcdcyy@sina.cn" />
<link type="text/css" href="/9kdnet/Public/Home/css/base.css" rel="stylesheet" />
<link type="text/css" href="/9kdnet/Public/Home/css/index.css" rel="stylesheet" />
<link type="text/css" href="/9kdnet/Public/Home/css/main.css" rel="stylesheet" />
<script type="text/javascript" src="/9kdnet/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/9kdnet/Public/Home/js/jquery.flexslider.min.js"></script>
<script type="text/javascript" src="/9kdnet/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/9kdnet/Public/Home/js/index.js"></script>
</head>

<body>
    <!--header开始-->
    <div id="header" class="clearfix">
        <!--logo开始-->
        <div class="logo fl">
            <div class="logo_t clearfix pr">
                <img src="/9kdnet/Public/Home/images/logo.png" alt="" />
               <!--  <a href="#" title=""></a> -->
                <ul class="city_ul pa">
                    <li class="city_active"><a href="#" title="">[上海]</a></li>
                    <li><a href="#" title="">杭州</a></li>
                    <li><a href="#" title="">成都</a></li>
                    <li><a href="#" title="">广州</a></li>
                </ul>
            </div>
            <div class="logo_b">
                CCTV财经战略合作伙伴<br />
                让中国制造成为世界品牌
            </div>
        </div>
        <!--logo结束-->
        <div class="header_r fr">
            <div class="tel">

                <a href="#" title=""></a>
                <a href="#" title=""></a>
                <a href="#" title=""></a>
                <b class="fr">免费热线电话：<?php echo ($site["tel"]); ?></b>
            </div>
            <!--导航开始-->
            <div class="nav">
                <ul class="clearfix">
                    <li class="nav_on"><a href="/9kdnet/">首页</a></li>
                    <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='top' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li><a href="<?php echo ($link); ?>"><?php echo ($nav_name); ?></a></li>
                        <?php if(!empty($child)): ?><ul>
                                <?php if(is_array($child)): $i = 0; $__LIST__ = $child;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nc): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo ($nc["link"]); ?>"><?php echo ($nc["nav_name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul><?php endif; endforeach; ?>
                </ul>
            </div>
            <!--导航结束-->
        </div>
    </div>
    <!--header结束-->



<link rel="stylesheet" href="/9kdnet/Public/Home/layerslider/css/layerslider.css" type="text/css" />
<!--[if lt IE 9]><script src="/9kdnet/Public/Home/js/html5.js"></script><![endif]-->
<div class="slider"><!-- SLIDER -->
    <div id="layerslider">

        <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ls-layer">
                <img class="ls-bg" src="/9kdnet/Uploads/picture/<?php echo ($vo["ad_img"]); ?>" alt="<?php echo ($vo["ad_name"]); ?>" />
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

</div><!-- END SLIDER -->

<div class="main"><!-- MAIN -->
    <div class="container_12">
    <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image_id,psize,summary") ->where("is_recommend=1 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(3) ->select(); foreach ($_m_product_list as $key=>$pro):?><div class="grid_4">
            <a href="<?php echo U('product/read',array('id'=>$pro['id']));?>"><img src="<?php echo get_default_img($pro['image_id']);?>" alt="<?php echo ($pro["title"]); ?>" width="300" height="158" /></a>
            <h5 class="uppercase">
                <?php echo ($pro["title"]); ?>
            </h5>
            <p>
                <?php echo cutStr($pro['summary'],60,0);?>
            </p><a href="<?php echo U('product/read',array('id'=>$pro['id']));?>" class="link_bottom"><?php echo (L("T_VIEW")); ?></a>
        </div><?php endforeach;?>
        <div class="divider"></div>
    </div>
</div><!-- END MAIN -->

<div class="subcontent"><!-- SUBCONTENT -->
    <div class="container_12">
<div class="grid_6  inner">
<div class="list-type-3">
    <ul>
        <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary") ->where("is_recommend=1 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li>
            <a href="<?php echo U('news/read',array('id'=>$new['id']));?>"><?php echo cutStr($new['title'],30,0);?></a>
        </li><?php endforeach;?>
    </ul>
</div>
</div>
        <div class="grid_6  inner">
            <div >
                <ul>
                    <li>关于我们</li>
                    <li>
                        <h3> <img src="/newconist/Uploads/image/product/20140303/20140303081406_87297.jpg" width="100" height="100" align="left" alt="" /> </h3><p>  在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多<span></span></span></span></span></span></span></span></span></span></span></p>
                    </li>
                </ul>
            </div>
        </div>

</div>
</div><!-- END SUBCONTENT -->


<script src="/9kdnet/Public/Home/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="/9kdnet/Public/Home/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#layerslider').layerSlider({
            skinsPath : '/9kdnet/Public/Home/layerslider/skins/',
            animateFirstLayer: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            autoPlayVideos: false,
            skin : 'minimal'
        });
    });
</script>




    <!--content开始-->
    <div id="content">
        <!--banner开始-->
        <div class="banner">
            <div class="flexslider">
                <ul class="slides">
                    <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/9kdnet/Uploads/picture/<?php echo ($vo["ad_img"]); ?>" alt="<?php echo ($vo["ad_name"]); ?>" /></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!--banner结束-->
        <div class="content_t">
            <!--第一个内容块-->
            <div class="cont_h1">
                <div class="center clearfix pr">
                    <div class="fl cont_ty2">
                        <div class="cont_ty8">
                            <b>网络营销只听课=</b>
                        </div>
                        <div class="cont_ty7">
                            <b>无数课程</b>
                            学时激动，学完感动，回家一动不动
                        </div>
                        <div class="cont_ty8">
                            <b>网络营销落地需要:</b>
                        </div>
                        <div class="cont_ty10">
                            <div class="cont_ty11 clearfix">
                                <div class="cont_ty12 fl">全网营销<br>基础扫盲</div>
                                <div class="cont_ty12 fl">全网营销<br>系统解析</div>
                                <div class="cont_ty12 fl" style="width:90px;">落地实操，<br>专家指导&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="fl cont_ty1">
                        <div class="cont_ty3"></div>
                        <div class="cont_ty4">
                            <ul>
                                <li class="cont_i1">
                                    <i></i>
                                    <div class="cont_ty5">
                                        课程大纲
                                    </div>
                                    <div class="cont_ty6 tal">
                                        边实战边总结的课程，一线实战的专家老师。零成本、低成本的实战技巧，最轻松、最快速的执行流程。
                                    </div>
                                </li>
                                <li class="cont_i2">
                                    <i></i>
                                    <div class="cont_ty5">
                                        解决方案
                                    </div>
                                    <div class="cont_ty6 tac">
                                        解决思路<br />
解决模式<br />
解决方法<br />
解决资源<br />
解决团队建设问题。
                                    </div>
                                </li>
                                <li class="cont_i3">
                                    <i></i>
                                    <div class="cont_ty5">
                                        受训企业
                                    </div>
                                    <div class="cont_ty6 tal">
                                        服务企业已达2675家,服务行业超过600个,服务满意率高达99%。
                                    </div>
                                </li>
                                <li class="cont_i4">
                                    <i></i>
                                    <div class="cont_ty5">
                                        课程试听
                                    </div>
                                    <div class="cont_ty6">
                                        <p>
	了解课程时间
</p>
<p>
	在线试听课程
</p>
<p>
	免费报名热线
</p>
                                        <?php echo ($site["tel"]); ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cont_h1bg pa"></div>
                </div>
            </div>
            <!--第二个内容块-->
            <div class="cont_h2">
                <div class="center">
                    <!-- <div class="cont_ty13"><b>æˆ‘ä»¬è¿˜å¸®åŠ©æ‚¨<span>100%</span>è½åœ°</b></div> -->
                    <div class="cont_ty13"><b>我们还帮助您<span style="color:#f8bc06">100%</span>落地</b></div>
                    <div class="cont_ty14">
                        我们有专业的老师为您的行业量身定做一套方案，一对一辅导，帮您落地！<br>
                    </div>
                </div>
                <div class="cont_ty15">
                    <div class="center clearfix">
                        <div class="cont_ty16 fl">
                            <ul class="cont_ty19 cont_ul1">
                                <li class="pr">
                                    <b>学前班</b>
                                    <span>课前扫盲，完成基础教育，为上课做好准备动作。</span>
                                    <i></i>
                                </li>
                                <li class="pr">
                                    <b>系统班</b>
                                    <span>系统介绍全网布局理念，案例剖析网络营销新模式。</span>
                                    <i></i>
                                </li>
                                <li class="pr">
                                    <b>落地班</b>
                                    <span>加速工厂专家老师一对一指导，100%保证落地执行！</span>
                                    <i></i>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_ty17 fl">

                        </div>
                        <div class="cont_ty18 fl">
                            <ul class="cont_ty19 cont_ul2">
                                <li class="pr">
                                    <div><b>沙龙</b></div>
                                    <span>举办各类学员交流会，全面交互、增值学习。</span>
                                    <i></i>
                                </li>
                                <li class="pr">
                                    <div><b>专家咨询</b></div>
                                    <span>定期举行专家研讨会，提供问题诊断，专家咨询服务。</span>
                                    <i></i>
                                </li>
                                <li class="pr">
                                    <div><b>资源共享</b></div>
                                    <span>提供学员交流平台，共享平台资源。</span>
                                    <i></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--第三个内容块-->
            <div class="cont_h3">
                <div class="center">
                    <div class="cont_ty20"></div>
                        <!-- <ul class="diamond pr">
                                                    </ul> -->
                        <ul class="diamond pr">
                        <li class="diamond_01">
                            团队入驻后
                        </li>
                        <li class="diamond_02">
                            计划制专业培训
                        </li>
                        <li class="diamond_03">
                            53名专职老师<br>单独指导
                        </li>
                        <li class="diamond_04">
                            复制九口袋<br>专业的体制
                        </li>
                        <li class="diamond_05">
                            阶段性<br>专家老师考核
                        </li>
                        <li class="diamond_06">
                            免费共享<br>各类网络、媒体资源
                        </li>
                        <li class="diamond_07 diamond_on">
                            100%保证落地！
                        </li>
                    </ul>
                    <ul class="kvideo_ty13 clearfix">
                    <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary") ->where("is_recommend=1 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li class="pr">
                            <div class="kvideo_ty21">
                                <div class="kvideo_ty22 wimg pa">
                                    <!-- <a href="/information/zxnei/id/222.html" title=""> -->
                                        <img src="<?php echo get_default_img($new['image_id']);?>" alt="" />
                                    <!-- </a> -->
                                </div>
                                <div class="kvideo_ty23">
                                    <b><?php echo cutStr($new['title'],30,0);?></b>
                                </div>
                            </div>
                        </li><?php endforeach;?>
                    </ul>
                </div>
                <div class="clearfix main">
                    <div class="main_left" id="left" style="width: 548px;"></div>
                    <div class="main_mid" id="mid"></div>
                    <div class="main_right" id="right" style="width: 546px;"></div>
                </div>
            </div>
            <!--第四个内容块-->
            <div class="cont_h4">
                <div class="center clearfix">
                    <div class="fl w50">
                        <div class="cont_ty24 pl10">
                            <b>学员案例</b>
                            <i>&gt;&gt;</i>
                        </div>


                    </div>
                    <!-- <div class="fl w50">
                        <div class="cont_ty28"></div>
                    </div> -->

                </div>
                <ul class="cont_ty29 center clearfix">
                                                        <li style="margin-left: 0px;">
                        <a href="/Caseinfo/31.html" title="" target="_blank">
                            <div class="cont_ty30">
                                <img src="/Uploads/pictures/54448b659193d.jpg" alt="">
                            </div>
                            <div class="cont_ty31">
                               韩国艺匠                            </div>
                        </a>
                    </li>
                                       <li>
                        <a href="/Caseinfo/30.html" title="" target="_blank">
                            <div class="cont_ty30">
                                <img src="/Uploads/pictures/54447518b5ecd.jpg" alt="">
                            </div>
                            <div class="cont_ty31">
                               大师贴膜                            </div>
                        </a>
                    </li>
                                       <li>
                        <a href="/Caseinfo/33.html" title="" target="_blank">
                            <div class="cont_ty30">
                                <img src="/Uploads/pictures/54448caec5e90.jpg" alt="">
                            </div>
                            <div class="cont_ty31">
                               健步楼梯                            </div>
                        </a>
                    </li>
                                       <li>
                        <a href="/Caseinfo/34.html" title="" target="_blank">
                            <div class="cont_ty30">
                                <img src="/Uploads/pictures/54448d0da22b2.jpg" alt="">
                            </div>
                            <div class="cont_ty31">
                               绿腾                            </div>
                        </a>
                    </li>
                                   </ul>
                <ul class="xyfx" style="width: 400px; margin: auto; display: none; background: rgb(237, 237, 237);">
                                                                        <li style="display: none;">
                                <div class="cont_ty25 pl10">
                                    韩国艺匠                                </div>
                                <!-- <div class="cont_ty26 pl10">
                                    <img src="/Uploads/pictures/54448b659193d.jpg" alt="" />
                                </div>
                                <div class="cont_ty27">
                                    韩国艺匠                                </div>
                                <div class="cont_ty27">
                                    è‘£äº‹é•?施嘉豪                                </div>-->
                                <div class="cont_ty27">
                                    介绍：2013年，施嘉豪走进了九口袋第二届全网营销总裁课堂，系统学习与落地实操学习之后，施嘉豪以及他的团队开始大刀阔斧的整改。从营销型网站建设开始，在九口袋老师的指导下，进行网站推广，品牌包装、布局以及推广，再加上一系列免费以及付费推广，同时，有针对性地进行广告投放与推广，并努力做好客户关系的维护。6个月时间里，营业额从3千万到10个亿，真正成为婚纱摄影行业领头羊！                                </div>
                            </li>
                                                        <li style="display: none;">
                                <div class="cont_ty25 pl10">
                                    大师贴膜                                </div>
                                <!-- <div class="cont_ty26 pl10">
                                    <img src="/Uploads/pictures/54447518b5ecd.jpg" alt="" />
                                </div>
                                <div class="cont_ty27">
                                    大师贴膜                                </div>
                                <div class="cont_ty27">
                                    è‘£äº‹é•?刘凤喜                                </div>-->
                                <div class="cont_ty27">
                                    介绍：大师贴膜是上海追得贸易发展有限公司于2008年推出的自主品牌，因为定位差异化，专业、标准、规范化发展而受到关注，前期有一定的发展，然而在后期的经营发展中，受限于渠道等因素，招商加盟进度迟缓，到2013年为止，5年的时间内全国加盟店仅800多家。                                </div>
                            </li>
                                                        <li style="display: none;">
                                <div class="cont_ty25 pl10">
                                    健步楼梯                                </div>
                                <!-- <div class="cont_ty26 pl10">
                                    <img src="/Uploads/pictures/54448caec5e90.jpg" alt="" />
                                </div>
                                <div class="cont_ty27">
                                    健步楼梯                                </div>
                                <div class="cont_ty27">
                                    è‘£äº‹é•?章细结                                </div>-->
                                <div class="cont_ty27">
                                    介绍：2014年4月，章总加入了九口袋第七届全网营销总裁培训班，在对网络营销有了系统性的认识之后，带领团队进驻九口袋加速工厂进行学习，从营销型网站建设到软文推广，再到品牌布局，短短一个月，助力成交的品牌布局完成，客户订单量第一个月提高了30%。之后，营销型网站上线，配合网络精确推广手段，三个月时间里，订单源源不断，生产计划爆满！
                                </div>
                            </li>
                                                        <li style="display: list-item;">
                                <div class="cont_ty25 pl10">
                                    绿腾                                </div>
                                <!-- <div class="cont_ty26 pl10">
                                    <img src="/Uploads/pictures/54448d0da22b2.jpg" alt="" />
                                </div>
                                <div class="cont_ty27">
                                    绿腾                                </div>
                                <div class="cont_ty27">
                                    è‘£äº‹é•?李镇阔                                </div>-->
                                <div class="cont_ty27">
                                    介绍：在接受九口袋全网营销课程之后，对品牌的知名度与影响力有了更深刻的认识，之后将品牌布局工作托管于九口袋运营团队，网站建设同时进行，自身网络营销团队配合工作，经过一个月的时间，绿腾以及酒香茶的品牌布局完美收工，品牌布局覆盖全网络，百度等搜索引擎排名前5页全部占位，业绩翻番数10倍，全国加盟连锁店从当初几家增至数十家。                                </div>
                            </li>
                                                    </ul>
                <div class="cont_ty22 tac">
                    <a href="/case/Index.html" title="æŸ¥çœ‹æ›´å¤šåˆ†äº«">点击查看更多&gt;&gt;</a>
                </div>
            </div>
            <!--第五个内容块-->
            <div class="cont_h5">
                <div class="center">
                    <div class="cont_ty20"></div>
                    <div class="cont_ty24 tac pt10 pl10">
                        <b>公司荣誉</b>
                        <i>>></i>
                    </div>
                    <ul class="cont_ty32 clearfix">
                        <li><img src="images/pic_07.png" alt="" /></li>
                        <li><img src="images/pic_07.png" alt="" /></li>
                        <li><img src="images/pic_07.png" alt="" /></li>
                        <li><img src="images/pic_07.png" alt="" /></li>
                    </ul>
                </div>
                <div class="clearfix main">
                    <div class="main_left" id="left"></div>
                    <div class="main_mid" id="mid"></div>
                    <div class="main_right" id="right"></div>
                </div>
            </div>
            <!--第六个内容块-->
            <div class="cont_h6">
                <div class="center clearfix">
                    <div class="fl w50">
                        <div class="cont_ty33 pl10">
                            <b>媒体报道</b>
                            <i>>></i>
                        </div>
                        <div class="multipleColumn" style="margin:0 auto">
                            <div class="hd">
                                <ul></ul>
                            </div>
                            <div class="bd">
                                <!-- 媒体报道轮播图 -->
                                <div class="ulWrap">
                                    <ul>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pic">
                                                <a href="#" target="_blank"><img src="images/pic_08.png" /></a>
                                            </div>
                                            <div class="title">
                                                <a href="#" target="_blank">网络营销正以无法想象的速度，似乎试图汇聚...</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- ulWrap End -->
                            </div><!-- bd End -->
                        </div>
                    </div>
                    <div class="fl w50">
                        <div class="cont_ty34">
                            <div class="cont_ty35 clearfix">
                                <b class="fl">九口袋前言咨询</b>
                                <i class="fl"></i>
                            </div>
                            <ul class="cont_ty36">
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">口碑营销如何设定才能出奇制胜</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">解决网站排名几个方法</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">九口袋董事长张启明受邀于“中小企业融资与上市发展</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">口碑营销如何设定才能出奇制胜</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">解决网站排名几个方法</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_ty34" style="margin-top:15px;">
                            <div class="cont_ty35 clearfix">
                                <b class="fl">九口袋媒体报道</b>
                                <i class="fl"></i>
                            </div>
                            <ul class="cont_ty36">
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">【九口袋动态】全网营营销如何带动</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">【九口袋动态】全网营营销如何带动</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">【九口袋动态】全网营营销如何带动</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">【九口袋动态】全网营营销如何带动</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" title="">
                                        <span class="fl">【九口袋动态】全网营营销如何带动</span>
                                        <i class="fr">2014-08-23</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--第七个内容块-->
        <div class="cont_h7 pr">
            <div class="center clearfix">
                <div class="cont_ty20"></div>
                <div class="fl cont_ty1">
                    <div class="cont_ty37 fl">
                        <img src="images/pic_11.png" alt="" />
                    </div>
                    <div class="cont_ty38 fl">
                        <div class="cont_ty39">
                            主讲老师：蔡国其
                        </div>
                        <div class="cont_ty39">
                            课程主题：全网营销
                        </div>
                        <div class="cont_ty39">
                            课程时间：2014-8-12
                        </div>
                        <div class="cont_ty39">
                            地址：成都
                        </div>
                        <div class="cont_ty39">
                            报名电话：400-099-2629
                        </div>
                        <div class="cont_ty39">
                            内容简介：此次课程主要由蔡国其老师为大家讲述如何通过全网布局打通PC互联网与移动互联网等全网渠道从而实现全网营销、全网赚钱！
                        </div>
                        <a href="#" title="" class="cont_ty40">
                            <em>立即报名</em>
                            <i>Sign up immediately</i>
                        </a>
                    </div>
                </div>
                <div class="fl cont_ty2">
                    <div class="calendar pr">
                        <!-- 年 -->
                        <div class="year pa">
                            <b>2014</b>
                        </div>
                        <!-- 月 -->
                        <div class="month pa">
                            <b>08</b>
                        </div>
                        <!-- 英文月 -->
                        <div class="emonth pa">
                            Aug
                        </div>
                        <!-- 星期 -->
                        <ul class="week pa">
                            <li>Su</li>
                            <li>Mo</li>
                            <li>Tu</li>
                            <li>We</li>
                            <li>Th</li>
                            <li>Fr</li>
                            <li>Sa</li>
                        </ul>
                        <!-- 日期 -->
                        <ul class="date pa">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li>1</li>
                            <li class="date_on">2</li>
                            <li class="date_on">3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li class="date_on">7</li>
                            <li class="date_on">8</li>
                            <li class="date_on">9</li>
                            <li>10</li>
                            <li class="date_on">11</li>
                            <li>12</li>
                            <li class="date_on">13</li>
                            <li>14</li>
                            <li>15</li>
                            <li class="date_on">16</li>
                            <li class="date_on">17</li>
                            <li class="date_on">18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li class="date_on">22</li>
                            <li class="date_on">23</li>
                            <li>24</li>
                            <li>25</li>
                            <li class="date_on">26</li>
                            <li>27</li>
                            <li>28</li>
                            <li class="date_on">29</li>
                            <li class="date_on">30</li>
                            <li>31</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix main">
                    <div class="main_left main_left2" id="left"></div>
                    <div class="main_mid main_mid2" id="mid"></div>
                    <div class="main_right main_right2" id="right"></div>
                </div>
        </div>
        <!--第八个内容块-->
        <div class="cont_h8">
            <div class="center clearfix">
                <div class="cont_ty23"></div>
                <div class="cont_ty41 tac">
                    <b>以营销为核心整合互联网主流营销方式！</b>
                </div>
            </div>
        </div>
        <!--第九个内容块-->
        <div class="cont_h9">
            <div class="center">
                <div class="clearfix">
                    <div class="cont_ty42 fl"></div>
                    <div class="cont_ty43 tac fl">合作伙伴</div>
                    <div class="cont_ty42 fl"></div>
                </div>
                <ul class="cont_ty44 clearfix">
                    <li><img src="images/pic_12.png" alt="" /></li>
                    <li><img src="images/pic_13.png" alt="" /></li>
                    <li><img src="images/pic_14.png" alt="" /></li>
                    <li><img src="images/pic_15.png" alt="" /></li>
                    <li><img src="images/pic_16.png" alt="" /></li>
                    <li><img src="images/pic_12.png" alt="" /></li>
                    <li><img src="images/pic_13.png" alt="" /></li>
                    <li><img src="images/pic_14.png" alt="" /></li>
                    <li><img src="images/pic_15.png" alt="" /></li>
                    <li><img src="images/pic_16.png" alt="" /></li>
                </ul>
            </div>
        </div>

    </div>
    <!--content结束-->









<div class="footer_middle"><!-- FOOTER MIDDLE -->
    <div class="container_12">
        <div class="grid_2">
            <h5>
                <?php echo (L("T_NAV")); ?>
            </h5>
            <div class="list-type-footer">
                <ul>
                    <li>
                        <a href="/9kdnet/index.php"><span class="grey"><?php echo (L("T_HOME")); ?></span></a>
                    </li>
                    <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='bottom' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li>
                            <a href="<?php echo ($link); ?>" class="grey"><?php echo ($nav_name); ?></a>
                        </li><?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="grid_2">
            <h5>
                <?php echo (L("T_LINKS")); ?>
            </h5>
            <div class="list-type-footer">
                <ul>
                    <?php $__m_link=M("link");$__link_list=$__m_link->where('display=1')->order('sort DESC')->limit(6)->select();foreach($__link_list as $_lk=>$_lv):extract($_lv);?><li>
                        <a href="<?php echo ($link); ?>" class="grey" <?php if($target == 2): ?>target='_blank'<?php endif; ?> title='<?php echo ($title); ?>'><?php echo ($title); ?></a>
                    </li><?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="grid_2">
            <h5>
                关注微博
            </h5>
            <div class="list-type-footer">
                <a href="http://weibo.com/522504678" target="_blank"><img src="/9kdnet/Public/Home/images/logo_ft_1.png"> </a>
            </div>
        </div>
        <div class="grid_3 latest_posts">
            <h5>
                关注微信
            </h5>
            <div class="list-type-footer">
                <img src="/9kdnet/Public/Home/images/weixin.jpg" width="110" height="110">
            </div>
        </div>
        <div class="grid_3">
            <h5>
                Contact Details
            </h5>
            <div class="list-type-footer">
                <p class="grey">
                    CONIST
                </p><br />
                <p class="grey">
                    广东省 广州市 天河区
                </p><br />
                <p class="grey">
                    QQ群:  <a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d58a5cb1a5297cd53db318b24cf5de264a68c7869f29c7c659b86d6ad80debca"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="Conist php技术交流群" title="Conist php技术交流群"></a>
                </p><br />
                <p class="grey">
                    Email: <a href="conist@conist.com" class="grey">conist@conist.com</a>
                </p>
            </div>
        </div>
    </div>
</div><!-- FOOTER MIDDLE -->

<div class="footer"><!-- FOOTER -->
    <div class="container_12">
        <div class="grid_6">
            <p class="copyright">
                &copy; Copyright &copy; 2013.Conist All rights reserved.<a target="_blank" href="#"></a>
            </p>
        </div>
        <div class="grid_6">
            <div class="social-box">
                <a href="#"><img src="/9kdnet/Public/Home/images/social_facebook.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/9kdnet/Public/Home/images/social_twitter.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/9kdnet/Public/Home/images/social_flickr.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/9kdnet/Public/Home/images/social_linkedin.png" width="19" height="19" alt="" /></a> <a href="#"><img src="/9kdnet/Public/Home/images/social_dribble.png" width="19" height="18" alt="" /></a>
            </div>
        </div>
    </div>
</div><!-- END FOOTER -->
</body></html>