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
        	<a href="/9kd/Lesson/index.html" title=""><?php echo ($info['title']); ?></a><?php endif; ?>
        </div>
    </div>
</div>
        <!-- 课程介绍 -->
        <div class="introduction">
            <div class="main_t center tac">
                <b><?php echo L('T_LESSON');?></b>
            </div>
            <div class="introduction_h1 center">
                <div class="introduction_list clearfix">
                    <i class="icon fl"></i>
                    <div class="introduction_ty2 fl">
                        <div class="introduction_ty3">
                            <b><?php echo ($page[0]["page_name"]); ?></b>
                        </div>
                        <div class="introduction_ty4">
                            <?php echo ($page[0]["content"]); ?>
                        </div>
                    </div>
                </div>
                <ul class="introduction_ty5 clearfix">
                    <li class="pr">
                        <div class="introduction_ty6 pa"><img src="/9kd/Public/Home/images/jkd_20.png" class="tcircle" alt="" /></div>
                        <div class="introduction_ty7 icon pa"></div>
                        <div class="introduction_ty8 tac pa">
                            <b><?php echo ($page[1]["page_name"]); ?></b>
                            <em><?php echo ($page[1]["content"]); ?></em>
                        </div>
                    </li>
                    <li class="pr">
                        <div class="introduction_ty6 pa"><img src="/9kd/Public/Home/images/jkd_20.png" class="tcircle" alt="" /></div>
                        <div class="introduction_ty7 icon_02 icon pa"></div>
                        <div class="introduction_ty8 tac pa">
                            <b><?php echo ($page[2]["page_name"]); ?></b>
                            <em><?php echo ($page[2]["content"]); ?></em>
                        </div>
                    </li>
                    <li class="pr">
                        <div class="introduction_ty6 pa"><img src="/9kd/Public/Home/images/jkd_20.png" class="tcircle" alt="" /></div>
                        <div class="introduction_ty7 icon_04 icon pa"></div>
                        <div class="introduction_ty8 tac pa">
                            <b><?php echo ($page[3]["page_name"]); ?></b>
                            <em><?php echo ($page[3]["content"]); ?></em>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="introduction_h2 center">
                <div class="introduction_list introduction_list2 clearfix">
                    <i class="icon fl"></i>
                    <div class="introduction_ty2 fl">
                        <div class="introduction_ty3">
                            <b><?php echo ($page[4]["page_name"]); ?></b>
                        </div>
                        <div class="introduction_ty4">
                            <?php echo ($page[4]["content"]); ?>
                        </div>
                    </div>
                </div>
                <ul class="introduction_ty9 clearfix">
                    <li>
                        <i class="icon icon_05"></i>
                        <div class="introduction_ty10">
                            品牌营销系统
                        </div>
                        <div class="introduction_ty11">
                            <p>--低成本打造强力品牌</p>
                            <p>--品牌公信力的全网布局以及大网络时代下的
                                品牌基础建设</p>
                            <p>--第三方品牌塑造和品牌的自我造势</p>
                            <p>--自媒体的建设与品牌形象的建设</p>
                            <p>--O2O的品牌联动模式解析</p>
                            <p>--社会化媒体的品牌宣传</p>
                        </div>
                    </li>
                    <li>
                        <i class="icon icon_06"></i>
                        <div class="introduction_ty10">
                            展示型营销系统
                        </div>
                        <div class="introduction_ty11">
                            <p>--展示型营销系统解析</p>
                            <p>--产品核心卖点提炼与表达</p>
                            <p>--企业核心卖点的塑造与差异化表达</p>
                            <p>--展示方式与网站种类的选择</p>
                            <p>--网站首页架构的建设</p>
                            <p>--网站内容筛选</p>
                            <p>--网站表现手法解析</p>
                        </div>
                    </li>
                    <li>
                        <i class="icon icon_08"></i>
                        <div class="introduction_ty10">
                            社交化营销系统
                        </div>
                        <div class="introduction_ty11">
                            <p>--客户关系管理营销系统解析</p>
                            <p>--客户关系管理模式解析</p>
                            <p>--使用互联网工具进行关系管理方法解析
                            <p>--企业、个人微信管理方式及落地式模式解析</p>
                            <p>--社交媒体整合营销</p>
                            <p>--全网客户关系管理营销</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="introduction_h3">
                <div class="center">
                <div class="introduction_list introduction_list3 clearfix">
                    <i class="icon fl"></i>
                    <div class="introduction_ty2 fl">
                        <div class="introduction_ty3 mt20">
                            <b>不得不选我们的N大理由!</b>
                        </div>
                    </div>
                </div>
                <div class="introduction_ty14 introduction_ty16">
                    <b><?php echo ($page[5]["page_name"]); ?></b>
                    <em><?php echo ($page[5]["content"]); ?></em>
                </div>
                <div class="clearfix introduction_ty15">
                    <div class="introduction_ty14 w38 fl" style="text-indent: -5.3em;padding-left: 5.2em;">
                        <b><?php echo ($page[6]["page_name"]); ?></b>
                        <em><?php echo ($page[6]["content"]); ?></em>
                    </div>
                    <div class="introduction_ty14 w38 fl" style="padding-left: 5.5em;text-indent: -4.3em;width: 35%;">
                        <b><?php echo ($page[7]["page_name"]); ?></b>
                        <em><?php echo ($page[7]["content"]); ?></em>
                    </div>
                </div>

                <div class="clearfix">
                    <div class="introduction_ty17 fl">
                        <div class="fl" style="margin:10px;">
                            <img src="/9kd/Public/Home/images/jkd_18.jpg" alt="">
                        </div>
                        <div class="introduction_ty19">
                            <em><?php echo ($page[8]["page_name"]); ?></em>—— <?php echo ($page[8]["content"]); ?>
                        </div>
                    </div>
                    <div class="introduction_ty18 fl">
                        <div class="fl" style="margin:10px;">
                            <img src="/9kd/Public/Home/images/jkd_19.jpg" alt="">
                        </div>
                        <div class="introduction_ty19">
                            <em><?php echo ($page[9]["page_name"]); ?></em>—— <?php echo ($page[9]["content"]); ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix introduction_ty15">
                    <div class="introduction_ty14 w30 introduction_ty20 fl">
                        <b><?php echo ($page[10]["page_name"]); ?></b>
                        <em><?php echo ($page[10]["content"]); ?></em>
                    </div>
                    <div class="introduction_ty14 w30 fl" style="text-indent: -5.3em;padding-left: 5.2em;">
                        <b><?php echo ($page[11]["page_name"]); ?></b>
                        <em><?php echo ($page[11]["content"]); ?></em>
                    </div>
                </div>
                </div>
            </div>

            <div class="introduction_h6 pr wimg">
                <div class="introduction_ty24 pa">
                    <div class="center">
                        <!-- 我们最近的课程安排是在<span class="css29343">2014</span>年<span class="css29343">12</span>月<span class="css29343">9</span>日， -->
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