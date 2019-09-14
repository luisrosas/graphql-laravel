<?php

namespace App\GraphQL\Type;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Event;

class EventType extends GraphQLType
{
    protected $attributes = [
        'name' => 'EventType',
        'description' => 'A type',
        'model' => Event::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of event'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'Title of event'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'Description of event'
            ],
            'city' => [
                'type' => GraphQL::type('city'),
                'description' => 'City of event'
            ],
        ];
    }
}