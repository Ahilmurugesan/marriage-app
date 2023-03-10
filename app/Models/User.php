<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $appends = ['roleName', 'userAbilities'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's role name.
     *
     * @return string
     */
    public function getRoleNameAttribute(): string
    {
        return collect($this->getRoleNames())->first();
    }

    /**
     * Get the user's abilities.
     *
     * @return array
     */
    public function getUserAbilitiesAttribute(): array
    {
        return match ($this->getRoleNameAttribute()) {
            'admin' => [
                [
                    'action' => 'manage',
                    'subject' => 'Admin',
                ],
                [
                    'action' => 'read',
                    'subject' => 'Auth',
                ]
            ],
            'vendor' => [
                [
                    'action' => 'manage',
                    'subject' => 'Vendor',
                ],
                [
                    'action' => 'read',
                    'subject' => 'Auth',
                ]
            ],
            'user' => [
                [
                    'action' => 'manage',
                    'subject' => 'User',
                ],
                [
                    'action' => 'read',
                    'subject' => 'Auth',
                ]
            ],
            default => [[
                'action' => 'read',
                'subject' => 'Auth',
            ]],
        };
    }
}
