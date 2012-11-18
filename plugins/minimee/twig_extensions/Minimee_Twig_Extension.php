<?php
namespace Blocks;

/**
 * Minimee by John D Wells
 *
 * @package   Minimee
 * @author    John D Wells
 * @copyright Copyright (c) 2012, John D Wells
 * @link      http://johndwells.com
 */

/**
 * Custom extension
 */
class Minimee_Twig_Extension extends \Twig_Extension
{
	/**
	 * Return filter(s) to add to environment
	 *
	 * @return Array
	 */
	public function getFilters()
	{
		$options = array(
			'is_safe' => array('all') // so that our returned content isn't automatically escaped
		);

		return array(
			'minimee' => new \Twig_Filter_Method($this, 'minimeeFilter', $options)
		);
	}

	// -------------------------

	/**
	 * Our 'minimee' filter
	 *
	 * @param String our template tagdata
	 * @param String
	 * @param Array
	 * @return String
	 */
	public function minimeeFilter($tagdata, $type, $args = array())
	{
		// Right now we aren't doing anything.
		// So let's append some HTML comments to prove that we've been here
		return $tagdata . '<!-- I can haz Minimee.' . $type . '(' . print_r($args, true) . ') -->';
	}

	// -------------------------

	/**
	 * Return name of Extension
	 *
	 * @return String
	 */
	public function getName()
	{
		return 'Minimee_Twig_Extension';
	}

	// -------------------------
}
