UniversalCache
========
A Generic Cache Interface for PHP.

### UniversalCache Interface

```php
$memory      = UniversalCache::create( 'MemoryCache' );
$memcache    = UniversalCache::create( 'MemcacheCache' );

$c = new UniversalCache(array($memory,$memcache));
$c->set( 'foo' , 123 );

$memory->set( 'foo' , '123' );
$val = $memory->get('foo');

$memcache->set('foo', '123' );
$memcache->get('foo', '123' );
```

### ApcCache

```php
$cache = new UniversalCache\ApcCache(array( 
    'namespace' => 'app_',
    'default_expiry' => 3600,
));
$cache->set($name,$val);
$val = $cache->get($name);
$cache->remove($name);
```

### MemcacheCache

```php
$cache = new UniversalCache\MemcacheCache(array( 
    'servers' => [ ['localhost', 123123], ['server2',123123] ]
));
$cache->set($name,$val);
$val = $cache->get($name);
$cache->remove($name);
```


### FileSystemCache

```
$serializer = new SerializerKit\Serializer('json');
$cache = new UniversalCache\FileSystemCache(array( 
    'expiry' => 30,
    'cache_dir' => 'cache',
    'serializer' => $serializer,
));
$cache->clear();

$url = 'foo_bar';
$html = 'test content';
$cache->set( $url , $html );

$cache->remove( $url );

ok( null === $cache->get( $url ) );

$cache->clear();

ok( null === $cache->get( $url ) );
```


Hacking
===========

    $ pear install -a -f corneltek/Universal
    $ pear install -a -f corneltek/PHPUnit_TestMore
    $ onion install
    $ phpunit

