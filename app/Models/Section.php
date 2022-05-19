<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;

/**
 * Class Section
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $model_type
 * @property int $model_id
 * @property string|null $content
 *
 * @package App\Models
 */
class Section extends Model implements HasMedia
{
    use InteractsWithMedia,HasSlug;
	protected $table = 'sections';

	protected $casts = [
		'model_id' => 'int'
	];

	protected $fillable = [
		'title',
		'slug',
		'model_type',
		'model_id',
		'content'
	];

     /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

        /**
     * Get the parent sectionable model for all models.
     */
    public function sectionable()
    {
        return $this->morphTo();
    }


        /**
     * Get all of the post's sections.
     */
    public function sections()
    {
        return $this->morphMany(Section::class, 'model');
    }
}
