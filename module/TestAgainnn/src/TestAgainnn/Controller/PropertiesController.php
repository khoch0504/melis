<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace TestAgainnn\Controller;

use Laminas\View\Model\ViewModel;
use Laminas\View\Model\JsonModel;
use Laminas\Session\Container;
use MelisCore\Controller\MelisAbstractActionController;

class PropertiesController extends MelisAbstractActionController
{

    public function renderPropertiesFormAction()
    {
        $view = new ViewModel();
        $form = $this->getForm();

        $id = $this->params()->fromQuery('id', 'add');
        $view->id = $id;

        if ($id != 'add'){
            $testAgainnnTable = $this->getServiceManager()->get('TestAgainnnTable');
            $data = $testAgainnnTable->getEntryById($id)->current();
            $form->bind($data);
        }

        $view->form = $form;

        return $view;
    }

    public function saveAction()
    {
        $translator = $this->getServiceManager()->get('translator');

        $success = 0;
        $textTitle = $translator->translate('tr_testagainnn_title');
        $textMessage = $translator->translate('tr_testagainnn_unable_to_save');
        $errors = [];

        $request = $this->getRequest();
        $id = null;
        $entryTitle = null;

        if ($request->isPost()){

            $this->getEventManager()->trigger('testagainnn_properties_save_start', $this, $request);

            // Result stored on session
            $container = new Container('testagainnn');
            $saveResult = $container['testagainnn-save-action'];

            if (!empty($saveResult['errors']))
                $errors = $saveResult['errors'];
            if (!empty($saveResult['data']))
                $data = $saveResult['data'];

            if (empty($errors)){
                $id = $data['id'];
                $success = 1;

                $entryTitle = $translator->translate('tr_testagainnn_common_entry_id').': '.$id;

                if ($request->getPost()['cal_id'] == 'add')
                    $textMessage = $translator->translate('tr_testagainnn_create_success');
                else
                    $textMessage = $translator->translate('tr_testagainnn_save_success');
            }

            // Unset temporary data on session
            unset($container['testagainnn-save-action']);
        }

        $response = [
            'success' => $success,
            'textTitle' => $textTitle,
            'textMessage' => $textMessage,
            'errors' => $errors
        ];

        if (!is_null($id)){
            $response['entryId'] = $id;
            $response['entryTitle'] = $entryTitle;
        }

        return new JsonModel($response);
    }

    public function savePropertiesAction()
    {
        $id = null;
        $entryTitle = null;
        $success = 0;
        $errors = [];

        $translator = $this->getServiceManager()->get('translator');

        $request = $this->getRequest();
        $formData = $request->getPost()->toArray();

        $testAgainnnForm = $this->getForm();



        $testAgainnnForm->setData($formData);

        if ($testAgainnnForm->isValid()){

            $formData = $testAgainnnForm->getData();





            foreach ($formData As $input => $val)
                if (empty($val) && !is_numeric($val))
                    $formData[$input] = null;

            if (is_numeric($formData['cal_id']))
                $id = $formData['cal_id'];
            else
                unset($formData['cal_id']);

            $testAgainnnService = $this->getServiceManager()->get('TestAgainnnService');
            $res = $testAgainnnService->saveItem($formData, $id);

            if (!is_null($res)){
                $id = $res;
                $success = 1;
            }
        }else{
            $errors = $testAgainnnForm->getMessages();
            foreach ($errors as $keyError => $valueError){
                $errors[$keyError]['label'] = $translator->translate("tr_testagainnn_input_".$keyError);
            }
        }

        $result = [
            'success' => $success,
            'errors' => $errors,
            'data' => ['id' => $id],
        ];

        return new JsonModel($result);
    }



    public function deleteAction()
    {
        $request = $this->getRequest();
        $queryData = $request->getQuery()->toArray();

        if (!empty($queryData['id'])){
            $testAgainnnService = $this->getServiceManager()->get('TestAgainnnService');
            $testAgainnnService->deleteItem($queryData['id']);
        }
    }

    private function getForm()
    {
        $melisCoreConfig = $this->getServiceManager()->get('MelisCoreConfig');
        $appConfigForm = $melisCoreConfig->getFormMergedAndOrdered('testagainnn/tools/testagainnn_tools/forms/testagainnn_property_form', 'testagainnn_property_form');

        // Factoring TestAgainnn event and pass to view
        $factory = new \Laminas\Form\Factory();
        $formElements = $this->getServiceManager()->get('FormElementManager');
        $factory->setFormElementManager($formElements);
        $form = $factory->createForm($appConfigForm);

        return $form;
    }
}