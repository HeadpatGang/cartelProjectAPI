<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Refining
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $discordID
 * @property int|null $smelting
 * @property int|null $woodworking
 * @property int|null $leatherworking
 * @property int|null $weaving
 * @property int|null $stonecutting
 *
 * @property Crafter $crafter
 *
 * @package App\Models
 */
class Refining extends Model
{
	protected $table = 'refining';
	public $incrementing = false;

	protected $casts = [
		'discordID' => 'int',
		'smelting' => 'int',
		'woodworking' => 'int',
		'leatherworking' => 'int',
		'weaving' => 'int',
		'stonecutting' => 'int'
	];

	protected $fillable = [
		'smelting',
		'woodworking',
		'leatherworking',
		'weaving',
		'stonecutting'
	];

	public function crafter()
	{
		return $this->belongsTo(Crafter::class, 'discordID');
	}
}
