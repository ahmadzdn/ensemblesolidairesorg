<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIvT8xO6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIvT8xO6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIvT8xO6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIvT8xO6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIvT8xO6\App_KernelDevDebugContainer([
    'container.build_hash' => 'IvT8xO6',
    'container.build_id' => '29603677',
    'container.build_time' => 1594296021,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIvT8xO6');
