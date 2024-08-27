<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc970f1a266f43a2118de462ce989b839
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utilities\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Services\\' => 9,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
            'Models\\' => 7,
        ),
        'J' => 
        array (
            'Jean85\\' => 7,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'Database\\' => 9,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'B' => 
        array (
            'Bot\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utilities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/utilities',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/services',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Jean85\\' => 
        array (
            0 => __DIR__ . '/..' . '/jean85/pretty-package-versions/src',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/database',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'Bot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/bot',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Bot\\Bot' => __DIR__ . '/../..' . '/src/bot/Bot.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Config\\DatabaseConfig' => __DIR__ . '/../..' . '/config/DatabaseConfig.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'Jean85\\Exception\\ProvidedPackageException' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/Exception/ProvidedPackageException.php',
        'Jean85\\Exception\\ReplacedPackageException' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/Exception/ReplacedPackageException.php',
        'Jean85\\Exception\\VersionMissingExceptionInterface' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/Exception/VersionMissingExceptionInterface.php',
        'Jean85\\PrettyVersions' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/PrettyVersions.php',
        'Jean85\\Version' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/Version.php',
        'MongoDB\\BulkWriteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/BulkWriteResult.php',
        'MongoDB\\ChangeStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/ChangeStream.php',
        'MongoDB\\Client' => __DIR__ . '/..' . '/mongodb/mongodb/src/Client.php',
        'MongoDB\\Collection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Collection.php',
        'MongoDB\\Command\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Command/ListCollections.php',
        'MongoDB\\Command\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Command/ListDatabases.php',
        'MongoDB\\Database' => __DIR__ . '/..' . '/mongodb/mongodb/src/Database.php',
        'MongoDB\\DeleteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/DeleteResult.php',
        'MongoDB\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/BadMethodCallException.php',
        'MongoDB\\Exception\\Exception' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/Exception.php',
        'MongoDB\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/InvalidArgumentException.php',
        'MongoDB\\Exception\\ResumeTokenException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/ResumeTokenException.php',
        'MongoDB\\Exception\\RuntimeException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/RuntimeException.php',
        'MongoDB\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnexpectedValueException.php',
        'MongoDB\\Exception\\UnsupportedException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnsupportedException.php',
        'MongoDB\\GridFS\\Bucket' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Bucket.php',
        'MongoDB\\GridFS\\CollectionWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/CollectionWrapper.php',
        'MongoDB\\GridFS\\Exception\\CorruptFileException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/CorruptFileException.php',
        'MongoDB\\GridFS\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/FileNotFoundException.php',
        'MongoDB\\GridFS\\Exception\\StreamException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/StreamException.php',
        'MongoDB\\GridFS\\ReadableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/ReadableStream.php',
        'MongoDB\\GridFS\\StreamWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/StreamWrapper.php',
        'MongoDB\\GridFS\\WritableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/WritableStream.php',
        'MongoDB\\InsertManyResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertManyResult.php',
        'MongoDB\\InsertOneResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertOneResult.php',
        'MongoDB\\MapReduceResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/MapReduceResult.php',
        'MongoDB\\Model\\BSONArray' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONArray.php',
        'MongoDB\\Model\\BSONDocument' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONDocument.php',
        'MongoDB\\Model\\BSONIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONIterator.php',
        'MongoDB\\Model\\CachingIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CachingIterator.php',
        'MongoDB\\Model\\CallbackIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CallbackIterator.php',
        'MongoDB\\Model\\ChangeStreamIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/ChangeStreamIterator.php',
        'MongoDB\\Model\\CollectionInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfo.php',
        'MongoDB\\Model\\CollectionInfoCommandIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoCommandIterator.php',
        'MongoDB\\Model\\CollectionInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfo.php',
        'MongoDB\\Model\\DatabaseInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfoLegacyIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoLegacyIterator.php',
        'MongoDB\\Model\\IndexInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfo.php',
        'MongoDB\\Model\\IndexInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIterator.php',
        'MongoDB\\Model\\IndexInfoIteratorIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIteratorIterator.php',
        'MongoDB\\Model\\IndexInput' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInput.php',
        'MongoDB\\Operation\\Aggregate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Aggregate.php',
        'MongoDB\\Operation\\BulkWrite' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/BulkWrite.php',
        'MongoDB\\Operation\\Count' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Count.php',
        'MongoDB\\Operation\\CountDocuments' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CountDocuments.php',
        'MongoDB\\Operation\\CreateCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateCollection.php',
        'MongoDB\\Operation\\CreateIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateIndexes.php',
        'MongoDB\\Operation\\DatabaseCommand' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DatabaseCommand.php',
        'MongoDB\\Operation\\Delete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Delete.php',
        'MongoDB\\Operation\\DeleteMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteMany.php',
        'MongoDB\\Operation\\DeleteOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteOne.php',
        'MongoDB\\Operation\\Distinct' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Distinct.php',
        'MongoDB\\Operation\\DropCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropCollection.php',
        'MongoDB\\Operation\\DropDatabase' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropDatabase.php',
        'MongoDB\\Operation\\DropIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropIndexes.php',
        'MongoDB\\Operation\\EstimatedDocumentCount' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/EstimatedDocumentCount.php',
        'MongoDB\\Operation\\Executable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Executable.php',
        'MongoDB\\Operation\\Explain' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explain.php',
        'MongoDB\\Operation\\Explainable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explainable.php',
        'MongoDB\\Operation\\Find' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Find.php',
        'MongoDB\\Operation\\FindAndModify' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindAndModify.php',
        'MongoDB\\Operation\\FindOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOne.php',
        'MongoDB\\Operation\\FindOneAndDelete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndDelete.php',
        'MongoDB\\Operation\\FindOneAndReplace' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndReplace.php',
        'MongoDB\\Operation\\FindOneAndUpdate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndUpdate.php',
        'MongoDB\\Operation\\InsertMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertMany.php',
        'MongoDB\\Operation\\InsertOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertOne.php',
        'MongoDB\\Operation\\ListCollectionNames' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollectionNames.php',
        'MongoDB\\Operation\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollections.php',
        'MongoDB\\Operation\\ListDatabaseNames' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabaseNames.php',
        'MongoDB\\Operation\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabases.php',
        'MongoDB\\Operation\\ListIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListIndexes.php',
        'MongoDB\\Operation\\MapReduce' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/MapReduce.php',
        'MongoDB\\Operation\\ModifyCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ModifyCollection.php',
        'MongoDB\\Operation\\RenameCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/RenameCollection.php',
        'MongoDB\\Operation\\ReplaceOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ReplaceOne.php',
        'MongoDB\\Operation\\Update' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Update.php',
        'MongoDB\\Operation\\UpdateMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateMany.php',
        'MongoDB\\Operation\\UpdateOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateOne.php',
        'MongoDB\\Operation\\Watch' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Watch.php',
        'MongoDB\\Operation\\WithTransaction' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/WithTransaction.php',
        'MongoDB\\UpdateResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/UpdateResult.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc970f1a266f43a2118de462ce989b839::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc970f1a266f43a2118de462ce989b839::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc970f1a266f43a2118de462ce989b839::$classMap;

        }, null, ClassLoader::class);
    }
}
