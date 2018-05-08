<?php
/**
 *
 *
 *  Materialize Template <http://wordpress.org>
 *
 *  By KRATZ Geoffrey AKA Jul6art AKA VanIllaSkype
 *  for VsWeb <https://vsweb.be>
 *
 *  https://vsweb.be
 *  admin@vsweb.be
 *
 *  Special thanks to Brynnlow
 *  for his contribution
 *
 *  It is free software; you can redistribute it and/or modify it under
 *  the terms of the GNU General Public License, either version 2
 *  of the License, or any later version.
 *
 *  For the full copyright and license information, please read the
 *  LICENSE.txt file that was distributed with this source code.
 *
 *  The flex one, in a flex world
 *
 *     __    __    ___            __    __    __   ____
 *     \ \  / /   / __|           \ \  /  \  / /  |  __\   __
 *      \ \/ / _  \__ \  _         \ \/ /\ \/ /   |  __|  |  _\
 *       \__/ (_) |___/ (_)         \__/  \__/    |  __/  |___/
 *
 *                    https://vsweb.be
 *
 */

function materialize_template_css_template() {
    $color = '{{ data.background_color }}';

    ?>
    <script type="text/html" id="tmpl-twentyfifteen-color-scheme">
        <?php echo materialize_template_custom_background( $color ); ?>
    </script>
    <?php
}
add_action( 'customize_controls_print_footer_scripts', 'materialize_template_css_template' );

function materialize_template_custom_background($color)
{
    $css = "
	/* Color Scheme */

	/* Background Color */
	body {
		background-color: {" . $color . "};
	}";

    return $css;
}