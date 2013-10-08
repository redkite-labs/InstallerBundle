<?php
/*
 * This file is part of the RedKite CMS InstallerBundle and it is distributed
 * under the MIT LICENSE. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) RedKiteCms <webmaster@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 *
 * @license    MIT LICENSE
 *
 */

namespace RedKiteCms\InstallerBundle\Core\DsnBuilder;

/**
 * Implements the object to generate the dsn for a mysql database
 *
 * @author RedKite Labs <webmaster@redkite-labs.com>
 */
class MysqlDsnBuilder extends Base\BaseDsnBuilder
{
    /**
     * {@inheritdoc}
     */
    public function configureDsn()
    {
        return $this->configureBaseDsn() . ';dbname=' . $this->options["database"];
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureBaseDsn()
    {
        return sprintf("%s:host=%s", $this->options["driver"], $this->options["host"]);        
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureParametrizedDsn()
    {
        return '%rkcms_database_driver%:host=%rkcms_database_host%;dbname=%rkcms_database_name%';        
    }
}