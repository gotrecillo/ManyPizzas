<?php

namespace App\Graphql\Types;

use Folklore\GraphQL\Support\Type as GraphqlType;
use GraphQL\Type\Definition\Type;

class UserType extends GraphqlType
{

    protected $attributes = [
        'name'        => 'User',
        'description' => 'A user',
    ];

    public function fields()
    {
        return [
            'id'    => [
                'type'        => Type::nonNull(Type::string()),
                'description' => 'The id of the user',
            ],
            'email' => [
                'type'        => Type::string(),
                'description' => 'The email of the user',
            ],
        ];
    }

    protected function resolveEmailField($root)
    {
        return strtolower($root->email);
    }
}