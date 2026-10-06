<?php
class block_meubloco extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_meubloco');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         = new stdClass();
        $this->content->text   = 'Olá! Este é meu primeiro plugin de bloco no Moodle.';
        $this->content->footer = 'Desenvolvido para atividade prática.';

        return $this->content;
    }
}
