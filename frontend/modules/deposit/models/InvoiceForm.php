<?php

namespace frontend\modules\deposit\models;

use Yii;

/**
 * This is the model class for table "{{%invoice}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $status
 * @property string $payCurrency
 * @property int|null $dueDate
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class InvoiceForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%invoice}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'payCurrency'], 'required'],
            [['user_id', 'status', 'dueDate', 'created_at', 'updated_at'], 'integer'],
            [['payCurrency'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'payCurrency' => 'Pay Currency',
            'dueDate' => 'Due Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
