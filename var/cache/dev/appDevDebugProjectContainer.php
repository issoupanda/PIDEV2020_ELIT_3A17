<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHigqegx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHigqegx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHigqegx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHigqegx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHigqegx\appDevDebugProjectContainer([
    'container.build_hash' => 'Higqegx',
    'container.build_id' => 'a0a8aa00',
    'container.build_time' => 1581369242,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHigqegx');
