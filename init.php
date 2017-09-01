<?php
/**
 * Enable xdebug parameter collection in development mode to improve fatal stack traces.
 */
if (Kohana::getEnvironment() == Kohana::DEVELOPMENT AND extension_loaded('xdebug')) {
  ini_set('xdebug.collect_params', 3);
}