<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

    use HasFactory;

    // モデルに関連づけるテーブル
    protected $table = 'organizations';

    // テーブルに関連付けつる主キー
    protected $primaryKey = 'id';

    // 登録、更新可能なカラム指定
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    // 一覧画面表示用にOrganizationテーブルから全てのデータを取得
    public function findAllOrganizations() {

        return Organization::all();
    }

    public function InsertOrganization($request) {

        return $this->create([
            'name' => $request->name,
        ]);
    }
}
