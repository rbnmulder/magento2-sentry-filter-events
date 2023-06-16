<?php

namespace JustBetter\SentryFilterEvents\Block\Adminhtml\System\Config\Form\Field;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class Messages
 */
class Messages extends AbstractFieldArray
{


    /**
     * Initialise form fields
     *
     * @return void
     */
    protected function _construct(): void
    {
        $this->addColumn('message', ['label' => __('Event Message')]);
        $this->_addAfter       = false;
        $this->_addButtonLabel = __('Add');

        parent::_construct();
    }
}
