<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Segment extends AbstractRest
{
    /**
     * @param $listId
     *
     * @return \Managesend\DataResponse\Segment\SegmentsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getListSegments($listId)
    {
        $url = $this->getRestUrl("/segments/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Segment\SegmentsResponse($response);
    }

    /**
     * @param $segmentId
     * @param array $params = [
     *  'date' => 'join date'
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Segment\SegmentSubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getActiveSubscribers($segmentId, array $params=array())
    {
        $url = $this->getRestUrl("/segment/subscribers/{clientId}/{segmentId}", array("{segmentId}"=> $segmentId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Segment\SegmentSubscribersResponse($response);
    }

    /**
     * @param $segmentId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteSegment($segmentId)
    {
        $url = $this->getRestUrl("/segment/delete/{clientId}/{segmentId}", array("{segmentId}"=> $segmentId));
        return $this->delete($url);
    }
}