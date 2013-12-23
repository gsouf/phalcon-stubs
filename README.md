phalcon-stubs
=============

Tested with Netbeans


Two solutions for adding phalcon stubs into your project : composer or clone+checkout.

Composer 
-----------

The simplest way to install stubs, is to use composer :


Add the line : ```"sneakybobito/phalcon-stubs": "1.2.4"``` in your ```composer.json``` and ```update``` or ```install```.

Best practise would be to place it in the [require-dev](http://getcomposer.org/doc/04-schema.md#require-dev) section of the composer.json.

You may specify a different version :

```"sneakybobito/phalcon-stubs": "1.2.0"```  ```"sneakybobito/phalcon-stubs": "1.1.0"```





Clone and checkout
-----------

If you don't want to use composer, then you can just put the stubs in your project by cloning the repo manually.

Anywhere in you project you can clone the stubs :

```git clone https://github.com/SneakyBobito/phalcon-stubs.git```

then move to the version you want : 

```git checkout 1.2.4``` or ```git checkout 1.2.3``` or ```git checkout 1.1.0``` or ```git checkout 1.0.0```


list of available versions
--------

```1.2.4```

```1.2.3```

```1.2.0```

```1.1.0```


.gitignore
-----

If you use clone and checkout, then don't forget to add it into you ```.gitignore```

