<?php
/* Smarty version 3.1.32, created on 2018-12-12 02:36:04
  from 'E:\www\myblog\Application\View\Admin\top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c107414dc8024_77820370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8930a78be549761b1b6bf0975a0b2c07600d1f' => 
    array (
      0 => 'E:\\www\\myblog\\Application\\View\\Admin\\top.html',
      1 => 1538219792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c107414dc8024_77820370 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="./Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="./Application/View/Admin/css/admin.css">
</head>

<body>
<div class="lefter">
    <div class="logo"><img src="./Application/View/Admin/images/logo.png" alt="后台管理系统" /></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="index.php?p=Home&c=Index&a=index" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="index.php?p=Admin&c=Login&a=logout" target="_top">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="#" class="icon-file-text" target="mainFrame">后台主页</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['user']['user_name'];?>
，欢迎您的光临。</span>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
