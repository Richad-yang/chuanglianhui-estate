<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\bo\form\LoginForm;

/**
 * Login controller
 */
class LoginController extends Controller
{
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'login.php';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
}
