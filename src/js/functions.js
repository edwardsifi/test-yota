$(document).ready(function () {

    $('#GestionClienteArreglo').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
            type: "POST",
            dataType: "json",
            url: "../../includes/funciones.php",
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    console.log("La solicitud se ha completado correctamente.");
                    console.log(data);
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'Gestion realizada con exito',
                        footer: ''
                      })
                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                }
            });

    });

    $('#GestionClienteCancelacion').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });


    $('#GestionClienteCompra').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteServicio').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteReclamo').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteRenovacion').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteRenovacion').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteSoporte').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteDevolucion').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteConsulta').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteReclamo').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });

    $('#GestionClienteReemplazo').on('click', function (e) {
        e.preventDefault();
        var datos = $(this).attr('value');
        console.log(datos);
        $.ajax({
            data: { "insertar": datos, "registrar": "GestionCliente" },
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

    });


});