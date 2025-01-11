<?php

declare(strict_types=1);

return [
    'Stadium' => \DI\create('\Boatrace\Venture\Project\Stadium')->constructor(
        \DI\get('MainStadium')
    ),
    'MainStadium' => function ($container) {
        return $container->get('\Boatrace\Venture\Project\MainStadium');
    },
];
