<?php

namespace App\Providers;

use App\Data\Toast\ToastType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Console\CliDumper;
use Illuminate\Foundation\Http\HtmlDumper;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;


/**
 * @method RedirectResponse info(string $body)
 * @method RedirectResponse success(string $body)
 * @method RedirectResponse warning(string $body)
 * @method RedirectResponse error(string $body)
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        HtmlDumper::dontIncludeSource();
        CliDumper::dontIncludeSource();

        Validator::excludeUnvalidatedArrayKeys();
        Model::shouldBeStrict();
        Model::unguard();
        Relation::enforceMorphMap([
            'user' => User::class,
        ]);
        Date::use(CarbonImmutable::class);

        // ToasterMacros
        RedirectResponse::macro('toast', function (
            ToastType $type,
            string $body,
            ?string $description
        ){
            session()->flash('toast', [
                'type' => $type,
                'body' => $body,
                'description' => $description
            ]);

            return $this;
        });


        /** @var RedirectResponse $this */
        RedirectResponse::macro(
            'info',
            fn(string $body, ?string $description = '') => $this->toast(ToastType::info, $body, $description)
        );

        RedirectResponse::macro(
            'success',
            fn(string $body, ?string $description = '') => $this->toast(ToastType::success, $body, $description)
        );

        RedirectResponse::macro(
            'warning',
            fn(string $body, ?string $description = '') => $this->toast(ToastType::warning, $body, $description)
        );

        RedirectResponse::macro(
            'error',
            fn(string $body, ?string $description = '') => $this->toast(ToastType::error, $body, $description)
        );

    }
}
