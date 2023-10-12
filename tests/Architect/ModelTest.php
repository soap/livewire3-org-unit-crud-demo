<?php

test('model must not suffix by Model', function()
{
    expect('App\Models')
        ->not->toHaveSuffix('Model');
});