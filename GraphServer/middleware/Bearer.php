<?php


namespace app\middleware;


use yii\filters\auth\HttpBearerAuth;

class Bearer extends HttpBearerAuth
{
    public function handleFailure($response)
    {
        $response->setStatusCode(403);
        $response->data = 'Необходимо авторизоваться в системе';
        parent::handleFailure($response); // TODO: Change the autogenerated stub
    }
}