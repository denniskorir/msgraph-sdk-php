<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFilterDatetime File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* WorkbookFilterDatetime class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookFilterDatetime extends Entity
{
    /**
    * Gets the property dictionary of the WorkbookFilterDatetime
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the date
    *
    * @return string The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            return $this->_propDict["date"];
        } else {
            return null;
        }
    }

    /**
    * Sets the date
    *
    * @param string $val The value of the date
    *
    * @return WorkbookFilterDatetime
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
        return $this;
    }
    
    /**
    * Gets the specificity
    *
    * @return string The specificity
    */
    public function getSpecificity()
    {
        if (array_key_exists("specificity", $this->_propDict)) {
            return $this->_propDict["specificity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the specificity
    *
    * @param string $val The value of the specificity
    *
    * @return WorkbookFilterDatetime
    */
    public function setSpecificity($val)
    {
        $this->_propDict["specificity"] = $val;
        return $this;
    }
}
