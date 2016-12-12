<?php

namespace AppSpec;

use App\Bar;
use App\Foo;

describe('Bar', function () {

    describe('test()', function () {

        it('return "test"', function () {

            allow(Foo::class)->toReceive('test')->andReturn('test');

            $bar  = new Bar();
            $actual = $bar->test();

            expect($actual)->toBe('test');

        });

    });

});
