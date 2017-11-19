<?php
/* Smarty version 3.1.30, created on 2017-11-16 13:44:48
  from "C:\Users\tad\Dropbox\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d9650001971_82174020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d89f8811e07a20ca0e71efbe418e8053da2cc8' => 
    array (
      0 => 'C:\\Users\\tad\\Dropbox\\www\\reporter\\templates\\nav.tpl',
      1 => 1510839882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0d9650001971_82174020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img alt="Brand" src="images/logo.png" class="img-fluid">
        </a>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav mr-auto">
                <a href="index.php" class="nav-link text-white">編輯精選</a>
                <a href="index.php" class="nav-link text-white">街巷故事</a>
                <a href="index.php" class="nav-link text-white">市井觀點</a>
                <a href="index.php" class="nav-link text-white">私房知識塾</a>
            </div>
            <div class="navbar-nav mr-sm-0">
                <?php if (isset($_SESSION['username'])) {?>
                <a href="admin.php?op=article_form" class="nav-link text-white">發布</a>
                <a href="logout.php" class="nav-link text-white">登出</a>
                <?php } else { ?>
                <a href="signup.php" class="nav-link text-white">註冊</a>
                <a href="main_login.php" class="nav-link text-white">登入</a>
                <?php }?>
            </div>
        </div>
    </div>
</nav><?php }
}
