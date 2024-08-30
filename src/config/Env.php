<?php

namespace config;

final class Env implements EnvInterface
{
    private $env;

    function __construct()
    {
        $this->env = parse_ini_file('.env');
    }

    function get(string $name): mixed
    {
        return $this->env[$name];
    }

    function set(string $name, mixed $data): EnvInterface
    {
        $this->env[$name] = $data;

        return $this;
    }
}