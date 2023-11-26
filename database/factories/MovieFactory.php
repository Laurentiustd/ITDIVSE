<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'Cover' => 'harrypotter.jpg',
            'GenreName' => 'Magic',
            'Title' => 'Harry Potter and the Philosopher\'s Stone',
            'Director' => 'Chris Columbus',
            'Description' => 'Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.',
            'Duration' => 210,
            'Rating' => 5,
            'ReleaseDate' => '2001-09-23',
        ];
    }
}
