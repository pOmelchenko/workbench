<?php

namespace App;

class Say
{
    public function hello(string $name): string
    {
        $name = ucfirst($name);

        return 'Hello ' . $name;
    }
}
