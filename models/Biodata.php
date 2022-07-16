<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property string $id_biodata
 * @property string $nim
 * @property string $nama
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_biodata', 'nim', 'nama'], 'required'],
            [['id_biodata'], 'string', 'max' => 11],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_biodata' => 'Id Biodata',
            'nim' => 'Nim',
            'nama' => 'Nama',
        ];
    }
}
