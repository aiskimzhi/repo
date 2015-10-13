<?php

namespace app\controllers;

use app\models\Category;
use app\models\City;
use app\models\Region;
use app\models\Subcategory;
use app\models\User;
use Yii;
use app\models\Advert;
use app\models\AdvertSearch;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdvertController implements the CRUD actions for Advert model.
 */
class AdvertController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Advert models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdvertSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $catList = ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name');
        $subcatList = ArrayHelper::map(Subcategory::find()->asArray()->all(), 'id', 'name');
        $regionList = ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name');
        $cityList = ArrayHelper::map(City::find()->asArray()->all(), 'id', 'name');

        if (Yii::$app->request->get() == null) {
            $submit = Html::submitButton('Search', [
                'class' => 'btn btn-success',
                'name' => 'search',
            ]);
        } else {
            $submit = Html::a('New Search', [Url::toRoute('advert/index')], ['class' => 'btn btn-warning']);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'catList' => $catList,
            'subcatList' => $subcatList,
            'regionList' => $regionList,
            'cityList' => $cityList,
            'submit' => $submit,
        ]);
    }

    /**
     * Displays a single Advert model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Updates an existing Advert model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Advert model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Advert model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Advert the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Advert::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Creates a new Advert model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $user = User::findOne(['id' => Yii::$app->user->id]);

        $catList = ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name');
        $subcatList = ArrayHelper::map(Subcategory::find()->asArray()->all(), 'id', 'name');
        $regionList = ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name');
        $cityList = ArrayHelper::map(City::find()->asArray()->all(), 'id', 'name');

        $model = new Advert();



        if ($model->load(Yii::$app->request->post())) {
            if ($model->createAdvert()) {
                return $this->redirect(['index']);
            }

            return $this->render('create', [
                'model' => $model,
                'user' => $user,
                'catList' => $catList,
                'subcatList' => $subcatList,
                'regionList' => $regionList,
                'cityList' => $cityList,
            ]);
        }

        return $this->render('create',
            [
                'model' => $model,
                'user' => $user,
                'catList' => $catList,
                'subcatList' => $subcatList,
                'regionList' => $regionList,
                'cityList' => $cityList
            ]);
    }

    public function actionGetSubcat($id) {

        $countSubcats = Subcategory::find()
            ->where(['category_id' => $id])
            ->count();

        $subcats = Subcategory::find()
            ->where(['category_id' => $id])
            ->orderBy('id ASC')
            ->all();

        if($countSubcats>0){
            echo '<option value="" selected="">- Choose a Subcategory -</option>';
            foreach($subcats as $subcat){
                echo "<option value='".$subcat->id."'>".$subcat->name."</option>";
            }
        }
        else{
            echo "<option></option>";
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }

    public function actionGetCity($id) {

        $countCities = City::find()
            ->where(['region_id' => $id])
            ->count();

        $cities = City::find()
            ->where(['region_id' => $id])
            ->orderBy('id ASC')
            ->all();

        if($countCities>0){
            echo '<option value="">- Choose a City -</option>';
            foreach($cities as $city){
                echo "<option value='".$city->id."'>".$city->name."</option>";
            }
        }
        else{
            echo "<option></option>";
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }
}
