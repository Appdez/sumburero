<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Post
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $Content
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $published_at
 * @property string|null $deleted_at
 * @property int $category_id
 *
 * @property Category $category
 *
 * @package App\Models
 */
class Post extends Model implements HasMedia
{

	use SoftDeletes,InteractsWithMedia,HasSlug,HasTags;
    
	protected $table = 'posts';

	protected $casts = [
		'category_id' => 'int'
	];

	protected $dates = [
		'published_at'
	];

	protected $fillable = [
		'title',
		'content',
		'slug',
		'published_at',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

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
     * Get all of the post's sections.
     */
    public function sections()
    {
        return $this->morphMany(Section::class, 'model');
    }

}
