<?php
/*
 * Extra Debugging Options Twig Extension Component
 *
 * Copyright (C) Boris Đemrovski <djboris88@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Djboris88\Timber;

use Ajgl\Twig\Extension\BreakpointExtension;
use Djboris88\Twig\Extension\CommentedIncludeExtension;
use HelloNico\Twig\DumpExtension;

/**
 * @param $twig \Twig_Environment;
 *
 * @return \Twig_Environment
 */
function add_debugging_extensions($twig)
{
	$twig->addExtension(new CommentedIncludeExtension());
	$twig->addExtension(new DumpExtension());
	$twig->addExtension(new BreakpointExtension());

	return $twig;
}

if (defined('WP_DEBUG') && WP_DEBUG && function_exists('add_filter')) {
	add_filter('timber/loader/twig', sprintf('%s\\add_debugging_extensions', __NAMESPACE__));

	/**
	 * Adding a second filter to cover the `Timber::render()` case, when the
	 * template is not loaded through the `include` tag inside a twig file
	 */
	add_filter( 'timber/output', function( $output, $data, $file ) {
		return "\n<!-- Begin output of '" . $file . "' -->\n" . $output . "\n<!-- / End output of '" . $file . "' -->\n";
	}, 10, 3 );
}
