<?php

namespace Tests\Feature;

use App\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;

class AddressTest extends TestCase
{
    use RefreshDatabase;
    use MakesGraphQLRequests;

    protected $faker = null;

    public function test_login_user(){
        $user = factory(User::class)->create();
        Passport::actingAs($user);
        $this->faker = Factory::create();

        return $user;
    }

    public function test_it_can_create_address(): void
    {
        $user = $this->test_login_user();

        $response = $this->graphQL(/** @lang GraphQL */ '
            mutation createAddress($street: String!,
            $colony: String!,
            $country: String!,
            $postcard_code: String,
            $user_id: ID!) {
                createAddress(input: {
                    street: $street,
                    colony: $colony,
                    country: $country,
                    postcard_code: $postcard_code,
                    user_id: $user_id
                }) {
                    id
                }
            }
        ', [
            'street' => $this->faker->name,
            'colony' => $this->faker->address,
            'country' => $this->faker->cityPrefix,
            'postcard_code' => $this->faker->postcode,
            'user_id' => $user->id,
        ]);
    }
}
