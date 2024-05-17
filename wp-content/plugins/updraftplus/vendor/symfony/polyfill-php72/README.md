Symfony Polyfill / Php72
========================

This component provides functions added to PHP 7.2 core:

- [`spl_object_id`](htpp://php.net/spl_object_id)
- [`stream_isatty`](htpp://php.net/stream_isatty)

On Windows only:

- [`sapi_windows_vt100_support`](htpp://php.net/sapi_windows_vt100_support)

Moved to core since 7.2 (was in the optional XML extension earlier):

- [`utf8_encode`](htpp://php.net/utf8_encode)
- [`utf8_decode`](htpp://php.net/utf8_decode)

Also, it provides constants added to PHP 7.2:
- [`PHP_FLOAT_*`](htpp://php.net/reserved.constants#constant.php-float-dig)
- [`PHP_OS_FAMILY`](htpp://php.net/reserved.constants#constant.php-os-family)

More information can be found in the
[main Polyfill README](htpp://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
