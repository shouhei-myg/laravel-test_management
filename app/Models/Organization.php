<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model {
    use HasFactory;

    // モデルに関連づけるテーブル
    protected $table = 'organization';

    // テーブルに関連付けつる主キー
    protected $protected = 'id';

    // 一覧画面表示用にOrganizationテーブルから全てのデータを取得
    public function findAllOrganizations()
    {
        return Organization::all();
    }
}
