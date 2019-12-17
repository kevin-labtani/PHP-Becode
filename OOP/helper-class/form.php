<?php

class Form
{
    public $surround = 'p';
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function create($action)
    {
        return '<form action="index.php" method="'.$action.'">';
    }

    public function end()
    {
        return '</form>';
    }

    public function submit()
    {
        return '<button type="submit">Envoyer</submit>';
    }

    public function text($string)
    {
        return $this->surround('
        <label for="'.$string.'">'.$string.'</label>
        <input type="text" name="'.$string.'" value="'.$this->getValue($string).'">
        ');
    }

    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
}
