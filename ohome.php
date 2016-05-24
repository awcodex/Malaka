
<?php if(ft_of_get_option('fabthemes_awlayout', true)== true): ?>
<?php get_template_part('homepage');?>
<?php else:?>
<?php get_template_part('homepage', 'two');?>
<?php endif; ?>