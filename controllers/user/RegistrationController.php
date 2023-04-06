<?php

namespace app\controllers\user;

use dektrium\user\controllers\RegistrationController as BaseRegistrationController;


class RegistrationController extends BaseRegistrationController
{

    public function actionIndex()
    {
        
    }


































    // const EVENT_BEFORE_REGISTER = 'beforeRegister';
    // const EVENT_AFTER_REGISTER = 'afterRegister';
    // const EVENT_BEFORE_CONNECT = 'beforeConnect';
    // const EVENT_AFTER_CONNECT = 'afterConnect';
    // const EVENT_BEFORE_CONFIRM = 'beforeConfirm';
    // const EVENT_AFTER_CONFIRM = 'afterConfirm';
    // const EVENT_BEFORE_RESEND = 'beforeResend';
    // const EVENT_AFTER_RESEND = 'afterResend';




    // public function actionIndex()
    // {
    //     if (!$this->module->enableRegistration) {
    //         throw new NotFoundHttpException();
    //     }

    //     /** @var RegistrationForm $model */
    //     $model = \Yii::createObject(Registration::className());
    //     $event = $this->getFormEvent($model);

    //     $this->trigger(self::EVENT_BEFORE_REGISTER, $event);

    //     $this->performAjaxValidation($model);

    //     if ($model->load(\Yii::$app->request->post()) && $model->register()) {
    //         $this->trigger(self::EVENT_AFTER_REGISTER, $event);

    //         return $this->render('/message', [
    //             'title'  => \Yii::t('user', 'Your account has been created'),
    //             'module' => $this->module,
    //         ]);
    //     }

    //     return $this->render('register', [
    //         'model'  => $model,
    //         'module' => $this->module,
    //     ]);
    // }


    // public function actionConnect($code)
    // {
    //     $account = $this->finder->findAccount()->byCode($code)->one();

    //     if ($account === null || $account->getIsConnected()) {
    //         throw new NotFoundHttpException();
    //     }

    //     /** @var User $user */
    //     $user = \Yii::createObject([
    //         'class'    => User::className(),
    //         'scenario' => 'connect',
    //         'username' => $account->username,
    //         'email'    => $account->email,
    //         'phone'    => $account->phone,
    //     ]);

    //     $event = $this->getConnectEvent($account, $user);

    //     $this->trigger(self::EVENT_BEFORE_CONNECT, $event);

    //     if ($user->load(\Yii::$app->request->post()) && $user->create()) {
    //         $account->connect($user);
    //         $this->trigger(self::EVENT_AFTER_CONNECT, $event);
    //         \Yii::$app->user->login($user, $this->module->rememberFor);
    //         return $this->goBack();
    //     }

    //     return $this->render('connect', [
    //         'model'   => $user,
    //         'account' => $account,
    //     ]);
    // }

    // public function actionConfirm($id, $code)
    // {
    //     $user = $this->finder->findUserById($id);

    //     if ($user === null || $this->module->enableConfirmation == false) {
    //         throw new NotFoundHttpException();
    //     }

    //     $event = $this->getUserEvent($user);

    //     $this->trigger(self::EVENT_BEFORE_CONFIRM, $event);

    //     $user->attemptConfirmation($code);

    //     $this->trigger(self::EVENT_AFTER_CONFIRM, $event);

    //     return $this->render('/message', [
    //         'title'  => \Yii::t('user', 'Account confirmation'),
    //         'module' => $this->module,
    //     ]);
    // }

   
    // public function actionResend()
    // {
    //     if ($this->module->enableConfirmation == false) {
    //         throw new NotFoundHttpException();
    //     }

    //     /** @var ResendForm $model */
    //     $model = \Yii::createObject(ResendForm::className());
    //     $event = $this->getFormEvent($model);

    //     $this->trigger(self::EVENT_BEFORE_RESEND, $event);

    //     $this->performAjaxValidation($model);

    //     if ($model->load(\Yii::$app->request->post()) && $model->resend()) {
    //         $this->trigger(self::EVENT_AFTER_RESEND, $event);

    //         return $this->render('/message', [
    //             'title'  => \Yii::t('user', 'A new confirmation link has been sent'),
    //             'module' => $this->module,
    //         ]);
    //     }

    //     return $this->render('resend', [
    //         'model' => $model,
    //     ]);
    // }
}
