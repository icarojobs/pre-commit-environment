<?php

declare(strict_types=1);

it('tests the home page')->get('/')
    ->assertOk();
