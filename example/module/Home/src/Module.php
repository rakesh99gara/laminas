<?php

namespace Home;

// use Laminas\ModuleManager\Feature\ConfigProviderInterface;

// class Module implements ConfigProviderInterface
// {
//     public function getConfig()
//     {
//         return include __DIR__.'/../config/module.config.php';
//     }
// }

class Module 
{
    public function getConfig() : array
    {
        return include __DIR__.'/../config/module.config.php';
    }
}
