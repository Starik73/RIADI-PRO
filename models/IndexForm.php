<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * IndexForm is the model behind the contact form.
 */
class IndexForm extends Model
{
    public $name;
    public $email;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['riadipro73@mail.ru' => $this->name])
                ->setSubject('Заполнена форма на сайте')
                ->setTextBody($this->body)
                ->send();

            return true;
    }

}
