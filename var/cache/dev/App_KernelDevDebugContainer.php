<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUqx3awU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUqx3awU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUqx3awU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUqx3awU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUqx3awU\App_KernelDevDebugContainer([
    'container.build_hash' => 'Uqx3awU',
    'container.build_id' => 'e0913f4d',
    'container.build_time' => 1587374010,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUqx3awU');
