<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNhf8wdi\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNhf8wdi/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNhf8wdi.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNhf8wdi\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNhf8wdi\appDevDebugProjectContainer([
    'container.build_hash' => 'Nhf8wdi',
    'container.build_id' => 'b262d47a',
    'container.build_time' => 1581974526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNhf8wdi');
