<?php
namespace Application\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

class TrainingHelper extends AbstractHelper
{
    /**
     * @param \DateTime $debut
     * @param \DateTime $fin
     */

    public function getStatus(\DateTime $debut, \DateTime $fin)
    {
        $today = new \DateTime('now');
        if ($today > $fin) {
            return "finish";
        } else {
            if ($today < $debut) {
                return "not started";
            } else {
                return "in progress";
            }
        }
    }
}