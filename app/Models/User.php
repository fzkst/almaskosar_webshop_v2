<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /**
     * @OA\Schema(
     *    schema="UsersSchema",
     *    @OA\Property(
     *        property="id",
     *        type="integer",
     *        description="Felhasználó azonosítója",
     *        nullable=false,
     *        example="1"
     *    ),
     *    @OA\Property(
     *        property="name",
     *        type="string",
     *        description="Felhasználó neve",
     *        nullable=true,
     *        example="Jakab"
     *    ),
     *    @OA\Property(
     *        property="email",
     *        type="string",
     *        description="Felhasználó email címe",
     *        nullable=false,
     *        format="email",
     *        example="gipszes.jakab@gmail.com"
     *    ),
     *    @OA\Property(
     *        property="email_verified_at",
     *        type="string",
     *        description="Felhasználó email cím ellenőrzésének ideje",
     *        nullable=false,
     *        format="timestamp",
     *        example="2023-03-13 12:10:03"
     *    ),
     *    @OA\Property(
     *        property="password",
     *        type="string",
     *        description="Jelszó",
     *        nullable=false,
     *        example="************"
     *    ),
     *    @OA\Property(
     *        property="last_name",
     *        type="string",
     *        description="Felhasználó vezetékneve",
     *        nullable=true,
     *        example="Gipszes"
     *    ),
     *    @OA\Property(
     *        property="first_name",
     *        type="string",
     *        description="Felhasználó keresztneve",
     *        nullable=true,
     *        example="Jakab"
     *    ),
     *    @OA\Property(
     *        property="postal_code",
     *        type="integer",
     *        description="Felhasználó irányítószáma",
     *        nullable=true,
     *        example="1454"
     *    ),
     *    @OA\Property(
     *        property="city",
     *        type="string",
     *        description="Felhasználó városa",
     *        nullable=true,
     *        example="Budapest"
     *    ),
     *    @OA\Property(
     *        property="address",
     *        type="string",
     *        description="Felhasználó címe",
     *        nullable=true,
     *        example="Lilaakác u. 15."
     *    ),
     *    @OA\Property(
     *        property="phone_number",
     *        type="string",
     *        description="Felhasználó telefonszáma",
     *        nullable=true,
     *        example="+36302124787"
     *    ),
     *    @OA\Property(
     *        property="customer_code",
     *        type="string",
     *        description="Felhasználó vevőkódja",
     *        nullable=false,
     *        example="0"
     *    ),
     *    @OA\Property(
     *        property="admin",
     *        type="integer",
     *        description="Felhasználó jogosultsága",
     *        nullable=false,
     *        example="0"
     *    ),
     *    @OA\Property(
     *        property="remember_token",
     *        type="string",
     *        description="Token",
     *        nullable=true,
     *        example="V6SYqJB1Dp"
     *    ),
     * )
     */
    use HasApiTokens, HasFactory, Notifiable;

    protected $visible = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'last_name',
        'first_name',
        'postal_code',
        'city',
        'address',
        'phone_number',
        'customer_code'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
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
}
