<?php

namespace MediaVorus;

use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;
use Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser;
use MediaVorus\Utils\RawImageMimeTypeGuesser;
use MediaVorus\Utils\PostScriptMimeTypeGuesser;
use MediaVorus\Utils\AudioMimeTypeGuesser;
use MediaVorus\Utils\VideoMimeTypeGuesser;
use \PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public static $registered = false;

    public function setUp()
    {
        if (!static::$registered) {
            $guesser = MimeTypeGuesser::getInstance();

            $guesser->register(new FileBinaryMimeTypeGuesser());
            $guesser->register(new RawImageMimeTypeGuesser());
            $guesser->register(new PostScriptMimeTypeGuesser());
            $guesser->register(new AudioMimeTypeGuesser());
            $guesser->register(new VideoMimeTypeGuesser());

            static::$registered = true;
        }
    }
}
