function showMessage(mensaje, tipo) {
    let Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({ icon: tipo, title: mensaje });
};




$(document).ready(() => {

    $('#login-form').submit((e) => {
        e.preventDefault();

        const email = $('#txtEmail').val().trim();
        const password = $('#txtPassword').val().trim();

        $.ajax({
            url: 'includes/validation.php',
            type: 'POST',
            data: { 
                email, 
                password,
                accion: 'login' 
            },
            success: (response) => {
                const res = JSON.parse(response);
                // console.log(res['rol']);

                if (res && res['estado'] === 'ok') {
                    switch (res['rol']) {
                        case 1:
                            window.location.href = "administrador/";
                            break;
                        case 2:
                            window.location.href = "bodega/";
                            break;
                        case 3:
                            window.location.href = "cocina/";
                            break;
                        case 4:
                            window.location.href = "finanzas/";
                            break;
                    }
                } else if (res && res['estado'] === 'fail') {
                    showMessage(res['mensaje'], 'error');
                }
            },
            error: (xhr, status, error) => {
                console.log(error.message);
            }
        })
    })
});