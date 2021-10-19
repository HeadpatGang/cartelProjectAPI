<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Crafter
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $discordID
 * @property string $discordName
 * @property string $playerName
 * @property string $timeOfContact
 * @property string $materialsOfUse
 * @property string $crafterPronouns
 *
 * @property Crafting $crafting
 * @property Gathering $gathering
 * @property Refining $refining
 *
 * @package App\Models
 */
class Crafter extends Model
{
	protected $table = 'crafters';
	protected $primaryKey = 'discordID';
	public $incrementing = false;

	protected $casts = [
		'discordID' => 'int'
	];

	protected $fillable = [
        'discordID',
		'discordName',
		'playerName',
		'timeOfContact',
		'materialsOfUse',
		'crafterPronouns'
	];

	public function crafting()
	{
		return $this->hasOne(Crafting::class, 'discordID');
	}

	public function gathering()
	{
		return $this->hasOne(Gathering::class, 'discordID');
	}

	public function refining()
	{
		return $this->hasOne(Refining::class, 'discordID');
	}
}
