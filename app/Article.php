<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown;

class Article extends Model
{
	// laravelでライブラリを使う練習

    public function parse() {
        //newでインスタンスを作る
        $parser = new Markdown();
        //bodyをパースする
        return $parser->parse($this->body);
	}

	public function getMarkBodyAttribute() {
        return $this->parse();
    }
}
