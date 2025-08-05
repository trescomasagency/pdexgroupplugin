async function crearProducto() {

    const formAñadirProducto = document.querySelector('#form-añadir-producto');
    
    formAñadirProducto.addEventListener('submit', function(evt) {
        evt.preventDefault();

        console.log('todo bien');
    });

}

function viewPanelProductAppStart() {

    crearProducto();

}

