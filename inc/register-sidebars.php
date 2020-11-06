<?php

register_sidebar( array(
    'name' => 'Footer Left',
    'id' => 'footer_left',
    'description' => 'Widgets placed here will appear directly above the footer on the left, or at the top for smaller devices.'
) );
register_sidebar( array(
    'name' => 'Footer Right',
    'id' => 'footer_right',
    'description' => 'Widgets placed here will appear directly above the footer on the right, or at the bottom for smaller devices.'
) );
register_sidebar( array(
    'name' => 'Navbar Right',
    'id' => 'navbar-sidebar',
    'description' => 'Widgets placed here will appear at the right edge of the navbar. Usually good for a search form.'
) );
register_sidebar( array(
    'name' => 'Blog Right',
    'id' => 'blog-right',
    'description' => 'Widgets placed here will appear at the right edge of the navbar. Usually good for a search form.'
) );
register_sidebar( array(
    'name' => 'Shop Left (PC) Sidebar',
    'id' => 'shop-pc',
    'description' => 'Widgets placed here will appear to the left of the shop page and any product archives. Ideal for displaying categories or special widgets for narrowing display criteria. WILL SHOW ON LARGE DEVICES ONLY.'
) );
register_sidebar( array(
    'name' => 'Shop Top (Mobile) Sidebar',
    'id' => 'shop-mobile',
    'description' => 'Widgets placed here will appear at the top of the shop page and any product archives. Intended to hold dropdown forms of widgets as the PC sidebar at the left of the shop. WILL SHOW ON MOBILE DEVICES ONLY.'
) );

?>