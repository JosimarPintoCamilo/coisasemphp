<form name="post" action="./" method="post" enctype="multipart/form-data" autocomplete="off" novalidate>
    <?= csrf_input() ?>
    <input type="text" name="nome" value="Josimar">
    <button>Enviar</button>
</form>
