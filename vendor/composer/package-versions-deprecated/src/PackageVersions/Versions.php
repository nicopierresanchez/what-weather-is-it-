<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.7@6e22f6012b42d7932674857989fcf184e9e9b1c3',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.0@8b922578bdee2243a26202b13df795e170efaef8',
  'doctrine/doctrine-migrations-bundle' => '3.0.3@0a9a4ffdb8713d0b7f2bbc04b0bbfa2991b2a238',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpstan/phpdoc-parser' => '1.2.0@dbc093d7af60eff5cd575d2ed761b15ed40bd08e',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v4.3.11@5bdbd8878b69e3be16d036890ea3081172ea28c5',
  'symfony/cache' => 'v4.3.11@8794ccf68ac341fc19311919d2287f7557bfccba',
  'symfony/cache-contracts' => 'v1.1.11@41c956506500bea5502022f6be81da96fb9c7626',
  'symfony/config' => 'v4.3.11@7b7d5d35a5ba5a62f2c6c69f574e36595e587d11',
  'symfony/console' => 'v4.3.11@82aeab8f852a63e83d781617841237944392cd45',
  'symfony/debug' => 'v4.3.11@8e362996356f2555d493ee3d8285424853955e8f',
  'symfony/dependency-injection' => 'v4.3.11@468bfb60a60b7caa03e4722c43f5359df47b4349',
  'symfony/doctrine-bridge' => 'v4.3.11@64cbcf5635fb1b38131332d0b3784faeec9a9e9a',
  'symfony/dotenv' => 'v4.3.11@3e41dc2a3c517819b23cb4d1c95f5116182a8dd0',
  'symfony/event-dispatcher' => 'v4.3.11@75f99d7489409207d09c6cd75a6c773ccbb516d5',
  'symfony/event-dispatcher-contracts' => 'v1.1.11@01e9a4efac0ee33a05dfdf93b346f62e7d0e998c',
  'symfony/expression-language' => 'v4.3.11@fcc3e2085e4832f52bed94d72663962f650dfb23',
  'symfony/filesystem' => 'v4.3.11@fdc0ac5e64f7555818411a17993bb24be4270769',
  'symfony/finder' => 'v4.3.11@8174c13b932c71f10cdd8dfcd8f5e494f1e7003d',
  'symfony/flex' => 'v1.18.5@10e438f53a972439675dc720706f0cd5c0ed94f1',
  'symfony/form' => 'v4.3.11@05fac4992a100642806a50cc0c84fb4a8a326c14',
  'symfony/framework-bundle' => 'v4.3.11@4ea8f63e005af800e140c1bcfb1f748a006defd1',
  'symfony/http-client' => 'v4.3.11@5d416356d61157b2a81bb0f52a1a81810167ca0e',
  'symfony/http-client-contracts' => 'v1.1.11@8a497ee1712c2507eaccd31aca00dd603f93d25d',
  'symfony/http-foundation' => 'v4.3.11@90af881cedc857dca17990cae96f37727b8ae1d6',
  'symfony/http-kernel' => 'v4.3.11@fcd8fe5b98d435da856b310a01a4f281668607c0',
  'symfony/inflector' => 'v4.3.11@8c699257379098d26fa400edad29f703b380efcf',
  'symfony/intl' => 'v4.3.11@2d139d02ddae582c382d30cccd2ee4c814043518',
  'symfony/mime' => 'v4.3.11@50f65ca2a6c33702728024d33e4b9461f67623c4',
  'symfony/monolog-bridge' => 'v4.3.11@8c6a51c55add464d9e6ef7000f1877e4c75f9fbf',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.3.11@3438c6fe65a9794b0e9f3686d0e3771412a2c47a',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/process' => 'v4.3.11@61ab103012c3072fb340447a34598714ba74ba6f',
  'symfony/property-access' => 'v4.3.11@28ecead27bd17937b3f904396b026a8e3915d0cd',
  'symfony/property-info' => 'v4.3.11@169aafe8f2a01ec50fb324f5d24bbd61a5799df1',
  'symfony/proxy-manager-bridge' => 'v4.3.11@fedfdda54ac9590d81b132eb9d401038795ab1d1',
  'symfony/routing' => 'v4.3.11@6cc4b6a92e3c623b2c7e56180728839b0caf8564',
  'symfony/security-bundle' => 'v4.3.11@1cc02bd8e44eef0bd4ecfd53a8b4d7b26f675d85',
  'symfony/security-core' => 'v4.3.11@8d008438e4bbdf04086d1048d51cc1b5dfac2046',
  'symfony/security-csrf' => 'v4.3.11@9e435026ab45f073880d1fbe0e1b17e7df6bf642',
  'symfony/security-guard' => 'v4.3.11@5d87ee4ffa5aa6e594008fa3cc65bc8f86ad6438',
  'symfony/security-http' => 'v4.3.11@2b4b8632956c680400006376fad0a4f9889d4be1',
  'symfony/serializer' => 'v4.3.11@cd4f545209e1f3d408b5adda729c59bfd714a1a5',
  'symfony/service-contracts' => 'v1.1.11@633df678bec3452e04a7b0337c9bcfe7354124b3',
  'symfony/stopwatch' => 'v4.3.11@4aff3715c98706ee25bdb4aced6591a9dffc3d9b',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.3.11@46e462be71935ae15eab531e4d491d801857f24c',
  'symfony/translation-contracts' => 'v1.1.11@58ae23095ffdea045725dda70752566aa2908be6',
  'symfony/twig-bridge' => 'v4.3.11@9574613b74ed066f775eaf94bb15476ef58609de',
  'symfony/twig-bundle' => 'v4.3.11@0471344717bfb081f10209ad6b8fd520ca8ebd9d',
  'symfony/validator' => 'v4.3.11@0d2dcf4ae26db5b6781f40fcab9785f427ee7fa4',
  'symfony/var-exporter' => 'v4.3.11@563f728784ea09c8154ea57cf8192ae5d6f0d277',
  'symfony/web-link' => 'v4.3.11@5f47af858f264ce1d29388fb2a05f54e3c687794',
  'symfony/yaml' => 'v4.3.11@8e0a95493b734ca8195acf3e1f3d89e88b957db5',
  'twig/twig' => 'v2.14.11@66baa66f29ee30e487e05f1679903e36eb01d727',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '7.0.15@819f92bba8b001d4363065928088de22f25a3a48',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.3@9c1da83261628cb24b6a6df371b6e312b3954768',
  'phpunit/phpunit' => '8.5.23@efb20ff3623b9d09bf190a68fdfe574538a8d496',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.4@0c32ea2e40dbf59de29f3b49bf375176ce7dd8db',
  'sebastian/global-state' => '3.0.2@de036ec91d55d2a9e0db2ba975b512cdb1c23921',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/browser-kit' => 'v4.3.11@66d301ce3458b522e3b1f2a76ecfccd1834dcf90',
  'symfony/css-selector' => 'v4.3.11@32203e7cc318dcfd1d5fb12ab35e595fc6016206',
  'symfony/debug-bundle' => 'v4.3.11@37f558ddd74933f0254bb5e3b6b758e1ee7ff699',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/dom-crawler' => 'v4.3.11@ccf895f6f3ed9430f53ae1ce34566e9bb6c58446',
  'symfony/maker-bundle' => 'v1.35.0@25058310408bb045772d2ec0ff7a3b6460fea2dd',
  'symfony/phpunit-bridge' => 'v6.0.3@81f5e8e453433e0182a49ca45d4734cb3a2f818f',
  'symfony/var-dumper' => 'v4.3.11@75669a7e681cbd4a291a08ed31d2d3998fe86e48',
  'symfony/web-profiler-bundle' => 'v4.3.11@ef55f4aac938cdf8c2051ead22e18ad80ed4e4f8',
  'symfony/web-server-bundle' => 'v4.3.11@2338445b78f1fb212a96f4286abdc77ee1e92607',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'paragonie/random_compat' => '2.*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  'symfony/polyfill-ctype' => '*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  'symfony/polyfill-iconv' => '*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  'symfony/polyfill-php71' => '*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  'symfony/polyfill-php70' => '*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  'symfony/polyfill-php56' => '*@bc2308c36bfb559b6182a8b97737ad779b2382b6',
  '__root__' => 'dev-main@bc2308c36bfb559b6182a8b97737ad779b2382b6',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
