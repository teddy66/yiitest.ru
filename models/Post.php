<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Post
 *
 * @author Ирина
 */
class Post extends ActiveRecord {
    //put your code here
    public static function tableName() {
        return 'post';
    }
}
