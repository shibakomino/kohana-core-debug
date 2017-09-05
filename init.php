<?php
/**
 * Enable xdebug parameter collection in development mode to improve fatal stack traces.
 */
if (extension_loaded('xdebug')) {
  ini_set('xdebug.collect_params', 3);
}

/*
 * add debug message in response body.
 *         if (\Kohana::getEnvironment() == \Kohana::DEVELOPMENT) {
            $result .= self::append_debug_message($request, $response);
        }

    private static function append_debug_message(\Request $request, $response)
    {
        if ($request->param('format') == 'php') {
            $debug_msg = $response->headers('X-D3CMS');
            if (!empty($debug_msg)) {
                return PHP_EOL . '<!-- ' . $debug_msg . ' -->';
            }
        }
    }
*/

/*kohana exception
  public static function text(Exception $e)
  {

    if(class_exists("Debug")){
      return sprintf('%s [ %s ]: %s ~ %s [ %d ]',
        get_class($e), $e->getCode(), strip_tags($e->getMessage()), Debug::path($e->getFile()), $e->getLine());
    }

    return sprintf('%s [ %s ]: %s ~ %s [ %d ]',
      get_class($e), $e->getCode(), strip_tags($e->getMessage()), $e->getFile(), $e->getLine());
  }
*/