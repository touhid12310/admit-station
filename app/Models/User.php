<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function UserSocialProfiles()
    {
        return $this->hasOne(UserSocialProfiles::class);
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return Str::endsWith($this->email, '@admin.com');
    }
}
