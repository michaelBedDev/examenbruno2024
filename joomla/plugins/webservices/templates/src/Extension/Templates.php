<?php

/**
 * @package     Joomla.Templates
 * @subpackage  Webservices.templates
 *
 * @copyright   (C) 2019 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Plugin\WebServices\Templates\Extension;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Router\ApiRouter;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Web Services adapter for com_templates.
 *
 * @since  4.0.0
 */
final class Templates extends CMSPlugin
{
    /**
     * Registers com_templates's API's routes in the application
     *
     * @param   ApiRouter  &$router  The API Routing object
     *
     * @return  void
     *
     * @since   4.0.0
     */
    public function onBeforeApiRoute(&$router)
    {
        $router->createCRUDRoutes(
            'v1/templates/styles/site',
            'styles',
            ['component' => 'com_templates', 'client_id' => 0]
        );

        $router->createCRUDRoutes(
            'v1/templates/styles/administrator',
            'styles',
            ['component' => 'com_templates', 'client_id' => 1]
        );
    }
}
