<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            if (Auth::check() === false) {
                $event->menu->add([
                    'text' => '',
                    'url' => 'login',
                    'icon' => 'fas fa-sign-in-alt',
                    'topnav_right' => true,
                ]);
            }

            foreach (config('tracksid.pantau_provinsi') as $key => $val) {
                $event->menu->addIn('khusus', [
                    'text' => $val,
                    'url' => "sesi/provinsi/{$key}",
                    'active' => session('provinsi.kode_prov') == $key ? true : false,
                ]);
            }
        });
    }
}
