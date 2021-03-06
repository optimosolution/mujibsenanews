<?php

class SiteController extends Controller {

    public $layout = '//layouts/column1';

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'contact', 'login', 'logout', 'captcha'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'logout'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'logout'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->pageTitle = Yii::app()->name;
        Yii::app()->clientScript->registerMetaTag(Yii::app()->name . ' - "The Most Read Bangla Newspaper, Brings You Latest Bangla News Online. Get Breaking News From The Most Reliable Bangladesh Newspaper..', 'description');
        Yii::app()->clientScript->registerMetaTag("Banglanews, Banglanews24, Dhaka, Bangladesh, News, Breaking News, Breakingnews, newspaper, online news portal, Bangladesh News, World News, Asia News, Bengali Newspaper, Bangla News Online, Bangladeshi Newspaper, News paper Bangladesh, Daily news paper in bangladesh, daily newspapers of bangladesh, daily newspaper, Current News, Bengali daily newspaper, Internet Newspaper, National, International, Politics, Business, Sports, Entertainment, Technology, Education, Health, Lifestyle, Feature, Literature, share market, Ichchheghuri, Technology, Malaysia, New York, aviatour, Chittagong, Islam, open forum, Traveling, Travelers notebook, Citizen opinion, Awami League, BNP, Jatiya Party, Politics, Parliament, Sangsad, Sheikh Hasina, Khaleda Zia, Ershad, Sunny Leone, Facebook, twitter, Google, Angelina Jolie, Shakira, song, dance, Company, Economy, Industry, Markets, Education, Entertainment, Arts, Books, Celebrities, Movies, Music, TV, Headlines, Health, Humor, Legal, Lifestyle, Automotive, Culture, Food and Beverage, Home, Garden, Theater, Travel, Nation, Politics, Religion, Science, Environment, Geography, Space, Sports, America, Football, Athletics, Badminton, Baseball, Basketball, Cricket, Cycling, Hockey, Golf, Handball, School, Olympics, Racing, Tennis, Computer, Internet, Video Games, Weird News, World, bdnews24, Daily Star, Prothom Alo, BDNEWS, stock market, Foreign Education, Yunus, Tarique, War Crimes Tribunal, 1971, English Version, Bangla Version, Hello, Opinion, Lifestyle, Kidz, Cricket, Blog, Kids, Human Rights, Business Study, Movies, Films, Cinema, Technology News, Obama, Mobile Court, Dhaka Metropolitan Police, Facebook, Blockade, Countrywide Strike, Handmade Bombs, RAB, Shibir Activists, Jamaat-e-Islami, BNP, AL, Dialogue, BBC News, Environment, Breaking News, Top news", 'keywords');
        //Recent news
        $criteria = new CDbCriteria;
        $criteria->addCondition('state=1 AND catid !=1');
        $criteria->order = 'ordering DESC, created DESC';
        $dataProvider = new CActiveDataProvider('Content', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        //Featured articles
        $criteria_featured = new CDbCriteria;
        $criteria_featured->addCondition('state=1 AND catid !=1 AND featured=1');
        $criteria_featured->order = 'created DESC';
        $dataProvider_featured = new CActiveDataProvider('Content', array(
            'criteria' => $criteria_featured,
            'pagination' => array(
                'pageSize' => 6,
            ),
        ));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'dataProvider_featured' => $dataProvider_featured,
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $this->layout = 'column2';
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginFormUser;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginFormUser'])) {
            $model->attributes = $_POST['LoginFormUser'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $audit = new AuditTrail;
                $audit->user_id = Yii::app()->user->id;
                $audit->user_type = 0;
                $audit->login_time = new CDbExpression('NOW()');
                $audit->save();
                Yii::app()->user->setFlash('success', 'Welcome in the <strong>' . CHtml::encode(Yii::app()->name) . '</strong>. Don\'t forget to <strong>Logout</strong> when finish!');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        if (@Yii::app()->user->id) {
            Yii::app()->db->createCommand('UPDATE {{audit_trail}} SET `logout_time` = NOW() WHERE user_id=' . Yii::app()->user->id . ' ORDER BY login_time DESC LIMIT 1')->execute();
        }

        Yii::app()->user->logout();
        Yii::app()->user->setFlash('success', 'Logout Successful! You can improve your security further after logging out by closing this opened browser.');
        $this->redirect(Yii::app()->homeUrl);
    }

}
