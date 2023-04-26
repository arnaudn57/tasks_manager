<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaintenanceConvert>
 */
class MaintenanceConvertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'websiteName' => 'https://www.google.com',
            'listConvert' => '----- Pharmacie Meunier -----
                              extension Colissimo shipping methods for WooCommerce ||
                              extension Enable Media Replace ||
                              extension Really Simple SSL ||
                              extension Redirection ||
                              extension WooCommerce ||
                              extension Paiements WooCommerce ||
                              extension WP Rocket ||
                              extension Yoast SEO ||
                              traduction de Really Simple SSL ||
                              traduction de WooCommerce ||
                              traduction de Yoast SEO ||
                              traduction de WooCommerce Payments ||
                              theme Twenty Twenty-Three ||
                              theme Divi ||',
          'user_id' => 1,
        ];
    }
}
