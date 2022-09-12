<?php

namespace Tests\Unit;


use DTApi\Helpers\TeHelper;
use DTApi\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class CreateOrUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateOrUpdate()
    {
        $userCreateData = [
            'role' => 1,
            'name' => 'Zain',
            'company_id' => 1,
            'department_id',
            'email' => 'zain534102@gmail.com',
            'dob_or_orgid' => '1997-12-23',
            'phone' => '03021859108',
            'mobile' => '03021859108',
            'password' => "Test@123"
        ];
        $userUpdateData = [
            'name' => 'Zain Ali',
            'company_id' => 2,
            'department_id' => 2,
            'dob_or_orgid' => '1997-12-23',
            'password' => "Test@123",
        ];
        $userRepository = new UserRepository(new User());
        //use case 1 by passing without id
        $userRepository->createOrUpdate(null, $userCreateData);
        $this->assertDatabaseHas(
            'users',
            ['email' => 'zain534102@gmail.com', 'name' => 'Zain', 'dob_or_orgid' => '1997-12-23']
        );
        //user case 2 by passing id
        $userRepository->createOrUpdate(1, $userUpdateData);
        $this->assertDatabaseHas('users', ['name' => 'Zain Ali', 'company_id' => '2', 'department_id' => 2]);
    }
}
