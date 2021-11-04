<?php
session_start();
// $cerrar_sesion = $_GET['cerrar_sesion'];
if (isset($_GET['cerrar_sesion'])) {
   session_destroy();
}
include 'includes/funciones.php';
include 'includes/header.php';
?>

<div class="container">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form method="POST" action="./includes/login-admin.php" class="card-body p-5 text-center">

                            <h3 class="mb-5">Iniciar sesion</h3>

                            <div class="form-outline mb-4">
                                <input name="usuario" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX-2">Usuario</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2">Contrasena</label>
                            </div>
                            <input type="hidden" name="login-admin" value="1">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>