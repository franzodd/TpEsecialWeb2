<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 18:48:23
  from 'C:\xampp\htdocs\Proyectos\Tpespecial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7759d7ae36c0_65351408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5cc926e615188ddb24e4f55d0dabb041571bad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tpespecial\\templates\\home.tpl',
      1 => 1601657298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7759d7ae36c0_65351408 (Smarty_Internal_Template $_smarty_tpl) {
?>         <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         <main class="main-index">
             <article class="article-text">
                 <h2>Aromas artesanales</h2>
                 <p>Nuestros productos estan hechos con materiales organicos y de manera artesanal, bañados con aceites
                     puros.
                 </p>
                 <h2>Presentacion para el local</h2>
             </article>
             <article class="article-index">
                 <section class="section-index">
                     <h3>Cajitas de exhibicion</h3>
                     <figure class="figure-cajas">
                         <img src="img/cajamostrador.jpg" alt="cajamostrador" class="cajas">
                         <img src="img/cajamostradorfrente.jpg" alt="cajamostradorfrente" class="cajas">
                     </figure>
                     <figcaption>Los exibidores traen 12 paquetes de inciensos que se podueden armar a gusto. En la parte del
                         logo
                         tiene un craquelado que al abrirlo se coloca de tras de los inciensos dejandolos a la vista,
                         quedando un perfecto mostrardor como se muestra en la imagen.</figcaption>
                 </section>
                 <section class="section-index">
                     <h3>Conos</h3>
                     <figure class="figure-conos">
                         <img src="img/conos1.jpg" alt="conos1" class="conos">
                         <img src="img/conosvarios.jpg" alt="conosvarios" class="conos">
                     </figure>
                     <figcaption>Los conos están elaborados con materiaal organico de gran calidad. También suelen tener una
                         duración
                         aproximada de 40 minutos después de haber sido encendido. Es curioso cómo el olor permanece en la
                         estancia durante un buen rato después de apagarse el cono.
                     </figcaption>
                 </section>
                 <section class="section-index">
                     <h3>Sahumerios</h3>
                     <figure class="figure-sahumerios">
                         <img src="img/sahumeriosvarios.jpg" alt="sahumeriosvarios" class="sahumerios">
                     </figure>
                     <figcaption>El Sahumerio es una práctica muy antigua empleada para recuperar la armonía, atraer las
                         buenas
                         vibraciones, obtener paz y tranquilidad y fortalecer las energías positivas presentes en el hogar,
                         así como nuestra propia energía.
                     </figcaption>
                 </section>
             </article>
         </main>
         <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
