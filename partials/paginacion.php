<ul class="pagination">
  <li class="pagination__prev">
    <?php if( get_previous_posts_link() ) : ?>
      <svg class="icon icon--arrow-left">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-left">
      </svg>
      <?php previous_posts_link('Página Anterior'); ?>
    <?php endif; ?>
  </li>
  <li class="pagination__next">
    <?php if( get_next_posts_link() ) : ?>
      <?php next_posts_link('Próxima página'); ?>
      <svg class="icon icon--arrow-right">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right">
      </svg>
    <?php endif; ?>
  </li>
</ul>
