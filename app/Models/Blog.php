<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'table_of_contents',
        'toc_auto',
        'faq_items',
        'faq_title',
        'faq_color',
        'thumbnail',
        'thumbnail_alt',
        'banner_image',
        'og_image',
        'category_id',
        'author_id',
        'status',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'focus_keyword',
        'canonical_url',
        'robots',
        'schema_type',
        'og_title',
        'og_description',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'is_featured',
        'allow_index',
        'allow_comments',
        'published_at',
        'scheduled_at',
        'view_count',
        'reading_time',
        'word_count',
        'sort_order',
    ];

    protected $casts = [
        'table_of_contents' => 'array',
        'toc_auto' => 'boolean',
        'faq_items' => 'array',
        'is_featured' => 'boolean',
        'allow_index' => 'boolean',
        'allow_comments' => 'boolean',
        'published_at' => 'datetime',
        'scheduled_at' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryBlog::class, 'category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
