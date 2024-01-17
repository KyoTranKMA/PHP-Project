<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Dataform;

class WorkflowConfig extends \Google\Collection
{
  protected $collection_key = 'recentScheduledExecutionRecords';
  /**
   * @var string
   */
  public $cronSchedule;
  /**
   * @var InvocationConfig
   */
  public $invocationConfig;
  protected $invocationConfigType = InvocationConfig::class;
  protected $invocationConfigDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var ScheduledExecutionRecord[]
   */
  public $recentScheduledExecutionRecords;
  protected $recentScheduledExecutionRecordsType = ScheduledExecutionRecord::class;
  protected $recentScheduledExecutionRecordsDataType = 'array';
  /**
   * @var string
   */
  public $releaseConfig;
  /**
   * @var string
   */
  public $timeZone;

  /**
   * @param string
   */
  public function setCronSchedule($cronSchedule)
  {
    $this->cronSchedule = $cronSchedule;
  }
  /**
   * @return string
   */
  public function getCronSchedule()
  {
    return $this->cronSchedule;
  }
  /**
   * @param InvocationConfig
   */
  public function setInvocationConfig(InvocationConfig $invocationConfig)
  {
    $this->invocationConfig = $invocationConfig;
  }
  /**
   * @return InvocationConfig
   */
  public function getInvocationConfig()
  {
    return $this->invocationConfig;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param ScheduledExecutionRecord[]
   */
  public function setRecentScheduledExecutionRecords($recentScheduledExecutionRecords)
  {
    $this->recentScheduledExecutionRecords = $recentScheduledExecutionRecords;
  }
  /**
   * @return ScheduledExecutionRecord[]
   */
  public function getRecentScheduledExecutionRecords()
  {
    return $this->recentScheduledExecutionRecords;
  }
  /**
   * @param string
   */
  public function setReleaseConfig($releaseConfig)
  {
    $this->releaseConfig = $releaseConfig;
  }
  /**
   * @return string
   */
  public function getReleaseConfig()
  {
    return $this->releaseConfig;
  }
  /**
   * @param string
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkflowConfig::class, 'Google_Service_Dataform_WorkflowConfig');
