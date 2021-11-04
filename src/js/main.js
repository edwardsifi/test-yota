// var tickets = document.getElementsByClassName('ticket');

var select = document.getElementById('select');
var tiketbutton = document.getElementById('guardarTicket');
var nombreCliente = document.getElementById('nombre');
var apellidoCliente = document.getElementById('apellido');
var direccionCliente = document.getElementById('direccion');
var telefonoCliente = document.getElementById('telefono');
var problemaCliente = document.getElementById('problema');
var solucionCliente = document.getElementById('solucion');

tiketbutton.addEventListener('click', () => {
   

    let codigoGestion = select.value;
    let nombre = nombreCliente.value;
    let apellido = apellidoCliente.value;
    let direccion = direccionCliente.value;
    let telefono = telefonoCliente.value;
    let problema = problemaCliente.value;
    let solucion = solucionCliente.value;

    console.log(codigoGestion, nombre, apellido, direccion, telefono, problema,solucion);

    $.ajax({
        data: {
            "codigoGestion": codigoGestion,            
            "nombreCliente": nombre,
            "apellidoCliente": apellido,
            "direccionCliente": direccion,
            "telefonoCliente":  telefono,
            "problemaExpuesto": problema,
            "solucionBrindada": solucion,
            "setData":"setData"
        },
        type: "POST",
        dataType: "json",
        url: "../../includes/funciones.php",
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                console.log("La solicitud se ha completado correctamente.");
                console.log(data);
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                console.log("La solicitud a fallado: " + textStatus);
            }
        });
})




// tickets[0].addEventListener('change', ()=>{
//  console.log('le dio click al primer ticket')
// })

