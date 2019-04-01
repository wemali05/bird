<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
   
    public function a_user_can_create_a_project(){
        $this->post('/projects', [

        ]);

    }
}
