<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($webtitle); ?>-<?php echo ($site["name"]); ?></title>
<meta name="keywords" content="<?php echo ($site["keyword"]); ?>,<?php echo ($info['keywords']); ?>" />
<meta name="description" content="<?php echo ($site["description"]); ?>,<?php echo ($info['description']); ?>" />
<link rel="stylesheet" type="text/css" href="/9kdnet/Public/Min/?f=/9kdnet/Public/Home/css/base.css|/9kdnet/Public/Home/css/index.css|/9kdnet/Public/Home/css/main.css" />
<script type="text/javascript" src="/9kdnet/Public/Min/?f=/9kdnet/Public/Home/js/jquery.js|/9kdnet/Public/Home/js/jquery.flexslider.min.js|/9kdnet/Public/Home/js/jquery.SuperSlide.2.1.1.js|/9kdnet/Public/Home/js/jquery.rotate.min.js|/9kdnet/Public/Home/js/index.js"></script>
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
                <a href="/9kdnet/"><img src="/9kdnet/Public/Home/images/logo.png" alt="" /></a>
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
                    <li class="<?php echo CONTROLLER_NAME == 'Index'?'nav_on':'';?>"><a href="/9kdnet/">首页</a></li>
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






<div id="content">
    <div class="banner">
        <div class="flexslider">
            <ul class="slides">
            <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url(/9kdnet/Uploads/picture/<?php echo ($vo["ad_img"]); ?>) top center;"><a href="#" target="_blank" title="<?php echo ($vo["ad_name"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="content_t">
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
                                    <p>
	解决思路
</p>
<p>
	解决模式
</p>
<p>
	解决方法
</p>
<p>
	解决资源
</p>
<p>
	解决团队建设问题。
</p>
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
                                    免费报名热线<br><?php echo ($site["tel"]); ?>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="cont_h1bg pa"></div>
                </div>
            </div>
            <div class="cont_h2">
                <div class="center">
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
                                    <span></span>
                                    <i></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont_h3">
                <div class="center">
                    <div class="cont_ty20"></div>
                <ul class="diamond pr">
                    <li class="diamond_01 diamond_on">
                        团队入驻后
                    </li>
                    <li class="diamond_02">
                        计划制专业培训
                    </li>
                    <li class="diamond_03">
                        53名专职老师<br />单独指导
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
                    <li class="diamond_07">
                        100%保证落地！
                    </li>
                </ul>
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
<div class="clearfix main">
<div class="main_left" id="left"></div>
<div class="main_mid" id="mid"></div>
<div class="main_right" id="right"></div>
</div>
</div>
<div class="cont_h4">
<div class="center clearfix">
    <div class="fl w50">
        <div class="cont_ty24 pl10">
            <b>学员案例</b>
            <i>>></i>
        </div>


    </div>
                <!-- <div class="fl w50">
                    <div class="cont_ty28"></div>
                </div> -->

            </div>
            <ul class="cont_ty29 center clearfix">
            <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=57 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li>
                    <a href="<?php echo U('news/read',array('id'=>$new['id']));?>" title="" target="_blank">
                        <div class="cont_ty30">
                            <img src="<?php echo get_default_img($new['image_id']);?>" alt="" />
                        </div>
                        <div class="cont_ty31">
                            <?php echo cutStr($new['title'],30,0);?>
                        </div>
                    </a>
                </li><?php endforeach;?>
            </ul>
             <ul class="xyfx" style="display:none;background: #ededed;width: 400px;margin: auto;">
             <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=57 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li>
                    <div class="cont_ty25 pl10">
                        <?php echo cutStr($new['title'],30,0);?>
                    </div>
                    <div class="cont_ty27">
                        介绍：<?php echo ($new['summary']); ?>
                    </div>
                </li><?php endforeach;?>

                            </ul>
                            <div class="cont_ty22 tac">
                                <a href="/case/Index.html" title="æŸ¥çœ‹æ›´å¤šåˆ†äº«" >点击查看更多>></a>
                            </div>
                        </div>
                        <!--ç¬¬äº”ä¸ªå†…å®¹å—-->
                        <div class="cont_h5">
                            <div class="center">
                                <div class="cont_ty20"></div>
                                <div class="cont_ty24 tac pt10 pl10">
                                    <b>公司荣誉</b>
                                    <i>>></i>
                                </div>
                                <ul class="cont_ty32 clearfix">
                                    <?php if(is_array($gsry)): $k = 0; $__LIST__ = $gsry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li><img src="<?php echo get_default_img($vo['image_id']);?>" title="<?php echo ($vo["page_name"]); ?>"/>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <div class="clearfix main">
                                <div class="main_left" id="left"></div>
                                <div class="main_mid" id="mid"></div>
                                <div class="main_right" id="right"></div>
                            </div>
                        </div>
                        <!--ç¬¬å…­ä¸ªå†…å®¹å—-->
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
                                <div class="ulWrap">
                                    <ul>
                                        <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=58 AND status=1 AND lang='zh-cn'") ->order("published DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li>
                                        <a href=""></a>
                                            <div class="pic">
                                                <a href="<?php echo U('news/read',array('id'=>$new['id']));?>" target="_blank"><img src="<?php echo get_default_img($new['image_id']);?>" /></a>
                                            </div>
                                            <div class="title">
                                                <a href='/infr/46.html' target="_blank" title="<?php echo ($new['title']); ?>"><?php echo cutStr($new['title'],24,0);?>...</a>
                                            </div>
                                        </li><?php endforeach;?>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fl w50">
                        <div class="cont_ty34">
                            <div class="cont_ty35 clearfix">
                                <b class="fl">九口袋前言咨询</b>
                                <i class="fl"></i>
                            </div>
                            <ul class="cont_ty36">
                                <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=58 AND status=1 AND lang='zh-cn'") ->order("published DESC") ->limit(5) ->select(); foreach ($_news_list as $key=>$new):?><li class="clearfix">
                                    <a href="<?php echo U('news/read',array('id'=>$new['id']));?>" title="">
                                        <span class="fl"><?php echo cutStr($new['title'],24,0);?>...</span>
                                        <i class="fr"><?php echo (date('Y-m-d',$new['published'])); ?></i>
                                    </a>
                                </li><?php endforeach;?>

                            </ul>
                        </div>
                        <div class="cont_ty34" style="margin-top:15px;">
                            <div class="cont_ty35 clearfix">
                                <b class="fl">九口袋媒体报道</b>
                                <i class="fl"></i>
                            </div>
                            <ul class="cont_ty36">

                            <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary,url") ->where("is_recommend=1 and cid=58 AND status=1 AND lang='zh-cn'") ->order("published DESC") ->limit(5) ->select(); foreach ($_news_list as $key=>$new):?><li class="clearfix">
                                    <a href="<?php echo U('news/read',array('id'=>$new['id']));?>" title="">
                                        <span class="fl">【九口袋动态】<?php echo cutStr($new['title'],24,0);?>...</span>
                                        <i class="fr"><?php echo (date('Y-m-d',$new['published'])); ?></i>
                                    </a>
                                </li><?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="400-1088-109" id="ttel">
        <!--ç¬¬ä¸ƒä¸ªå†…å®¹å—-->
        <div class="cont_h7 pr">
            <div class="center clearfix">
                <div class="cont_ty20"></div>
                <div class="fl cont_ty1">
                    <div class="cont_ty37 fl" id="pic_t">
                        <img src="/9kdnet/Public/Home/images/pic_11.png" alt="" />
                    </div>
                    <div class="cont_ty38 fl">
                        <div class="cont_ty39" id="teacher">
                            主讲老师：                        </div>
                            <div class="cont_ty39" id="lesson">
                                课程主题：                        </div>
                                <div class="cont_ty39" id="date">
                                    课程时间：                        </div>
                                    <div class="cont_ty39" id="address">
                                        地址：                        </div>
                                        <div class="cont_ty39" id="tel">
                                            报名电话：400-1088-109                        </div>
                                            <div class="cont_ty39" id="content_x" style="height:120px;overflow:hidden;">
                                                内容简介：                        </div>
                                                <!-- <a href="tel:" title="" class="cont_ty40"> -->
                                                <a href="tencent://message/?uin=531789926" title="" class="cont_ty40">
                                                    <em>立即报名</em>
                                                    <i>Sign up immediately</i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="fl cont_ty2">
                                            <div class="calendar pr">
                                                <!-- å¹?-->
                                                <div class="year pa">
                                                    <b id="bbb1">2015</b>
                                                </div>
                                                <!-- æœ?-->
                                                <div class="month pa">
                                                    <b id="bbb2">03</b>
                                                </div>
                                                <!-- è‹±æ–‡æœ?-->
                                                <div class="emonth pa">
                                                    Mar                        </div>
                                                    <!-- æ˜ŸæœŸ -->
                                                    <ul class="week pa">
                                                        <li>Su</li>
                                                        <li>Mo</li>
                                                        <li>Tu</li>
                                                        <li>We</li>
                                                        <li>Th</li>
                                                        <li>Fr</li>
                                                        <li>Sa</li>
                                                    </ul>
                                                    <!-- æ—¥æœŸ -->
                                                    <ul class="date pa">
                                                        <li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li>                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                $('.pid').click(function course_l(){
                                                 pid=$(this).html();

        // function course_l(){


            // alert(pid);
            var year = $('#bbb1').html();

            var mon = $('#bbb2').html();

           // var day = $('#day.html();
           // var day2 = $('#day2').html();
           var day = pid;


           // alert(year);
           // alert(mon);
           // alert(day1);
           // alert(day2);

           var URL = '/index';
           $.ajax({
            url: '/index/course_l.html', //提交访问的URL
            type: 'POST', //提交的方法
            dataType: 'json', //返回的内容的类型，由于PHP文件是直接echo的，那么这里就是text
            data: {year:year,mon:mon,day:day},
            error: function() { //如果出错，执行函数

                alert('Error loading XML document');
            },
            success: function(data) {
                var ttel = $("#ttel").val();
                document.getElementById('pic_t').innerHTML = "<img src='/Uploads/pictures/"+data.pic+"' alt='' />";
                document.getElementById('teacher').innerHTML = '主讲老师：'+data.teacher;
                document.getElementById('lesson').innerHTML = '课程主题：'+data.course_title;
                document.getElementById('date').innerHTML = '课程时间：'+data.course_time;
                document.getElementById('address').innerHTML = '地址：'+data.address;
                document.getElementById('tel').innerHTML = '报名电话：'+ttel;
                document.getElementById('content_x').innerHTML = '内容简介：'+data.content_syn;
            }
        });


});
</script>
<div class="clearfix main">
    <div class="main_left main_left2" id="left"></div>
    <div class="main_mid main_mid2" id="mid"></div>
    <div class="main_right main_right2" id="right"></div>
</div>
</div>
<!--ç¬¬å…«ä¸ªå†…å®¹å—-->
<div class="cont_h8">
    <div class="center clearfix">
        <div class="cont_ty23"></div>
        <div class="cont_ty41 tac">
            <b>以营销为核心整合互联网主流营销方式！</b>
        </div>
    </div>
</div>
<!--ç¬¬ä¹ä¸ªå†…å®¹å—-->
<div class="cont_h9">
    <div class="center">
        <div class="clearfix">
            <div class="cont_ty42 fl"></div>
            <div class="cont_ty43 tac fl">合作伙伴</div>
            <div class="cont_ty42 fl"></div>
        </div>
        <ul class="cont_ty44 clearfix">
            <?php if(is_array($hzhb)): $i = 0; $__LIST__ = $hzhb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <img src="/9kdnet/Uploads/picture/<?php echo ($vo["ad_img"]); ?>" alt="<?php echo ($vo["ad_name"]); ?>" title="<?php echo ($vo["ad_name"]); ?>" />
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

</div>
<!--contentç»“æŸ-->
<script type="text/javascript">
    jQuery(".multipleColumn").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"leftLoop",autoPlay:true,vis:2});
</script>




<!--footer开始-->
    <div id="footer">
        <!--第十个内容块-->
        <div class="cont_h10">
            <div class="center clearfix">
                <ul class="cont_ty45 clearfix">
                    <li class="cont_ty46"  ><a href="/9kdnet/" title='首页'  ><span>首页</span></a></li>
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
                    <img src="/9kdnet/Public/Home/images/qr.png" alt="" />
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