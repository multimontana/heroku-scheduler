English Instruction
============
Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require multimontana/heroku-scheduler-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new multimontana\HerokuSchedulerBundle\multimontanaHerokuSchedulerBundle(),
        );

        // ...
    }

    // ...
}
```


Setup the Scheduler on Heroku
============

Install the addon: https://elements.heroku.com/addons/scheduler

Open it and fill these values:

![Heroku Scheduler](https://github.com/mCzolko/HerokuSchedulerBundle/blob/master/Resources/doc/scheduler-jobs.png)

That's it. See Events.php file for available events which you can handle inside your app.

Note: In Symfony3 console is nolonger in app folder. Use `php bin/console` instead.


Usage
============

Create a event subscriber (or listener) for scheduler events. And do whatever you want. Freedom.


```php
use mCzolko\HerokuSchedulerBundle\Events;

class HerokuSchedulerSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            Events::TEN_MINUTES => 'tenMinutes',
            Events::HOURLY      => 'hourly',
            Events::DAILY       => 'daily'
        ];
    }

    public function tenMinutes()
    {
        // Check notifications on your Apple watch 
    }

    public function hourly()
    {
        // Send message at least one hot chick on Badoo
    }

    public function daily()
    {
        // https://www.youtube.com/watch?v=lxptFSJJ14Y
    }
}
```

Русская интсрукция
============
Установка
============

Шаг 1: Загрузите пакет
---------------------------

Откройте командную консоль, войдите в каталог проекта и 
выполните следующую команду, чтобы загрузить последнюю стабильную версию этого пакета:

```bash
$ composer require multimontana/heroku-scheduler-bundle
```

Эта команда требует, чтобы Composer был установлен глобально, как описано в
[installation chapter](https://getcomposer.org/doc/00-intro.md)
об установке документации Composer.

Шаг 2. Включите пакет
-------------------------

Затем включите пакет, добавив его в список зарегистрированных пакетов в
`app/AppKernel.php` файле вашего проекта:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new multimontana\HerokuSchedulerBundle\multimontanaHerokuSchedulerBundle(),
        );

        // ...
    }

    // ...
}
```


Настройте планировщик на Heroku
============

Установите дополнение: https://elements.heroku.com/addons/scheduler

Откройте его и заполните следующие значения:

![Heroku Scheduler](https://github.com/mCzolko/HerokuSchedulerBundle/blob/master/Resources/doc/scheduler-jobs.png)

Вот и все. См. файл Events.php для доступных событий, которые вы можете обрабатывать в своем приложении.

Примечание. В Symfony3 консоль больше не находится в папке приложения. Используйте `php bin/console` вместо этого.


Применение
============

Создайте подписчика событий (или слушателя) для событий планировщика. И делай что хочешь. Свобода.

```php
use multimontana\HerokuSchedulerBundle\Events;

class HerokuSchedulerSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            Events::TEN_MINUTES => 'tenMinutes',
            Events::HOURLY      => 'hourly',
            Events::DAILY       => 'daily'
        ];
    }

    public function tenMinutes()
    {
        // Check notifications on your Apple watch 
    }

    public function hourly()
    {
        // Send message at least one hot chick on Badoo
    }

    public function daily()
    {
        // https://www.youtube.com/watch?v=lxptFSJJ14Y
    }
}
```
