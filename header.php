<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
                        'category'  =>  _t('分类 %s 下的文章'),
                        'search'    =>  _t('包含关键字 %s 的文章'),
                        'tag'       =>  _t('标签 %s 下的文章'),
                        'author'    =>  _t('%s 发布的文章')
                    ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="https://niekun.net/webcdn/bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <script src="https://niekun.net/webcdn/jquery-3.4.1/jquery.min.js"></script>
    <script src="https://niekun.net/webcdn//popper.js-1.16.0/popper.min.js"></script>
    <script src="https://niekun.net/webcdn/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css?v=1'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=2'); ?>">
    <!--
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css?v=2'); ?>">
    -->

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <!--[if lt IE 8]
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

    <nav class="navbar navbar-expand-md navbar-light bg-transparent d-block d-md-none">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </form>

            <div class="dropdown-divider"></div>

            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
                <p class="text-info"><?php _e('分类'); ?></p>
                <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
            <?php endif; ?>

            <div class="dropdown-divider"></div>

            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
                <p class="text-info"><?php _e('归档'); ?></p>
                <ul class="widget-list navbar-nav">
                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li class="nav-item"><a class="" href="{permalink}">{date}</a></li>'); ?>
                </ul>
            <?php endif; ?>
        </div>
    </nav>

    <header id="header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="site-name col-md-9 col-12">
                    <?php if ($this->options->logoUrl) : ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                        </a>
                    <?php else : ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                        <p class="description"><?php $this->options->description() ?></p>
                    <?php endif; ?>
                </div>
                <div class="site-search col-md-3 d-none d-md-block">
                    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                        <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                    </form>
                </div>
                <div class="col-12">
                    <ul class="nav nav-tabs clearfix" role="navigation">
                        <li class="nav-item active">
                            <a<?php if ($this->is('index')) : ?> class="current" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('Article'); ?></a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while ($pages->next()) : ?>
                            <li class="nav-item">
                                <a<?php if ($this->is('page', $pages->slug)) : ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div><!-- end .row -->
        </div>
    </header><!-- end #header -->
    <div id="body">
        <div class="container">
            <div class="row">