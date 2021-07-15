
//Elementos

const selectOpciones = document.querySelector('#tiposDeNota');

const divModal = document.querySelector('#modalNotas');

//Event Listeners

eventListeners();

function eventListeners(){
    selectOpciones.addEventListener('change',()=>{
        if(selectOpciones.value === 'Ausencias'){
            //crear elemento
            const inputFecha = document.createElement('input');
            const parrafoFecha = document.createElement('p');
            parrafoFecha.textContent = 'Ingrese fecha de la ausencia del operador:';
            inputFecha.classList.add('form-control');
            inputFecha.type = 'date';
            inputFecha.id = 'inputFechaAusencias';
            inputFecha.name = 'inputFecha';
            parrafoFecha.classList.add('mt-2','alert','alert-warning');
            parrafoFecha.id = 'parrafoFecha';
            divModal.appendChild(parrafoFecha);
            divModal.appendChild(inputFecha);
        }else{
            if(document.querySelector('#inputFechaAusencias') && document.querySelector('#parrafoFecha')){
                document.querySelector('#inputFechaAusencias').remove();
                document.querySelector('#parrafoFecha').remove();
            }
        }
    });
};