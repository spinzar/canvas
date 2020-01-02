<?php

namespace Laravie\Canvas\Presets;

class Laravel extends Preset
{
    /**
     * Preset name.
     */
    public function name(): string
    {
        return 'laravel';
    }

    /**
     * Get the path to the source directory.
     */
    public function sourcePath(): string
    {
        return \sprintf(
            '%s/%s',
            $this->basePath(),
            $this->config['src'] ?? 'app'
        );
    }

    /**
     * Preset namespace.
     */
    public function rootNamespace(): string
    {
        return $this->config['namespace'] ?? 'App';
    }
}
