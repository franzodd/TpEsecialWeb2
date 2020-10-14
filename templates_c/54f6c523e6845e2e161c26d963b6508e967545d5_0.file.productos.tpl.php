<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 02:24:28
  from 'C:\xampp\htdocs\Proyectos\Tp especial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7521bc76a817_00785627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f6c523e6845e2e161c26d963b6508e967545d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Tp especial\\templates\\productos.tpl',
      1 => 1601233622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7521bc76a817_00785627 (Smarty_Internal_Template $_smarty_tpl) {
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
        <article>
            <h2><a id="p1">Precios</a></h2>
            <table class="t-precios">
                <thead>
                    <tr>
                        <td>Unidades</td>
                        <td>Inciensos</td>
                        <td>Sahumerios</td>
                        <td>Conos</td>
                    </tr>
                </thead>
                <tr>
                    <td>Hasta 10</td>
                    <td>$200</td>
                    <td>$120</td>
                    <td>$90</td>
                </tr>
                <tr>
                    <td>De 10 a 50</td>
                    <td>$180</td>
                    <td>$108</td>
                    <td>$80</td><button>Boton</button>
                </tr>
                <tr>
                    <td>Mas de 50</td>
                    <td>$160</td>
                    <td>$96</td>
                    <td>$72</td>
                </tr>
            </table>
        </article>
        <article>
            <h2>Hace tu pedido!!</h2>
            <p>Llevando 15 o mas obtenes un descuento del 10%!</p>
            <p>Y si llevas mas de 50 te damos un 20% de descuento!!</p>
            <section class="inputs">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="input-nombre">
                </div>
                <div>
                    <label for="producto">Producto</label>
                    <input type="text" id="input-producto">
                </div>
                <div>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="input-cantidad">
                </div>
                <div>
                    <label for="precio">Precio</label>
                    <input type="number" id="input-precio">
                </div>
            </section>
            <div class>
                <button id="agregar">Agregar</button>
                <button id="agregar3">Agregar 3</button>
                <button id="borrar">Borrar Ultimo</button>
                <button id="vaciar">Vaciar</button>
            </div>
            <table class="pedido">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td>Precio</td>
                    </tr>
                </thead>
                <tbody id="tabla">
                </tbody>
            </table>
        </article>
    </main>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
