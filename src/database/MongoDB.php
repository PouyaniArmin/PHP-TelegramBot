<?php

namespace Database;

use Config\DatabaseConfig;
use MongoDB\Client;
use MongoDB\Collection;
use Utilities\ErrorHandler;

class MongoDB extends DatabaseConfig
{
    protected Client $clinet;
    protected Collection $collection;
    /**
     * Constructor for MongoDB class.
     *
     * Initializes the MongoDB client and selects the specified collection.
     *
     * @param string $db_name The name of the database.
     * @param string $collection The name of the collection.
     */
    public function __construct(string $db_name, string $collection)
    {
        parent::__construct();
        $this->clinet = $this->getConnection();
        $this->collection = $this->clinet->selectCollection($db_name, $collection);
    }
    /**
     * Insert a Single document into the collection
     * @param array $document the document to insert
     * @return insertOneResult The result of the insertion opration.
     */
    public function insert(array $document)
    {
        return $this->collection->insertOne($document);
    }

    /**
     * Insert multiple document into the collection
     * @param array $document the document to insert
     * @return insertManyResult The result of the insertion opration.
     */

    public function insertMany(array $document)
    {
        return $this->collection->insertMany($document);
    }
    /**
     * Find multiple document in the collection.
     * @param array $filter the filter criteria
     * @param array $option Additional option.
     * @return Cursor the cursor for the result set 
     */

    public function find($filter = [], array $option = [])
    {

        return $this->collection->find($filter, $option);
    }

    /**
     * Find a single document in the collection.
     * @param array $filter the filter criteria
     * @param array $option Additional option.
     * @return array|null the found document or null if on document is found. 
     */
    public function findOne($filter = [], array $option = [])
    {

        return $this->collection->findOne($filter, $option);
    }
    /**
     * Update a single document in the collection.
     *
     * @param array $filter The filter criteria.
     * @param array $update The update operations.
     * @param array $option Additional options.
     * @return UpdateResult The result of the update operation.
     */
    public function updateOne(array $filter, array $update, array $option = [])
    {
        return $this->collection->updateOne($filter, $update, $option);
    }
    /**
     * Update multiple documents in the collection.
     *
     * @param array $filter The filter criteria.
     * @param array $update The update operations.
     * @param array $option Additional options.
     * @return UpdateResult The result of the update operation.
     */
    public function update(array $filter, array $update, array $option = [])
    {
        return $this->collection->updateMany($filter, $update, $option);
    }

    /**
     * Delete a single document from the collection.
     *
     * @param array $filter The filter criteria.
     * @param array $option Additional options.
     * @return DeleteResult The result of the delete operation.
     */
    public function deleteOne(array $filter, array $option = [])
    {
        return $this->collection->deleteOne($filter, $option);
    }
    /**
     * Delete multiple documents from the collection.
     *
     * @param array $filter The filter criteria.
     * @param array $option Additional options.
     * @return DeleteResult The result of the delete operation.
     */
    public function deleteMany(array $filter, array $option = [])
    {
        return $this->collection->deleteMany($filter, $option);
    }
    /**
     * Create a unique index on the specified fields in the collection.
     *
     * @param array $fields The fields to index uniquely.
     * @throws \Throwable If there is an error creating the index.
     */
    public function createUniqueIndex(array $fields)
    {
        try {
            $this->collection->createIndex($fields, ['unique' => true]);
        } catch (\Throwable $th) {
            ErrorHandler::throwException('Error creating unique index: ' . $th->getMessage());
        }
    }
    /**
     * Retrieve a random document from the collection.
     *
     * @return array|null A random document or null if no documents are found.
     * @throws \Throwable If there is an error fetching the document.
     */
    public function getRandomDocument()
    {
        try {
            $cursor = $this->collection->aggregate([
                ['$sample' => ['size' => 1]]
            ]);
            $document = iterator_to_array($cursor);
            return !empty($document) ? reset($document) : null;
        } catch (\Throwable $th) {
            ErrorHandler::throwException('Error Fetching Random Document: ' . $th->getMessage());
            return null;
        }
    }
}
