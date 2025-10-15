document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-figura');
    
    if (form) {
        form.addEventListener('submit', (event) => {
            if (!validarFormulario()) {
                event.preventDefault(); 
            }
        });
        
        const inputLado1 = document.getElementById('lado1');
        if (inputLado1) {
            inputLado1.addEventListener('blur', () => validarCampoSimple('lado1', 'Lado/Radio'));
        }

        const inputLado2 = document.getElementById('lado2');
        if (inputLado2) {
            inputLado2.addEventListener('blur', () => validarCampoSimple('lado2', 'Lado 2'));
        }

        const inputLado3 = document.getElementById('lado3');
        if (inputLado3) {
            inputLado3.addEventListener('blur', () => validarCampoSimple('lado3', 'Lado 3'));
        }
    }
});


/**
 * Usa ID directo para obtener el elemento.
 * @param {string} idCampo - El ID del input (ej: 'lado1', 'lado2').
 * @param {string} nombreCampo - El nombre amigable para el error (ej: 'Lado').
 */
function validarCampoSimple(idCampo, nombreCampo) {
    const input = document.getElementById(idCampo);
    if (!input) return true; 

    const valor = parseFloat(input.value);
    let mensaje = '';
    
    if (input.value.trim() === '') {
        mensaje = `El campo ${nombreCampo} es obligatorio.`;
    } 
    else if (isNaN(valor) || valor <= 0) {
        mensaje = `Debe ser un número positivo (${nombreCampo}).`;
    }

    if (mensaje) {
        mostrarErrorSimple(input, mensaje);
        return false;
    } else {
        limpiarErrorSimple(input);
        return true;
    }
}



function validarFormulario() {
    let esValido = true;

    
    const lado1Valido = validarCampoSimple('lado1', 'Lado/Radio');
    const lado2Valido = validarCampoSimple('lado2', 'Lado 2');
    const lado3Valido = validarCampoSimple('lado3', 'Lado 3');
    
    if (!lado1Valido || !lado2Valido || !lado3Valido) {
        esValido = false;
    }

    return esValido;
}



function mostrarErrorSimple(input, mensaje) {
    limpiarErrorSimple(input);

    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-texto';
    errorDiv.style.color = 'red';
    errorDiv.style.fontSize = '0.85em';
    errorDiv.style.marginTop = '5px';
    errorDiv.textContent = mensaje;

    input.insertAdjacentElement('afterend', errorDiv);
    input.style.borderColor = 'red'; 
}

function limpiarErrorSimple(input) {
    let nextSibling = input.nextElementSibling;
    if (nextSibling && nextSibling.classList.contains('error-texto')) {
        nextSibling.remove();
    }
    input.style.borderColor = ''; 
}