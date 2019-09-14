<?php

namespace App\GraphQL\Type;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\City;

class CityType extends GraphQLType
{
    protected $attributes = [
        'name' => 'CityType',
        'description' => 'A type',
        'model' => City::class,
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of city'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'Name of city'
            ],
            'events' => [
                'type' => GraphQL::type('event'),
                'description' => 'Events of the city'
            ],
        ];
    }
}