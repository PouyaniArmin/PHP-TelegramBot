<?php

namespace Models;

use Database\MongoDB;
use Utilities\Env;
use Utilities\ErrorHandler;

class Channels extends MongoDB
{
    /**
     * Initializes the Channels class by loading environment variables and setting up the database connection.
     */
    public function __construct()
    {
        Env::load();
        $dbName = Env::get('MONGO_DB');
        parent::__construct($dbName, 'video');
    }
    /**
     * Inserts a document into the collection if it does not already exist.
     *
     * This method checks if a document that matches the given filter exists in the collection. 
     * If not, it inserts the provided document.
     *
     * @param array $filter The filter to find an existing document.
     * @param array $document The document to be inserted if it does not exist.
     * @return bool Returns true if the document was inserted, false otherwise.
     */
    public function insertIfNotExists($filter, $document)
    {
        return $this->insertDocumentIfNotExists($filter, $document);
    }
    /**
     * Inserts a document into the collection if it does not already exist.
     *
     * This method is called by `insertIfNotExists` to handle the actual insertion process. 
     * It finds an existing document based on the filter and, if no matching document is found, inserts the new document.
     *
     * @param array $filter The filter to find an existing document.
     * @param array $document The document to be inserted if it does not exist.
     * @return bool Returns true if the document was inserted successfully, false if it already exists.
     * @throws \Throwable Throws an exception if an error occurs during the insertion process.
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
