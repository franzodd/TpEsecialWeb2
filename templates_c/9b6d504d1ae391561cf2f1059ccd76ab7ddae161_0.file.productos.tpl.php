<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 22:28:49
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8219819da581_81676552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6d504d1ae391561cf2f1059ccd76ab7ddae161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\productos.tpl',
      1 => 1602361717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8219819da581_81676552 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <main class="main-product">
       <h2>Nuestros aromas</h2>
       <h3>Lista de aromas</h3>
       <article class="lista_de_aromas">
           <ul>
               <li class="tipodearoma">Frutales</li>
               <li>Limon</li>
               <li>Melon y miel</li>
               <li>Arandanos</li>
               <li>Naranja</li>
               <li>Uva</li>
           </ul>
           <ul>
               <li class="tipodearoma">Epecias</li>
               <li>Chocolate</li>
               <li>Vainilla</li>
               <li>Coco</li>
               <li>Café</li>
               <li>Canela</li>
           </ul>
           <ul>
               <li class="tipodearoma">Fantasia</li>
               <li>Musk hindu</li>
               <li>Opium</li>
               <li>Reina de la noche</li>
               <li>Sai baba</li>
               <li>Aroma de angeles</li>
           </ul>
           <ul>
               <li class="tipodearoma">Florales</li>
               <li>Jazmin persa</li>
               <li>Fresias</li>
               <li>Nardo</li>
               <li>Lavanda</li>
               <li>Flores de azahar</li>
           </ul>
           <ul>
               <li class="tipodearoma">Hiervas</li>
               <li>Mirra</li>
               <li>Patchouly</li>
               <li>Citronella</li>
               <li>Menta</li>
               <li>Lemongras</li>
           </ul>
           <ul>
               <li class="tipodearoma">Maderas</li>
               <li>Sandalo dulce</li>
               <li>Palo santo</li>
               <li>Incienso</li>
               <li>7 poderes</li>
               <li>Cedro libano</li>
           </ul>
       </article>
       <article>
           <section>
               <h3>Inciensos</h3>
               <p>!!Los inciensos rinden 60 usos por paquete!!</p>
               <h4>Metodo de uso</h4>
               <ol class="li-product">
                   <li>Cortar trocitos de aproximadamente 1 centimetro.</li>
                   <li>Encender la superficie hasta que se genera la brasa.</li>
                   <li>Colocar en uno de nuestros quemadores de ceramica.</li>
                   <li>Disfrutar el aroma.</li>
               </ol>
           </section>
           <section>
               <h3>Conos</h3>
               <P>Los conitos tienen una duracion de 20min y se puede colocar en casi cualquier lugar.</P>
           </section>
           <section>
               <h3>Sahumerios</h3>
               <p>Nuestros sahumerios tienen una duracion de una hora por varilla.</p>
           </section>
       </article>
       <div>
           <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
           <table class="table">
               <thead class="thead-dark">
                   <tr>
                       <td>Aroma</td>
                       <td>Precio</td>
                       <td>Categoria</td>
                   </tr>
               </thead>
               <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                       <tr>
                           <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->aroma;?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                           <td><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a></td>
                           <td><a href="un_producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="nav-link active">Ver mas</a></td>
                       </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </tbody>
           </table>
       </div>
   </main>
   <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
