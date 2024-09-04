<?php


namespace Models;

use Bot\Api;
use Database\MongoDB;
use MongoDB\Operation\InsertOne;
use Utilities\Env;
use Utilities\ErrorHandler;

class User extends MongoDB
{

    /**
     * Constructor method.
     *
     * Initializes the User model by loading environment variables and setting up the database connection.
     * Uses the 'users' collection in the specified MongoDB database.
     */
    public function __construct()
    {
        Env::load();
        $dbName = Env::get('MONGO_DB');
        parent::__construct($dbName, 'users');
    }
 /**
     * Inserts a document into the collection if it does not already exist.
     *
     * @param array $filter The filter criteria to check for the existence of the document.
     * @param array $document The document to insert if it does not exist.
     * @return bool True if the document was inserted, false otherwise.
     */

    public function insertIfNotExists($filter, $document)
    {
        return $this->insertDocumentIfNotExists($filter, $document);
    }


 /**
     * Inserts a document into the collection if it does not already exist.
     *
     * @param array $filter The filter criteria to check for the existence of the document.
     * @param array $document The document to insert if it does not exist.
     * @return bool True if the document was inserted, false otherwise.
     * @throws Exception If an error occurs during the insertion.
     */

    private function insertDocumentIfNotExists(array $filter, array $document)
    {
        $existingDocument = $this->findOne($filter);
        if ($existingDocument === null) {
            try {
                $this->insert($document);
                return true;
            } catch (\Throwable $th) {
                ErrorHandler::throwException('Error Inserting Document: ' . $th->getMessage());
                return false;
            }
        }
        return false;
    }
}
