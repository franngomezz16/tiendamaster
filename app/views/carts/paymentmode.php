<?php include_once(VIEWS . 'header.php') ?>
<div class="card" id="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Iniciar sesión</a></li>
            <li class="breadcrumb-item"><a href="#">Datos de envío</a></li>
            <li class="breadcrumb-item">Forma de pago</li>
            <li class="breadcrumb-item"><a href="#">Verifica los datos</a></li>
        </ol>
    </nav>
    <div class="card-header">
        <h1><?= $data['titulo'] ?></h1>
        <p>Por favor, elija la forma de pago</p>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>cart/verify/" method="POST">
            <div class="form-group text-left">
                <?php foreach ($data['paymentMode'] as $key): ?>
                    <div class="radio">
                        <label><input type="radio" name="payment"  value="<?= $key->value ?>"> <?=$key->name ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar datos" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
<?php include_once(VIEWS . 'footer.php') ?>