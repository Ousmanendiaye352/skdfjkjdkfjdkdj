<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXVOJ4zE\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXVOJ4zE/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXVOJ4zE.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXVOJ4zE\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerXVOJ4zE\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'XVOJ4zE',
    'container.build_id' => '5eb97418',
    'container.build_time' => 1529976139,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXVOJ4zE');
