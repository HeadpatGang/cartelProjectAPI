<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gathering
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $discordID
 * @property int|null $logging
 * @property int|null $mining
 * @property int|null $fishing
 * @property int|null $harvesting
 * @property int|null $skinning
 *
 * @property Crafter $crafter
 *
 * @package App\Models
 */
class Gathering extends Model
{
	protected $table = 'gathering';
	public $incrementing = false;

	protected $casts = [
		'discordID' => 'int',
		'logging' => 'int',
		'mining' => 'int',
		'fishing' => 'int',
		'harvesting' => 'int',
		'skinning' => 'int'
	];

	protected $fillable = [
		'logging',
		'mining',
		'fishing',
		'harvesting',
		'skinning'
	];

	public function crafter()
	{
		return $this->belongsTo(Crafter::class, 'discordID');
	}
}
