<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Welcome to Nowted App.',
            'body' => 'A simple note-taking application. This app allows you to create, edit, and delete notes easily. Enjoy your note-taking experience!',
        ];
    }
}
