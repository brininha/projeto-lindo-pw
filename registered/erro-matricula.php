<?php
    if (isset($_GET['erro'])) {
?>
    <div style="position: absolute; z-index: 10; width: fit-content; height: fit-content" class="alert alert-primary alert-dismissible fade show" role="alert">
        Você já está matriculado!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php         
    }
?>