<?php

function callback_styles_pdexgroup_core_panel_productos() {

    wp_register_style('panel-producto', PDEX_DIR_URL . '/public/assets/styles/panel-productos.css', array());

    // routing
    wp_register_script('routing-core', plugins_url('../assets/js/routing-core.js', __FILE__ ), array());
    // controladores

    // vistas
    wp_register_script('view-panel-producto', plugins_url('../assets/js/views/viewPanelProduct.js', __FILE__ ), array());
    // entradas
    wp_register_script('app-panel-producto', plugins_url('../assets/js/app-panel-producto.js', __FILE__ ), array('routing-core', 'view-panel-producto'));

}

function callback_pdexgroup_core_panel_productos() {

    // styles
    wp_enqueue_style('panel-producto');
    // scripts
    wp_enqueue_script('app-panel-producto');

    $panel_añadir_producto = '
        <div class="pdexgroup-core-panel-añadir-producto">
            <form class="pdexgroup-core-panel-añadir-producto__formulario" action="/" method="POST" enctype="multipart/form-data" id="form-añadir-producto">
                
                <div class="pdexgroup-core-panel-añadir-producto__formulario-item pdexgroup-core-panel-añadir-producto__formulario-item--imagen">
                    <label for="producto-imagen"></label>
                    <input id="producto-imagen" type="file" accept="image/*" name="imagen_producto" />
                </div>
                
                <div class="pdexgroup-core-panel-añadir-producto__formulario-item">
                    <label for="producto-nombre">Nombre del producto</label>
                    <input id="producto-nombre" type="text" name="producto[nombre]" />
                </div>
                
                <div class="pdexgroup-core-panel-añadir-producto__formulario-item">
                    <label for="producto-contenido">Añade una descripción</label>
                    <input id="producto-contenido" type="text" name="producto[contenido]" />
                </div>

                <button class="pdexgroup-core-panel-añadir-producto__formulario-submit" type="submit">Crear produto</button>

            </form>
        </div>
    ';

    return $panel_añadir_producto;

}

add_action('wp_enqueue_scripts', 'callback_styles_pdexgroup_core_panel_productos');
add_shortcode('pdexgroup_core_panel_productos', 'callback_pdexgroup_core_panel_productos');