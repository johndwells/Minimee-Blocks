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
 * Our base plugin for Blocks
 */
class MinimeePlugin extends BasePlugin
{
	/**
	 * Return Plugin Name (for CP)
	 *
	 * @return String
	 */
	public function getName()
	{
		return Blocks::t('Minimee');
	}

	// -------------------------

	/**
	 * Return Version
	 *
	 * @return String
	 */
	public function getVersion()
	{
		return '1.0';
	}

	// -------------------------

	/**
	 * Return Developer info
	 *
	 * @return String
	 */
	public function getDeveloper()
	{
		return 'John D Wells';
	}

	// -------------------------

	/**
	 * Return Developer link
	 *
	 * @return String
	 */
	public function getDeveloperUrl()
	{
		return 'http://johndwells.com';
	}

	// -------------------------

	/**
	 * Whether or not plugin has CP
	 *
	 * @return Bool
	 */
	public function hasCpSection()
	{
		return true;
	}

	// -------------------------

	/**
	 * Register our Minimee_Twig_Extension
	 *
	 * @return Twig_Extension
	 */
	public function hookAddTwigExtension()
	{
		// require our Minimee_Twig_Extension class definition
		require_once blx()->path->getPluginsPath() . 'minimee/twig_extensions/Minimee_Twig_Extension.php';

		// return instance of 
		return new Minimee_Twig_Extension();
	}

	// -------------------------
}