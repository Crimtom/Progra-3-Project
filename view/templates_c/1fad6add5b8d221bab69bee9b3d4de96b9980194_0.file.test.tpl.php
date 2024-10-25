<?php
/* Smarty version 4.5.4, created on 2024-10-17 04:29:18
  from 'C:\xampp\htdocs\miercoles\semana6\view\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6710767e09bcd7_79839649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fad6add5b8d221bab69bee9b3d4de96b9980194' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miercoles\\semana6\\view\\templates\\test.tpl',
      1 => 1729132155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6710767e09bcd7_79839649 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>

    <H1>MI PRIMER SMARTY</H1>


    <?php if ($_smarty_tpl->tpl_vars['perfil']->value == "1") {?>
    <H1>es un administrador</H1>
    <?php }?>


<?php
$__section_indice_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrNombres']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_0_total = $__section_indice_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_0_total !== 0) {
for ($__section_indice_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_0_iteration <= $__section_indice_0_total; $__section_indice_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
  Nombre: <?php echo $_smarty_tpl->tpl_vars['arrNombres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)];?>
<br />
<?php
}
}
?>


Seleccione un nombre:
<select name="">

<?php
$__section_indice_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrNombres']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_1_total = $__section_indice_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_1_total !== 0) {
for ($__section_indice_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_1_iteration <= $__section_indice_1_total; $__section_indice_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['arrNombres']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)];?>
</option>
<?php
}
}
?>
</select>


<hr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrNombres']->value, 'nombre');
$_smarty_tpl->tpl_vars['nombre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->value) {
$_smarty_tpl->tpl_vars['nombre']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
<br />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php echo $_smarty_tpl->tpl_vars['pais']->value;?>



</body>
</html><?php }
}
