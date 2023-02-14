<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class TaskFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const TAG_ID = 'tag_id';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::TAG_ID => [$this, 'tagId'],
        ];
    }

    public function name (Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function description (Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function tagId (Builder $builder, $value)
    {
        $builder->where('tag_id', $value);
    }
}
