<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_classic_theme_helper_pluginⓥ0_1_0_alpha
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\A8c_Mc_Stats' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php',
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Automattic\\Jetpack\\Automatic_Install_Skin' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-plugins-installer/src/class-automatic-install-skin.php',
        'Automattic\\Jetpack\\Classic_Theme_Helper\\Featured_Content' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-classic-theme-helper/src/class-featured-content.php',
        'Automattic\\Jetpack\\Classic_Theme_Helper\\Main' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-classic-theme-helper/src/class-main.php',
        'Automattic\\Jetpack\\Classic_Theme_Helper\\Social_Links' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-classic-theme-helper/src/social-links.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Config' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-config/src/class-config.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\CookieState' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-cookiestate.php',
        'Automattic\\Jetpack\\Errors' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-errors.php',
        'Automattic\\Jetpack\\Files' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-files.php',
        'Automattic\\Jetpack\\Modules' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-modules.php',
        'Automattic\\Jetpack\\Paths' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-paths.php',
        'Automattic\\Jetpack\\Plugins_Installer' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-plugins-installer/src/class-plugins-installer.php',
        'Automattic\\Jetpack\\Status' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-status.php',
        'Automattic\\Jetpack\\Status\\Cache' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-cache.php',
        'Automattic\\Jetpack\\Status\\Host' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-host.php',
        'Automattic\\Jetpack\\Status\\Visitor' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-status/src/class-visitor.php',
        'Classic_Theme_Helper_Plugin' => __DIR__ . '/../..' . '/src/class-classic-theme-helper-plugin.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_classic_theme_helper_pluginⓥ0_1_0_alpha::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_classic_theme_helper_pluginⓥ0_1_0_alpha::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_classic_theme_helper_pluginⓥ0_1_0_alpha::$classMap;

        }, null, ClassLoader::class);
    }
}
