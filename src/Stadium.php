<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project;

use DI\Container;
use DI\ContainerBuilder;
use Illuminate\Support\Collection;

/**
 * @author shimomo
 */
class Stadium
{
    /**
     * @var \Boatrace\Venture\Project\Stadium
     */
    protected static Stadium $instance;

    /**
     * @var \DI\Container
     */
    protected static Container $container;

    /**
     * @param  \Boatrace\Venture\Project\MainStadium  $stadium
     * @return void
     */
    public function __construct(protected MainStadium $stadium){}

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return \Illuminate\Support\Collection|null
     */
    public function __call(string $name, array $arguments): ?Collection
    {
        return $this->stadium->$name(...$arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return \Illuminate\Support\Collection|null
     */
    public static function __callStatic(string $name, array $arguments): ?Collection
    {
        return self::getInstance()->$name(...$arguments);
    }

    /**
     * @return \Boatrace\Venture\Project\Stadium
     */
    public static function getInstance(): Stadium
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Stadium');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;
        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');
        return $builder->build();
    }
}
