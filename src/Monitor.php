<?php

namespace Hogosha\Monitor;

/**
 * @author Guillaume Cavana <guillaume.cavana@gmail.com>
 */
class Monitor
{
    /**
     * @const VERSION Version of the application
     */
    const VERSION = '@package_version@';

    /**
     * @const CONFIG_FILENAME Filename of the configuration file
     */
    const CONFIG_FILENAME = '.hogosha-monitor.yml';

    /**
     * @const RENDERER_TYPE_TABLE Table formatter
     */
    const RENDERER_TYPE_TABLE = 'table';

    /**
     * @const RENDERER_TYPE_LIST List formatter
     */
    const RENDERER_TYPE_LIST = 'list';
}
