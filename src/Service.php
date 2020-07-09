<?php

namespace Ezyt\Atatus;

use Throwable;

use function extension_loaded;
use function is_scalar;

class Service
{
    const EXTENSION_NAME = 'atatus';

    public function isLoaded(): bool
    {
        return extension_loaded(self::EXTENSION_NAME);
    }

    public function beginTransaction()
    {
        atatus_begin_transaction();
    }

    public function endTransaction()
    {
        atatus_end_transaction();
    }

    public function setTransactionName(string $name)
    {
        atatus_set_transaction_name($name);
    }

    public function ignoreTransaction()
    {
        atatus_ignore_transaction();
    }

    public function addCustomLayer(string $layerName)
    {
        atatus_add_custom_layer($layerName);
    }

    /**
     * @param string $key
     * @param int|float|string|bool $value
     */
    public function addCustomData(string $key, $value)
    {
        if (is_scalar($value)) {
            atatus_add_custom_data($key, $value);
        }
    }

    public function notifyException(Throwable $exception)
    {
        atatus_notify_exception($exception->getMessage());
    }
}
