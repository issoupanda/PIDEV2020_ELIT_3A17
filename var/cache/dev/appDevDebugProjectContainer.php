<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9y9yjcq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9y9yjcq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9y9yjcq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9y9yjcq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container9y9yjcq\appDevDebugProjectContainer([
    'container.build_hash' => '9y9yjcq',
    'container.build_id' => '49729cce',
    'container.build_time' => 1582023803,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9y9yjcq');
