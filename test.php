<?php
# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Storage\StorageClient;

# Your Google Cloud Platform project ID
$projectId = 'hl-dm-query-ps';

# Instantiates a client
$storage = new StorageClient([
    'projectId' => $projectId
]);

# The name for the new bucket
$bucketName = 'test_bucket';

# Creates the new bucket
$bucket = $storage->createBucket($bucketName);

echo 'Bucket ' . $bucket->name() . ' created.';
?>