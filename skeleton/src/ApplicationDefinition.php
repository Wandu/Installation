<?php
namespace WanduSkeleton;

use Wandu\Foundation\Contracts\DefinitionInterface;

class ApplicationDefinition implements DefinitionInterface 
{
    /**
     * {@inheritdoc}
     */
    public function configs()
    {
        return require __DIR__ . '/../app/config.php';
    }

    /**
     * {@inheritdoc}
     */
    public function providers()
    {
        return require __DIR__ . '/../app/providers.php';
    }
}
