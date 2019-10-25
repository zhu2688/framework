# Custom php composer
[![StyleCI](https://github.styleci.io/repos/106982497/shield?branch=master)](https://github.com/zhu2688/framework)
![PHP from Packagist](https://img.shields.io/packagist/php-v/zhu2688/framework.svg?style=flat-square)
[![Packagist](https://img.shields.io/packagist/l/zhu2688/framework.svg?style=flat-square)](https://packagist.org/packages/zhu2688/framework)
[![Latest Stable Version](http://img.shields.io/packagist/v/zhu2688/framework.svg?style=flat-square)](https://packagist.org/packages/zhu2688/framework)

## 简介

把 php 项目使用 composer 管理起来，让其管理依赖库和自动加载，所以选择了一部分基本常用库并且发布到 [packagist](https://packagist.org), 以后只需要引入这个基本库就够了

## 使用

```
composer require zhu2688/framework
```

## 库说明
* 此分支是php 7.2版本  [php5 详见 0.x分支](https://github.com/zhu2688/framework/tree/0.x)

* [guzzle](https://github.com/guzzle/guzzle) HTTP 请求库
* [Medoo](https://github.com/catfan/Medoo) 简单数据库
* [twig](https://github.com/twigphp/Twig) 模板引擎
* [doctrine/Cache](https://github.com/doctrine/cache) 缓存库
* [monolog/monolog](https://github.com/Seldaek/monolog) 日志库
* [resque/php-resque](https://github.com/resque/php-resque) 轻量消息队列
* [vlucas/valitron](https://github.com/vlucas/valitron) 无依赖简单验证
* [nesbot/carbon](https://github.com/briannesbitt/Carbon)时间处理类
* [lodash-php/lodash-php](https://github.com/lodash-php/lodash-php) php7的工具库(模仿javascript的Loadsh)
* [maxmind-db/reader](https://github.com/maxmind/MaxMind-DB-Reader-php) php读取maxMind DB库
* [mandrill/mandrill](https://bitbucket.org/mailchimp/mandrill-api-php/overview) 使用mailchimp发送邮件
* [gregwar/image](https://github.com/Gregwar/Image) Gregwar's 图片处理库
* [league/flysystem](https://github.com/thephpleague/flysystem)强大的文件系统抽象层flysystem
* [filp/whoops](https://github.com/filp/whoops) 错误&异常 诊断组件
