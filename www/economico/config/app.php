<?php

return [

    'name' => env('APP_NAME', 'Secretaría de Desarrollo Económico y Emprendedor'),

    //'env' => env('APP_ENV', 'local'),

    'env' => env('APP_ENV', 'production'),

    'debug' => env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://economico.com.ar/'),

    'asset_url' => env('ASSET_URL', 'http://economico.com.ar/'),

    'timezone' => 'America/Argentina/Buenos_Aires',

    'locale' => 'es',

    'fallback_locale' => 'es',

    'faker_locale' => 'es_AR',

    'key' => env('APP_KEY', 'base64:N9bOM8lcTPjGKkQ7uZ+LXfuVm74Hz0UCZPsAlzHi5W0='),

    'cipher' => 'AES-256-CBC',

    'debug_blacklist' => [
        '_COOKIE' => array_keys($_COOKIE),
        '_SERVER' => array_keys($_SERVER),
        '_ENV' => array_keys($_ENV),
    ],

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

        /*
         * Providers Personales
         */
        Collective\Html\HtmlServiceProvider::class,
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
        Laracasts\Flash\FlashServiceProvider::class,
        Barryvdh\DomPDF\ServiceProvider::class,
        DaveJamesMiller\Breadcrumbs\BreadcrumbsServiceProvider::class,
        Intervention\Image\ImageServiceProvider::class,
        Yajra\DataTables\DataTablesServiceProvider::class,
        Spatie\Permission\PermissionServiceProvider::class,
        Biscolab\ReCaptcha\ReCaptchaServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

        /*
         * Aliases Personales
         */
        'Form'  => Collective\Html\FormFacade::class,
        'Html'  => Collective\Html\HtmlFacade::class,
        'PDF'   => Barryvdh\DomPDF\Facade::class,
        'Breadcrumbs' => DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::class,
        'Image' => Intervention\Image\Facades\Image::class,
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,
        'ReCaptcha' => Biscolab\ReCaptcha\Facades\ReCaptcha::class,
        'Carbon' => 'Carbon\Carbon'
    ],

];