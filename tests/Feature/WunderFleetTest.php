<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Testing\TestResponse;

class WunderFleetTest extends TestCase
{

    const TVMAZE_QUERY = 'Deadwood';


    /**
     * A basic invalid route test
     *
     * @return void
     */
    public function test_a_invalid_route()
    {
        $response = $this->get('/customer/create-step-unknown');
        $response->assertSee(404);
    }

    /**
     * This menthod will check the route with GET
     *
     * @return void
     */
    public function test_a_valid_route()
    {
        $response = $this->get('/customer/create-step-one');
        $response->assertSuccessful();
    }

    /**
     * This method will check route by POST
     *
     * @return void
     */
    public function test_a_route_by_put()
    {
        $response = $this->put('/customer/create-step-one');
        $response->assertSee('The PUT method is not supported for this route');
    }

    /**
     * This method check our route along data returned
     * and its status as well
     * @return void
     */
    public function test_post_data_from_step_one()
    {

        $credentials = array(
            'firstName' => 'wronguser',
            'lastName' => 'wrongpass',
            '_token' => csrf_token()
        );

        //case:1 Test check status code
        $response = $this->post('/customer/create-step-one',$credentials);

        //case:2 check if user is sent to step2
        $response->assertSee('customer/create-step-two');

        //case:3 should check response code 302 is returned
        $response->assertStatus(302);

    }
}
