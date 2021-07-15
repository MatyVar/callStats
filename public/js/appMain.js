//Elementos

const selectSupervisores = document.querySelector('#supervisores');
const tablaOperadores = document.querySelector('#tableOperadores');
const todosOption = document.querySelector('#todos').value;


//EventListeners


eventListeners();

function eventListeners() {
    selectSupervisores.addEventListener('change', mostrarSupervisorSeleccionado);
};

function mostrarSupervisorSeleccionado() {
    const tr = document.querySelectorAll('#sup');

    tr.forEach(trs => {

        trs.hidden = true;
        
    })
  
    const selectSupValue = selectSupervisores.value;
    selectedClassSup = selectSupValue.split(' ');
    selectedClassSup = selectedClassSup[0];

    const obj = document.querySelectorAll('.' + selectedClassSup);
    console.log(todosOption);

    if (selectSupervisores.value !== todosOption) {
        obj.forEach(item => {
            item.hidden = false;

        });
    } else {


        tr.forEach(trs => {
            trs.hidden = false;
        })
    }
}

