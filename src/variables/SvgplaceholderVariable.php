<?php
/**
 * svgplaceholder plugin for Craft CMS 3.x
 *
 * SVG Placeholder
 *
 * @link      https://matthewblode.com
 * @copyright Copyright (c) 2017 Matthew Blode
 */

namespace mblode\svgplaceholder\variables;

use mblode\svgplaceholder\Svgplaceholder;

use Craft;

/**
 * svgplaceholder Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.svgplaceholder }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Matthew Blode
 * @package   Svgplaceholder
 * @since     1.0.0
 */
class SvgplaceholderVariable
{
    public function generate($dimensions) {
		$src = '<svg width="'.$dimensions['width'].'" height="'.$dimensions['height'].'" viewBox="0 0 '.$dimensions['width'].' '.$dimensions['height'].'" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h108v100H0z" fill="none"/></svg>';
    return 'data:image/svg+xml;base64,'.base64_encode($src); 
	}
}
