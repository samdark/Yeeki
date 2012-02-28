Yeeki
=====

Yeeki is a flexible wiki engine that can be used either as a standalone application
or as an [Yii framework](http://www.yiiframework.com/) module.

By default it uses [markdown](http://michelf.com/projects/php-markdown/extra/) syntax with
addition of wiki-links.

Implemented features
--------------------

- Unicode support
- namespaces
- page index
- revision history
- ability to view specific revision
- ability to enter change summary for edit and view it at revision history page
- revision diff
- multiple markup dialects support (only markdown provided out of the box)
- cross-linking with [[wiki-links]]
- theming support
- i18n support

Requirements
------------

Currently in order to use Yeeki you need MySQL with InnoDB engine enabled. In the
future it is planned to allow using it with MyISAM and PostgreSQL.

Also server should be able to run [Yii framework](http://www.yiiframework.com/).

Using Yeeki as an application
-----------------------------

Currently you need to perform steps listed below. In the future versions all these
will be covered by automated installer.

1. Unpack contents of release archive.
2. Point your webserver root to `www`.
3. Make sure webserver have write permissions for `www/assets` and `app/runtime`.
3. Create a database with `utf8` encoding and `utf8_general_ci` collation.
4. Provide proper database credentials in `app/config/db.php`.
5. Run `install.php` from a web browser.

Using Yeeki as a module
----------------------

1. Copy `app/modules/wiki` to your application directory.
2. Using `yiic` apply migrations with the following command:

~~~
yiic migrate --migrationPath=application.modules.wiki.migrations --migrationTable=wiki_migration
~~~

3. Add `wiki` module to your web application config (usually it is `protected/config/main.php`):

~~~
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My cool application',

	// add the following:
	'modules' => array(
		'wiki' => array(

		),
	),

	// …
~~~

### Implementing data interfaces and configuring module

In order to use wiki in your application you should implement some simple interfaces
and configure module pointing to implementations. If you're using standard `Yii::app()->user`
and standard RBAC then the only mandatory interface to implement is `IWikiUser`.
You can find sample implementation in `app/components/WikiUser.php`. After
implementing it you need to configure the module:

~~~
'modules' => array(
	'wiki' => array(
		'userAdapter' => array(
			'class' => 'WikiUser',
		),
	),
),
~~~

See also `IWikiAuth`, `IWikiSearch`.


Theming Yeeki
-------------

You can use standard Yii theming feature to theme Yeeki. For details please
refer to [the definitive guide](http://www.yiiframework.com/doc/guide/1.1/en/topics.theming).

License
-------

Yeeki is licensed under New BSD license. That allows proprietary use, and for
the software released under the license to be incorporated into proprietary
products. Works based on the material may be released under a proprietary license
or as closed source software. It is possible for something to be distributed
with the BSD License and some other license to apply as well.

Credits
-------

- Initial code and ideas: Alexander Makarov, @samdark.

Thanks
------

- [CleverTech](http://clevertech.biz/) for supporting this OpenSource project.