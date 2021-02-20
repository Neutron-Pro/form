<?php


namespace NeutronStars\Form\Bootstrap;

class SubmitElement extends \NeutronStars\Form\SubmitElement
{
    public function toHTML(): string
    {
        return '<input type="submit" name="'.$this->getKey().'" value="'
            .$this->getValue().'"  class="btn btn-primary"/>';
    }
}
