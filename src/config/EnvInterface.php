<?php

namespace config;

/**
 * Интерфейс для конфигурации файлов
 */
interface EnvInterface
{
    function get(string $name);
    function set(string $name, $data): EnvInterface;
}