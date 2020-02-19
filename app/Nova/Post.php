<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Post extends Resource
{

    public static $model = 'App\\Post';


    public static $title = 'title';


    public static $search = [
        'title'
    ];


    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('标题','title'),
            Textarea::make('详情','description'),
            BelongsTo::make('作者','user',User::class)->hideWhenCreating(),
            MorphOne::make('视频','video',Video::class),
            File::make('上传视频','')

        ];
    }


    public function cards(Request $request)
    {
        return [];
    }


    public function filters(Request $request)
    {
        return [];
    }


    public function lenses(Request $request)
    {
        return [];
    }


    public function actions(Request $request)
    {
        return [];
    }
}
