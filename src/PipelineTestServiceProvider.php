<?php

declare(strict_types=1);

namespace Webplo\PipelineTestPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PipelineTestServiceProvider extends ServiceProvider
{
    public const VERSION = '1.0.0';

    public function boot(): void
    {
        Route::get('/pipeline-test-version', fn () => response()->json([
            'package_version' => self::VERSION,
        ]));
    }
}
