<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreadCrump extends Model
{
    public $link;
    public $text;

    public function __construct($link_, $text_)
    {
        $this->link = $link_;
        $this->text = $text_;
    }
}
