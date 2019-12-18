<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */
namespace Amadeus\Client\Struct\Service\BookPriceService;

use Amadeus\Client\Struct\Service\BookPriceService\Identifier;
use Amadeus\Client\Struct\Service\BookPriceService\ServiceProvider;

/**
 * Service
 *
 * @package Amadeus\Client\Struct\Service\BookPriceService
 * @author Mike Hernas <mike@ahoy.io>
 */
class Service
{
  /**
   * @var string
   */
  public $TID;
  
  /**
   * @var Identifier
   */
  public $Identifier;
  
  /**
   * @var ServiceProvider
   */
  public $serviceProvider;

    /**
     * Service constructor.
     *
     * @param ServiceBookPriceServiceOptions $options
     */
    public function __construct($options)
    {
        $this->TID = $options->TID;
        $this->Identifier = new Identifier($options->identifier);
        $this->serviceProvider = new ServiceProvider($options->serviceProvider);
    }
}
