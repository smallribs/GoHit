<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-26 16:41:20
  from '/Users/xuxianghao/Public/PhpstormProjects/GoHit/HiType/View/templates/ErrorInjection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61782fb0c68c00_05245352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbba5fc299a956b96bffb319c0f77d755cd8c381' => 
    array (
      0 => '/Users/xuxianghao/Public/PhpstormProjects/GoHit/HiType/View/templates/ErrorInjection.tpl',
      1 => 1635266248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61782fb0c68c00_05245352 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注入</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GoHit</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">注入</a></li>
                <li><a href="#">XSS</a></li>
                <li><a href="#">CSRF</a></li>
                <li><a href="#">SSRF</a></li>
                <li><a href="#">命令执行</a></li>
                <li><a href="#">文件读取</a></li>
                <li><a href="#">文件上传</a></li>
                <li><a href="#">PHP反序列化</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['data']->value[0];?>
</h1>
    <hr>
    <p><?php echo $_smarty_tpl->tpl_vars['data']->value[1];?>
</p>
</div>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
