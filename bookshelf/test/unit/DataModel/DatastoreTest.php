<?php
/*
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Cloud\Samples\Bookshelf\DataModel;

use Google\Cloud\Samples\Bookshelf\SkipTestsIfMissingCredentialsTrait;

class DatastoreTest extends \PHPUnit_Framework_TestCase
{
    use DataModelTestTrait;
    use SkipTestsIfMissingCredentialsTrait;

    public function setUp()
    {
        parent::setUp();

        if (!$projectId = getenv('GOOGLE_PROJECT_ID')) {
            $this->markTestSkipped('Set the GOOGLE_PROJECT_ID environment variable to run this test');
        }

        $this->model = new Datastore($projectId);
    }
}
