<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mail>
 */
class MailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $mail_code_count = 1;

    public function definition(): array
    {

        return [
            //
            'mail_code' => self::$mail_code_count++,
            'input_date' => Carbon::now()->subDays(rand(1, 30)),
            // 'input_date' => Carbon::now(),
            'mail_from' => fake()->company().' - '.fake()->name(),
            'mail_subject' => fake()->catchPhrase(),
            'mail_number' => 'RSDARA/MAIL/'.fake()->randomNumber(4, false).'/'.Carbon::now()->format('m').'/'.Carbon::now()->format('Y'),
            'mail_date' => Carbon::now()->subDays(rand(1, 61)),
            // 'mail_date' => Carbon::now(),
            'document_location' => 'https://bit.ly/'.Str::random(6),
            'mail_type' => fake()->randomElement([1, 2]),
            'status' => '1',
        ];
    }
}
