<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Api\UserTypeController
 */
class UserTypeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $userTypes = UserType::factory()->count(3)->create();

        $response = $this->get(route('user-type.index'));

        $response->assertOk();
        $response->assertViewIs('userType.index');
        $response->assertViewHas('userTypes');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $userType = UserType::factory()->create();

        $response = $this->get(route('user-type.show', $userType));

        $response->assertOk();
        $response->assertViewIs('userType.show');
        $response->assertViewHas('userType');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Api\UserTypeController::class,
            'update',
            \App\Http\Requests\Api\UserTypeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $userType = UserType::factory()->create();
        $user = User::factory()->create();
        $role = $this->faker->word;
        $description = $this->faker->text;

        $response = $this->put(route('user-type.update', $userType), [
            'user_id' => $user->id,
            'role' => $role,
            'description' => $description,
        ]);

        $userType->refresh();

        $response->assertRedirect(route('userType.index'));
        $response->assertSessionHas('userType.id', $userType->id);

        $this->assertEquals($user->id, $userType->user_id);
        $this->assertEquals($role, $userType->role);
        $this->assertEquals($description, $userType->description);
    }
}
