<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Validarformulario;
use app\models\ValidarformularioAjax;
use yii\widgets\ActiveForm;


class DesarrolloController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
     /******************************************************************/
     public function actionIndex()
    {
       
      // $afip = new Afip(array('CUIT' => 23307295059));
        return $this->render('index');
    }
    /******************************************************************/
   
    public function actionSaludo()
    {
        $msj="bienvenidos a mi mundo";
        $arraySimple=[1,2,3,4,5,6,7,8,9,10];
        $arrayComlejo=["primero"=>"algo","segundo"=>"otra cosa","tercero"=>"mas datos"];
        return $this->render('saludo',['msj'=>$msj,'simple'=>$arraySimple,'complejo'=>$arrayComlejo]);
    }

    /******************************************************************/
    public function actionRequest()
    {
        $mensaje=null;
        if(isset($_REQUEST["nombre"]))
        {
            $mensaje="Bien, has enviado tu nombre correctamente".$_REQUEST["nombre"];
        }
        $this->redirect(["desarrollo/formulario","mensaje"=>$mensaje]);
    }
    /******************************************************************/
    public function actionValidarformulario()
    {
        $model= new validarFormulario;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                //Por ejemplo. contrular en la base de datos
            }else
                {
                    //mostrar errores
                }
        }
        return $this->render('validarFormulario',["model"=>$model]);
    }
    
    /******************************************************************/
    public function actionValidarformularioajax()
    {
        $model = new ValidarformularioAjax;
        $msg=null;

        if($model->load(Yii::$app->request->post())&&Yii::$app->request->isAjax)
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);

        }
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                //por ejemplo hacer consulta a la bd
                $msg="Validado correctamente";
                $model->nombre=null;
                $model->email=null;

            }else
                {   
                    $model->getErrors();
            }   
        }
        return $this->render('validarformularioajax',['model'=>$model,"msg"=>$msg]);

    }

    public function actionFormulario($mensaje=null)
    {
    
        return $this->render("formulario",["mensaje"=>$mensaje]);

    }
}
 ?>