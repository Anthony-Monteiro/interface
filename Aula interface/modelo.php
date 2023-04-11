<?php

class Template implements iTemplate
{
    private $vars = array();
    public function setVariable($nome, $var)
    {
        $this->vars[$nome] = $var;
    }
    public function getHtml($template)
    {
        foreach($this->vars as $nome => $value)
        {
            $template = str_replace('{'.$nome.'}', $value, $template);
        }
        return $template;
    }
}



?>