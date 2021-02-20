<?php
namespace NeutronStars\Form\Bootstrap;

class TextElement extends \NeutronStars\Form\TextElement
{
    public function toHTML(): string
    {
        $error = !empty($this->error);
        $html = '<div class="form-group'.($error ? ' has-danger' : '').'">';

        if (!empty($this->label)) {
            $html .= '<label class="form-control-label"'
                .(!empty($this->id) ? ' id="'.$this->id.'"' : '')
                .'>'.$this->label.'</label>';
        }

        $html .= '<input type="text" value="'.$this->value.'" class="form-control'.($error ? ' is-invalid' : '').'"'
            .(!empty($this->id) ? ' id="'.$this->id.'"' : '')
            .' placeholder="'.$this->placeHolder.'"'
            .' name="'.$this->getKey().'">';

        if ($error) {
            $html .= '<div class="invalid-feedback">'.$this->error.'</div>';
        }
        return $html.'</div>';
    }
}
