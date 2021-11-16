<nav>
    <div>
        <p class="text-center">Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
    </div>
    <ul class="pagination">
        <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
        <?php if ($pagina > 1) { ?>
            <li class="page-item">
                <a href="?pagina=<?php echo $pagina - 1 ?>" class="page-link">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php } ?>
        <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
        <?php for ($x = 1; $x <= $paginas; $x++) { ?>
            <li class="page-item <?php if ($x == $pagina) echo "active" ?>">
                <a href="?pagina=<?php echo $x ?>" class="page-link">
                    <?php echo $x ?>
                </a>
            </li>
        <?php } ?>
        <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
        <?php if ($pagina < $paginas) { ?>
            <li class="page-item">
                <a href="?pagina=<?php echo $pagina + 1 ?>" class="page-link">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>