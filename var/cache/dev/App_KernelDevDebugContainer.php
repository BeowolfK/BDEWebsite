<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQccJP41\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQccJP41/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQccJP41.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQccJP41\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQccJP41\App_KernelDevDebugContainer([
    'container.build_hash' => 'QccJP41',
    'container.build_id' => '190c0a78',
    'container.build_time' => 1651583890,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQccJP41');
