<?php
    if (isset($_GET['erro'])) {
?>
    <div style="position: absolute; right: 0; z-index: 10" class="alert alert-primary alert-dismissible fade show" role="alert">
        Faça o login para adquirir permissão!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php         
    }
?>