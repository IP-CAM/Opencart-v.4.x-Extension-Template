<?php

namespace Opencart\System\Helper;

/**
 * Trait SystemLibraryAwareTrait
 *
 * Provides @property annotations for commonly used system libraries and engine classes
 * to improve IDE autocompletion in controllers and other core classes.
 *
 * Note: This trait should only contain docblocks for IDE support, no executable code.
 *
 * @property \Opencart\System\Engine\Loader $load
 * @property \Opencart\System\Library\Document $document
 * @property \Opencart\System\Library\Language $language
 * @property \Opencart\System\Library\Cart\User $user
 * @property \Opencart\System\Library\Request $request
 * @property \Opencart\System\Library\Session $session
 * @property \Opencart\System\Engine\Config $config
 * @property \Opencart\System\Library\Url $url
 * @property \Opencart\System\Library\Response $response
 * @property \Opencart\System\Library\Cache $cache
 * @property \Opencart\System\Library\Encryption $encryption
 * @property \Opencart\System\Library\Event $event
 * @property \Opencart\System\Library\Template $template
 * @property \Opencart\System\Library\Log $log
 * @property \Opencart\System\Library\Upload $upload
 * @property \Opencart\System\Library\DB $db
 */
trait SystemLibraryAwareTrait {}
