<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Qrcode
 *
 * @property int $id
 * @property string $code
 * @property bool $status
 * @property bool $isupload
 * @property string $media_id
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Qrcode whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Qrcode whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Qrcode whereIsupload($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Qrcode whereMediaId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Qrcode whereStatus($value)
 */
	class Qrcode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vend_user
 *
 * @property int $id
 * @property string $openid
 * @property bool $isnew
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Vend_user whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Vend_user whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Vend_user whereIsnew($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Vend_user whereOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Vend_user whereUpdatedAt($value)
 */
	class Vend_user extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

