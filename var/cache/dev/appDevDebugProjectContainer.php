<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNcdn4ak\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNcdn4ak/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNcdn4ak.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNcdn4ak\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNcdn4ak\appDevDebugProjectContainer([
    'container.build_hash' => 'Ncdn4ak',
    'container.build_id' => '212fa658',
    'container.build_time' => 1582659863,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNcdn4ak');
