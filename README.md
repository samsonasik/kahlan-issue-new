test issue with :

```php
(new AClass())->method();
```

to be stubbed with:

```php
allow(Aclass::class)->toReceive('method')->andReturn('test');
```
