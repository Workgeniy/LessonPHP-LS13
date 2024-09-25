<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use App\Models\Post;
use Orchid\Crud\ResourceRequest; 
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\Sight;

class CommentResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Comment::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Quill::make('text')->title('Text')->rows(3),
            Select::make('post_id')->title('Post')->fromModel(Post::class,'text'),
            Select::make('like')->title('Like')
            ->options(
                array_combine(
                    range (1, 10), 
                    range(1, 10)
                    )
                ),
            Select::make('dislike')->title('Dislike')
            ->options(
                array_combine(
                    range (1, 10), 
                    range(1, 10)
                    )
                )       
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
            TD::make('text','Post')
            ->render(function($post){
                return $post->post_id;}),
            TD::make('like', 'Like'),
            TD::make('dislike', 'Dislike'), 
            TD::make('text', 'Text')
            ->render(function($comment){               
                 return strip_tags($comment->text);})
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [            
        Sight::make('id', 'Id'),
        Sight::make('created_at', 'Created')->render(function($comment){                
                return $comment->created_at->format('Y m d H:i');
        }),            
        Sight::make('updated_at', 'Updated')->render(function($comment){
            return $comment->updated_at->format('Y m d H:i');            
        }),           
        Sight::make('text', 'Text')->render(function($comment){               
            return strip_tags($comment->text);})          
        ,
        
        Sight::make('like', 'Like'),
        Sight::make('dislike', 'Dislike') 
    ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    public function save(ResourceRequest $request, Model $model):void{
        $model->user_id = auth()->user()->id;

        parent::save($request, $model);
        
    }
}
