<?php
class Nwdthemes_Cmsfix_Block_Block extends Mage_Cms_Block_Block {

    public function getCacheKeyInfo()
    {
        if ($this->getBlockId()) {
            return array(
                Mage_Cms_Model_Block::CACHE_TAG,
                Mage::app()->getStore()->getId(),
                $this->getBlockId(),
                (int) Mage::app()->getStore()->isCurrentlySecure()
            );
        } else {
            return parent::getCacheKeyInfo();
        }
    }
}