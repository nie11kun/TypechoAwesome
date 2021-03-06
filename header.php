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

    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light d-md-none">
            <a class="navbar-brand text-dark" href="<?php $this->options->siteUrl(); ?>">Marco Nie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" id="s" name="s" class="text form-control" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit my-auto"><?php _e('搜索'); ?></button>
                </form>

                <div class="dropdown-divider"></div>

                <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)) : ?>
                    <p class="text-info nav-title"><?php _e('分类'); ?></p>
                    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list nav-item-style'); ?>
                <?php endif; ?>
 
                <div class="dropdown-divider"></div>

                <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)) : ?>
                    <p class="text-info nav-title"><?php _e('归档'); ?></p>
                    <ul class="navbar-nav mr-auto">
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li class="nav-item"><a class="nav-link nav-title" href="{permalink}">{date}</a></li>'); ?>
                    </ul>
                <?php endif; ?>
            </div>

        </nav>
    </div>

    <header id="header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="site-name col-md-9 col-12 d-none d-md-block">
                    <?php if ($this->options->logoUrl) : ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                        </a>
                    <?php else : ?>
                        <a id="logo" class="text-decoration-none" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                        <p class="description mb-2"><?php $this->options->description() ?></p>
                    <?php endif; ?>
                </div>
                <div class="site-search col-md-3 d-none d-md-block">
                    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                        <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                        <button type="submit" class="submit my-auto"><?php _e('搜索'); ?></button>
                    </form>
                </div>
                <div class="col-12">
                    <ul class="nav nav-tabs clearfix" role="navigation">
                        <li class="nav-item">
                            <a <?php if ($this->is('index')) : ?>class="nav-link active" <?php else : ?>class="nav-link" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('Article'); ?></a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while ($pages->next()) : ?>
                            <li class="nav-item">
                                <a <?php if ($this->is('page', $pages->slug)) : ?>class="nav-link active" <?php else : ?>class="nav-link" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div><!-- end .row -->

    </header><!-- end #header -->
    </div>
    <div id="body">
        <div class="container">
            <div class="row">