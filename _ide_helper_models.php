<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Addon
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @property-read mixed $price_for_human
 * @method static \Database\Factories\AddonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereUpdatedAt($value)
 */
	class Addon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $id
 * @property int $member_id
 * @property int $vehicle_id
 * @property string $pickup_location
 * @property \Illuminate\Support\Carbon $pickup_date
 * @property string $dropoff_location
 * @property \Illuminate\Support\Carbon $dropoff_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Member $member
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Member[] $members
 * @property-read int|null $members_count
 * @property-read \App\Models\Vehicle $vehicle
 * @method static \Database\Factories\BookFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDropoffDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDropoffLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePickupDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePickupLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereVehicleId($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bookaddon
 *
 * @property int $id
 * @property int $book_id
 * @property int $addon_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Addon $addon
 * @property-read \App\Models\Book $book
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @method static \Database\Factories\BookaddonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon whereAddonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookaddon whereUpdatedAt($value)
 */
	class Bookaddon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $name
 * @property int $vehicle_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Vehicle $vehicle
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Database\Factories\FeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereVehicleId($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Member
 *
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property int $phone_no
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\MemberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUserId($value)
 */
	class Member extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vehicle
 *
 * @property int $id
 * @property string $name
 * @property float $weekly_fee
 * @property float $daily_fee
 * @property string $transmission
 * @property int $capacity
 * @property int $baggage_space
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $daily_fee_for_human
 * @property-read mixed $status_color
 * @property-read mixed $status_name
 * @property-read mixed $week_fee_for_human
 * @method static \Database\Factories\VehicleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBaggageSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDailyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereTransmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereWeeklyFee($value)
 */
	class Vehicle extends \Eloquent {}
}

