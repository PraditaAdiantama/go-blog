<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php
        $paginate_links = paginate_links();

        $paginate_links = str_replace("page-numbers", "page-link", $paginate_links);

        echo $paginate_links;
        ?>
    </ul>
</nav>