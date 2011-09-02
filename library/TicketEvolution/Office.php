<?php
/**
 * TicketEvolution Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@teamonetickets.com so we can send you a copy immediately.
 *
 * @category    TicketEvolution
 * @package     TicketEvolution
 * @author      J Cobb <j@teamonetickets.com>
 * @author      Jeff Churchill <jeff@teamonetickets.com>
 * @copyright   Copyright (c) 2011 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt     New BSD License
 * @version     $Id: Office.php 74 2011-06-22 22:23:34Z jcobb $
 */


/**
 * @category    TicketEvolution
 * @package     TicketEvolution
 * @copyright   Copyright (c) 2011 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/ticketevolution/ticketevolution-php/blob/master/LICENSE.txt     New BSD License
 */
class TicketEvolution_Office
{
    /**
     * Constructs a new Ticket Evolution Office
     *
     * @param  object $object
     * @throws TicketEvolution_Exception
     * @return TicketEvolution_Office
     */
    public function __construct($object)
    {
        foreach ($object as $prop => $val) {
            switch($prop) {
                case 'updated_at':
                    // This property is a date, convert it into a TicketEvolution_Date object
                    /**
                     * @see TicketEvolution_Date
                     */
                    require_once 'TicketEvolution/Date.php';
                    
                    $this->{$prop} = new TicketEvolution_Date($val, TicketEvolution_Date::ISO_8601);
                    break;
                    
                default:
                    $this->{$prop} = $val;
            }
        }
    }
}