<?php

class Page {
    private $title = "";
    private $description = "";

    public function title($n="") {
        if(!empty($n)) $this->title = $n;
        else return $this->title;
    }

    public function url_title() {
        return urlencode($this->title);
    }

    public function description($d="") {
        if(!empty($d)) $this->description = $d;
        else return $this->description;
    }
}

$page = new Page();