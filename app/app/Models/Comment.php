<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;


class Comment extends Model //v
{
    use HasFactory
    , AsSource
    , Filterable
    , Attachable ;
}
