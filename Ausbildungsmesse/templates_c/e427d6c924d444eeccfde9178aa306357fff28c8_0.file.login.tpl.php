<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:47:34
  from "C:\xampp\htdocs\Ausbildungsmesse\Template\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfe146662347_78591641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e427d6c924d444eeccfde9178aa306357fff28c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ausbildungsmesse\\Template\\login.tpl',
      1 => 1488970045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/head.tpl' => 1,
    'file:Template/header.tpl' => 1,
    'file:Template/feet.tpl' => 1,
  ),
),false)) {
function content_58bfe146662347_78591641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:Template/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title>Login</title>
    <link rel="stylesheet" href="CSS\login.css" type="text/css">
</head>
<body>
    <div class="Header">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    
    <div class="Body">
        <div class="Headline2">
          <h2>Login</h2>
        </div>
        <form action="index.php?view=panel&method=login" method="POST" class="Login">
            <label for="betriebsID">Betriebs-ID:
                <input id="betriebsID" name="betriebsID" value="<?php if (isset($_POST['betriebsID'])) {
echo $_POST['betriebsID'];
}?>">
            </label>
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="Feet">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/feet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>     
</body><?php }
}
