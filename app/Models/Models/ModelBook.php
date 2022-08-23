<?php
namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models\ModelAuthor;


class ModelBook extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $primaryKey = 'id';
    protected $fillable = ['title','id_author','edition','synopsis','pages','price'];

    public function relAuthors(){
        return $this->hasOne('App/Models/Models/ModelAuthor','id','id_author');
    }

    public function author(){
        $author = ModelAuthor::find($this->attributes['id_author']);
        return $author['name'];
    }
}

