<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Crafting
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $discordID
 * @property int|null $weaponsmithing
 * @property int|null $armoring
 * @property int|null $engineering
 * @property int|null $jewelcrafting
 * @property int|null $arcana
 * @property int|null $cooking
 * @property int|null $furnishing
 *
 * @property Crafter $crafter
 *
 * @package App\Models
 */
class Crafting extends Model
{
	protected $table = 'crafting';
	public $incrementing = false;

	protected $casts = [
		'discordID' => 'int',
		'weaponsmithing' => 'int',
		'armoring' => 'int',
		'engineering' => 'int',
		'jewelcrafting' => 'int',
		'arcana' => 'int',
		'cooking' => 'int',
		'furnishing' => 'int'
	];

	protected $fillable = [
		'weaponsmithing',
		'armoring',
		'engineering',
		'jewelcrafting',
		'arcana',
		'cooking',
		'furnishing'
	];

	public function crafter()
	{
		return $this->belongsTo(Crafter::class, 'discordID');
	}
}
