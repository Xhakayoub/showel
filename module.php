<?php

namespace showel;

 use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
 use Zend\ModuleManager\Feature\ConfigProviderInterface;
 use Omeka\Module\AbstractModule;
 use Zend\Mvc\Controller\AbstractController;
 use Zend\ServiceManager\ServiceLocatorInterface;
 use Zend\View\Renderer\PhpRenderer;

 class Module extends AbstractModule
{
   


     public function uninstall(ServiceLocatorInterface $serviceLocator)
    {
        $settings = $serviceLocator->get('Omeka\Settings');
        $settings->delete('showel_directory');
        $settings->delete('showel_delete_file');
    }

 

     public function getConfig()
     {
         return include __DIR__ . '/config/module.config.php';
     }

     public function getConfigForm(PhpRenderer $renderer)
    {
        $settings = $this->getServiceLocator()->get('Omeka\Settings');
        $form = new ConfigForm;
        $form->init();
        $form->setData([
            'directory' => $settings->get('showel_directory'),
            'delete_file' => $settings->get('showel_delete_file', 'no'),
        ]);
        return $renderer->formCollection($form, false);
    }

    public function handleConfigForm(AbstractController $controller)
    {
        $settings = $this->getServiceLocator()->get('Omeka\Settings');
        $form = new ConfigForm;
        $form->init();
        $form->setData($controller->params()->fromPost());
        if (!$form->isValid()) {
            $controller->messenger()->addErrors($form->getMessages());
            return false;
        }
        $formData = $form->getData();
        $settings->set('showel_directory', $formData['directory']);
        $settings->set('showel_delete_file', $formData['delete_file']);
        return true;
    }
 }