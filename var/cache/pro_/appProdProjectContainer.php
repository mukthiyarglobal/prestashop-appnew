<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBlmwyu4\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBlmwyu4/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerBlmwyu4.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerBlmwyu4\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerBlmwyu4\appProdProjectContainer([
    'container.build_hash' => 'Blmwyu4',
    'container.build_id' => '5eab3b5f',
    'container.build_time' => 1697469362,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBlmwyu4');
