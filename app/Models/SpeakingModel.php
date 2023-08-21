<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CategoryModel;
use App\Models\LessonsModel;

class SpeakingModel extends Model
{
    use HasFactory;

    protected $table = 'speaking';

    protected $fillable = [ 'category_id', 'lessons_id', 'title', 'content'];


    public function categoryModel(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class);
    }

    public function LessonsModel(): BelongsTo
    {
        return $this->belongsTo(LessonsModel::class);
    }
}
