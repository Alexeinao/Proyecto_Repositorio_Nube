// Get a reference to the database service
var database = firebase.database();

const registroForm = document.getElementById('registro-form');
const nombreInput = document.getElementById('nombre');
const horaEntradaInput = document.getElementById('hora-entrada');
const registrosBody = document.getElementById('registros-body');

// --- Create --- //
registroForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const nombre = nombreInput.value;
    const hora_entrada = horaEntradaInput.value;

    database.ref('registros').push({
        nombre: nombre,
        hora_entrada: hora_entrada
    });

    nombreInput.value = '';
    horaEntradaInput.value = '';
});

// --- Read --- //
database.ref('registros').on('value', (snapshot) => {
    registrosBody.innerHTML = ''; // Clear the table
    snapshot.forEach((childSnapshot) => {
        const registro = childSnapshot.val();
        const row = document.createElement('tr');
        row.innerHTML = `<td>${registro.nombre}</td><td>${registro.hora_entrada}</td>`;
        registrosBody.appendChild(row);
    });
});