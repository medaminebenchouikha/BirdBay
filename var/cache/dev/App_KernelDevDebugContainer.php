<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEd7U6dq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEd7U6dq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEd7U6dq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEd7U6dq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEd7U6dq\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ed7U6dq',
    'container.build_id' => '26c4d679',
    'container.build_time' => 1614420393,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEd7U6dq');
