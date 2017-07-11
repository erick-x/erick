<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit649026df0d173613ffb0ea7d29c45b18
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '6ecb5ef1dee89004fcb1efbfc5f3d753' => __DIR__ . '/../..' . '/erick/library/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Predis\\' => 7,
        ),
        'N' => 
        array (
            'Noodlehaus\\' => 11,
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Noodlehaus\\' => 
        array (
            0 => __DIR__ . '/..' . '/hassankhan/config/src',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/erick/library',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AbstractOutputProvider' => __DIR__ . '/..' . '/char0n/ffmpeg-php/provider/AbstractOutputProvider.php',
        'Article' => __DIR__ . '/../..' . '/apps/models/ArticleModel.php',
        'BaseController' => __DIR__ . '/../..' . '/apps/controllers/BaseController.php',
        'BaseView' => __DIR__ . '/../..' . '/erick/library/BaseView.php',
        'CacheRedis' => __DIR__ . '/../..' . '/apps/services/Redis.php',
        'FFmpegAnimatedGif' => __DIR__ . '/..' . '/char0n/ffmpeg-php/FFmpegAnimatedGif.php',
        'FFmpegAnimatedGifTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/FFmpegAnimatedGifTest.php',
        'FFmpegAutoloader' => __DIR__ . '/..' . '/char0n/ffmpeg-php/FFmpegAutoloader.php',
        'FFmpegAutoloaderTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/FFmpegAutoloaderTest.php',
        'FFmpegFrame' => __DIR__ . '/..' . '/char0n/ffmpeg-php/FFmpegFrame.php',
        'FFmpegFrameTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/FFmpegFrameTest.php',
        'FFmpegMovie' => __DIR__ . '/..' . '/char0n/ffmpeg-php/FFmpegMovie.php',
        'FFmpegMovieTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/FFmpegMovieTest.php',
        'FFmpegOutputProvider' => __DIR__ . '/..' . '/char0n/ffmpeg-php/provider/FFmpegOutputProvider.php',
        'FFmpegOutputProviderTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/provider/FFmpegOutputProviderTest.php',
        'FFprobeOutputProvider' => __DIR__ . '/..' . '/char0n/ffmpeg-php/provider/FFprobeOutputProvider.php',
        'FFprobeOutputProviderTest' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/provider/FFprobeOutputProviderTest.php',
        'HomeController' => __DIR__ . '/../..' . '/apps/controllers/HomeController.php',
        'IndexController' => __DIR__ . '/../..' . '/apps/controllers/IndexController.php',
        'OutputProvider' => __DIR__ . '/..' . '/char0n/ffmpeg-php/provider/OutputProvider.php',
        'StringOutputProvider' => __DIR__ . '/..' . '/char0n/ffmpeg-php/provider/StringOutputProvider.php',
        'Task' => __DIR__ . '/../..' . '/apps/task/Task.php',
        'View' => __DIR__ . '/../..' . '/apps/services/View.php',
        'ffmpeg_animated_gif' => __DIR__ . '/..' . '/char0n/ffmpeg-php/adapter/ffmpeg_animated_gif.php',
        'ffmpeg_animated_git_test' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/adapter/ffmpeg_animated_gif_Test.php',
        'ffmpeg_frame' => __DIR__ . '/..' . '/char0n/ffmpeg-php/adapter/ffmpeg_frame.php',
        'ffmpeg_frame_test' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/adapter/ffmpeg_frame_Test.php',
        'ffmpeg_movie' => __DIR__ . '/..' . '/char0n/ffmpeg-php/adapter/ffmpeg_movie.php',
        'ffmpeg_movie_test' => __DIR__ . '/..' . '/char0n/ffmpeg-php/test/adapter/ffmpeg_movie_Test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit649026df0d173613ffb0ea7d29c45b18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit649026df0d173613ffb0ea7d29c45b18::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit649026df0d173613ffb0ea7d29c45b18::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit649026df0d173613ffb0ea7d29c45b18::$classMap;

        }, null, ClassLoader::class);
    }
}
