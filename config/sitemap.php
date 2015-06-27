<?php defined('NEGOCORE') or die('No direct script access.');

/**
 * Skeleton Module
 *
 * @author      Iván Molina Pavana <imp@negocad.mx>
 * @copyright   Copyright (c) 2015, NegoCAD <info@negocad.mx>
 * @version     1.0.0
 */

// --------------------------------------------------------------------------------

/**
 * Navigation config for Module sitemap
 *
 * @filesource
 * @link http://dev.negocad.mx/docs/negocore/navigation
 */
return array(
    array(
        'name' => 'ModuleName',
        'url' => URL::backend('module'), // Menu link
        'priority' => 100, // Left priority
        'icon' => 'globe', // Font-Awesome icon
    )
);