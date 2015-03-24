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
<div class="head_title"><!-- HEAD TITLE -->
    <div class="container_12">
        <div class="grid_12">

        </div>
    </div>
</div><!-- HEAD TITLE -->
<div class="breadcrumbs"><!-- BREADCRUMBS -->
    <div class="container_12">
        <div class="grid_12">
            <a href="/9kdnet/index.php"><?php echo (L("T_HOME")); ?></a>
            <a href='<?php echo U("news/index");?>' class="icon_meta"><?php echo (L("T_NEWS")); ?></a>
            <a class="icon_meta"><?php echo ($info['title']); ?></a>
            <form id="search" action="#" />
            <fieldset>
                <input type="text" name="search" />
                <input type="submit" value="" />
            </fieldset>
            </form>
        </div>
    </div>
</div><!-- END BREADCRUMBS -->
<div class="main"><!-- MAIN -->
    <div class="container_12">
        <div class="grid_3"><!-- SIDEBAR -->
            <div id="sidebar">
                <div class="sideblock">
                    <h3 class="title"><?php echo (L("T_NEWS")); ?></h3>
                    <div class="list-type-sidebar">
                        <ul>
                            <?php $__m_cat=M("category");$__cat_list=$__m_cat->where("lang='zh-cn'  AND type='n' AND pid=0")->limit()->select();foreach($__cat_list as $_ck=>$_cv):$cid=$_cv['cid'];$child=$__m_cat->where('pid='.$cid)->order('cid DESC')->select();extract($_cv);?><li><a href='<?php echo U("news/index",array("cid"=>$cid));?>'><?php echo ($name); ?></a></li><?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- END SIDEBAR -->
        <div class="grid_9">
            <dl class="group"><!-- CATEGORY FILTER -->
                <dd>
                    <ul class="filter group">
                        <?php $__m_cat=M("category");$__cat_list=$__m_cat->where("lang='zh-cn'  AND type='n' AND pid=$_GET[cid]")->limit()->select();foreach($__cat_list as $_ck=>$_cv):$cid=$_cv['cid'];$child=$__m_cat->where('pid='.$cid)->order('cid DESC')->select();extract($_cv);?><li class="current all">
                                <a href='<?php echo U("news/index",array("cid"=>$cid));?>'><?php echo ($name); ?></a>
                            </li><?php endforeach; ?>
                    </ul>
                </dd>
            </dl><!-- END CATEGORY FILTER -->
        </div>
        <div class="grid_9">
            <h4 class="uppercase"><?php echo ($info["title"]); ?></h4>
            <div class="post-meta">
                <p><?php echo date('Y-m-d',$info['published']);?>
                    <a href="javascript:;" class="icon_meta purple"><?php echo ($auther); ?></a>
                    <a href="javascript:;" class="icon_meta purple"><?php echo (L("T_VIEWTIMES")); ?>:<?php echo ($info['click']); ?></a></p>
            </div>

            <div class="post-block"><!-- POST-BLOCK -->
                <?php if($info['image_id'] != 0): ?><a href="index.html"><img src="<?php echo get_default_img($info['image_id']);?>" alt="" width="700" height="280" border="0" /></a><?php endif; ?>
                <p class="bottom">
                <?php echo ($info['content']); ?>
                </p>
            </div><!-- END POST-BLOCK -->


        </div>
    </div>
</div><!-- END MAIN -->
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