<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'name',
        'surname',
        'phone',
        'name_company',
        'nip',
        'kraz',
        'voivodeship',
        'city',
        'street',
        'house_number',
        'office_number',
        'postal_code',
        'description',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    # получение роли пользователя
    public function getRole()
    {
        if ($this->role) {
            return $this->role;
        }
        return null;
    }

    # получение Имя Фамилия пользователя
    public function getFullName()
    {
        if ($this->name && $this->surname) {
            return "{$this->name} {$this->surname}";
        }
        return null;
    }

    # получение e-mail пользователя
    public function getEmail()
    {
        if ($this->email) {
            return $this->email;
        }
        return null;
    }

    # получение имени пользователя
    public function getName()
    {
        if ($this->name) {
            return $this->name;
        }
        return null;
    }

    # получение фамилии пользователя
    public function getSurname()
    {
        if ($this->surname) {
            return $this->surname;
        }
        return null;
    }

    # получение телефона пользователя
    public function getPhone()
    {
        if ($this->phone) {
            return $this->phone;
        }
        return null;
    }

    # получение название фирмы
    public function getNameCompany()
    {
        if ($this->name_company) {
            return $this->name_company;
        }
        return null;
    }

}
