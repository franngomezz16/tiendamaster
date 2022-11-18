<?php include_once(VIEWS . 'header.php') ?>
<div class="card" id="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
            <li class="breadcrumb-item">Datos de envío</li>
            <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
            <li class="breadcrumb-item"><a href="#">Verifica los datos</a></li>
        </ol>
    </nav>
    <div class="card-header">
        <h1>Datos de envío</h1>
        <p>Por favor, compruebe los datos de envío</p>
    </div>
    <div class="card-body">

            <div class="form-group text-left">
                <h5>Nombre:</h5>
                <p><?= $data['data']->first_name ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Primer apellido:</h5>
                <p><?= $data['data']->last_name_1 ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Segundo apellido:</h5>
                <p><?= $data['data']->last_name_2 ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Correo electrónico:</h5>
                <p><?= $data['data']->email ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Dirección:</h5>
                <p><?= $data['data']->address ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Ciudad:</h5>
                <p><?= $data['data']->city ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Provincia:</h5>
                <p><?= $data['data']->state ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>Código postal:</h5>
                <p><?= $data['data']->zipcode ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <h5>País:</h5>
                <p><?= $data['data']->country ?? '' ?></p>
            </div>
            <div class="form-group text-left">
                <a class="btn btn-primary" href="<?= ROOT ?>cart/changeAddress">Cambiar dirección de envio</a>
                <a class="btn btn-success ms-2" href="<?= ROOT ?>cart/paymentmode">Enviar datos</a>
            </div>

    </div>

</div>

<?php include_once(VIEWS . 'footer.php') ?>
