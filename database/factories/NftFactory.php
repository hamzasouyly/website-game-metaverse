<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => 'Nft',
            'Slug' => 'Category-Nft'
        ];
    }
}
