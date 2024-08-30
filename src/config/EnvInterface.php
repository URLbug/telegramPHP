<?php

namespace config;

/**
 * Интерфейс для конфигурации файлов
 */
interface EnvInterface
{
    function get(string $name): mixed;
    function set(string $name,  mixed $data): EnvInterface;
}