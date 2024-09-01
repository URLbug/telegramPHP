<?php

namespace config;

class Env implements EnvInterface
{
    private $env;

    function __construct()
    {
        $this->env = parse_ini_file('.env');
    }

    function get(string $name)
    {
        return $this->env[$name];
    }

    function set(string $name, $data): EnvInterface
    {
        $this->env[$name] = $data;

        return $this;
    }
}