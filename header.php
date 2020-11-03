
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <?php get_template_part( 'inc/styles' ); ?>
</head>
<body <?php body_class();?>>
    <header>
        <?php get_template_part( 'template-parts/navbar' ); ?>
    </header>