<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	App::import('Lib', 'routes/SubDomainPrefixRoute'); 
	
	Router::parseExtensions('rss','xml'); 
	
	Router::connect ('/sitemap', array('controller' => 'sitemaps', 'action' => 'index')); 
	Router::connect ('/css', array('controller'=>'sites', 'action'=>'view_css'));
	Router::connect ('/robots.txt', array('controller'=>'pages', 'action' => 'display', 'robots', 'layout' => 'txt'));
	Router::connect ('/:str_page/:str_souspage/:str_soussouspage/*', array('controller'=>'sites', 'action'=>'view'),array('pass' => array('str_page','str_souspage','str_soussouspage')));
	
	// Router::connect ('/sites/save/:id', array('controller'=>'sites', 'action'=>'save'),array('pass' => array('id')));
	// Router::connect ('/:str_url/admin/:str_page/:str_souspage/:str_soussouspage', array('controller'=>'sites', 'action'=>'edit'),array('pass' => array('str_url','str_page','str_souspage','str_soussouspage')));
	
?>
