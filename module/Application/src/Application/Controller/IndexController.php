<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Common\Controller\MainController;
use Application\Entity\WebsiteTbClient;
use Application\Entity\WebsiteTbTechnicalReport;
use Zend\Validator\NotEmpty;
use Application\Entity\WebsiteTbTechnicalReportDetail;
use Common\Classes\String;

class IndexController extends MainController
{
    public function indexAction()
    {
        $this->needLogin = false;

        if ($this->getServiceLocator()->get('AuthService')->hasIdentity()){
           return $this->redirect()->toRoute('dashboard');
        }

        return new ViewModel();
    }

    public function dashboardAction()
    {
        $reports = $this->em->getRepository('Application\Entity\WebsiteTbTechnicalReport')->findAll();
        $array = array(
            'reports' => $reports
        );
        return new ViewModel($array);
    }

    public function createAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $client_obj = new WebsiteTbClient();
            $client_obj->setClivName($request->getPost('clivName'));
            $this->em->persist($client_obj);

            list($dd, $mm, $yy) = explode("-", $request->getPost('terdDate'));
            $date = $yy . "-" . $mm . "-" . $dd;
            $startHour = date("Y-m-d H:i:s", strtotime($date . " " . $request->getPost('terdStartHour')));
            $endHour = date("Y-m-d H:i:s", strtotime($date . " " . $request->getPost('terdEndHour')));
            $date = date("Y-m-d", strtotime($date));

            $report_obj = new WebsiteTbTechnicalReport();
            $report_obj->setClii($client_obj)
                       ->setTervService($request->getPost('tervService'))
                       ->setTerdDate(new \DateTime($date))
                       ->setTerdStarthour(new \DateTime($startHour))
                       ->setTerdEndhour(new \DateTime($endHour))
                       ->setTertUsedProduct($request->getPost('tertUsedProduct'))
                       ->setTertPersonal($request->getPost('tertPersonal'));
            $this->em->persist($report_obj);

            $this->em->flush();

            return $this->redirect()->toRoute('dashboard');
        }
    }

    public function viewAction()
    {
        $id = $this->params()->fromRoute('id', false);

        $notEmpty_obj = new NotEmpty();
        if(!$notEmpty_obj->isValid($id))
        {
            $id = false;
        }

        if(!is_numeric($id) || $id<=0)
        {
            $id = false;
        }

        $report = $this->em->find('Application\Entity\WebsiteTbTechnicalReport', $id);
        $details = $this->em->getRepository('Application\Entity\WebsiteTbTechnicalReportDetail')->findBy(array('teri'=>$id));

        $array = array(
            'report' => $report,
            'details' => $details
        );

        return new ViewModel($array);
    }

    public function editAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $id = $request->getPost('teriId');

            $report = $this->em->find('Application\Entity\WebsiteTbTechnicalReport', $id);

            $client = $this->em->find('Application\Entity\WebsiteTbClient', $report->getClii()->getCliiId());
            $client->setClivName($request->getPost('clivName'));
            $this->em->persist($client);

            list($dd, $mm, $yy) = explode("-", $request->getPost('terdDate'));
            $date = $yy . "-" . $mm . "-" . $dd;
            $startHour = date("Y-m-d H:i:s", strtotime($date . " " . $request->getPost('terdStartHour')));
            $endHour = date("Y-m-d H:i:s", strtotime($date . " " . $request->getPost('terdEndHour')));
            $date = date("Y-m-d", strtotime($date));

            $report->setTervService($request->getPost('tervService'))
                   ->setTerdDate(new \DateTime($date))
                   ->setTerdStarthour(new \DateTime($startHour))
                   ->setTerdEndhour(new \DateTime($endHour))
                   ->setTertUsedProduct($request->getPost('tertUsedProduct'))
                   ->setTertPersonal($request->getPost('tertPersonal'));
            $this->em->persist($report);

            $this->em->flush();

            return $this->redirect()->toRoute('view-service', array('id'=>$id));
        }

        $id = $this->params()->fromRoute('id', false);

        $notEmpty_obj = new NotEmpty();
        if(!$notEmpty_obj->isValid($id))
        {
            $id = false;
        }

        if(!is_numeric($id) || $id<=0)
        {
            $id = false;
        }

        if(!$id)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $report = $this->em->find('Application\Entity\WebsiteTbTechnicalReport', $id);

        $array = array(
            'report' => $report
        );

        return new ViewModel($array);
    }

    public function deleteAction()
    {

        $id = $this->params()->fromRoute('id', false);

        $notEmpty_obj = new NotEmpty();
        if(!$notEmpty_obj->isValid($id))
        {
            $id = false;
        }

        if(!is_numeric($id) || $id<=0)
        {
            $id = false;
        }

        if(!$id)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $report = $this->em->find('Application\Entity\WebsiteTbTechnicalReport', $id);

        $details = $this->em->getRepository('Application\Entity\WebsiteTbTechnicalReportDetail')->findBy(array('teri'=>$id));

        foreach($details as $detail)
        {
            $this->em->remove($detail);
            $this->em->flush();
        }

        $this->em->remove($report);
        $this->em->flush();

        return $this->redirect()->toRoute('dashboard');
    }

    public function addAreaAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $files_tmp = $_FILES['trdvPhoto'];

            if(!empty($files_tmp) && $files_tmp['error']!=4)
            {
                $fileName = String::text2url($files_tmp['name']);
                $fileTmp = $files_tmp['tmp_name'];

                move_uploaded_file($fileTmp, WWW_ROOT.$fileName);
            }

            $report = $this->em->find('Application\Entity\WebsiteTbTechnicalReport', $request->getPost('teriId'));

            $detail = new WebsiteTbTechnicalReportDetail();
            $detail->setTeri($report)
                   ->setTrdvArea($request->getPost('trdvArea'))
                   ->setTrdtObservation($request->getPost('trdtObservation'))
                   ->setTrdtAction($request->getPost('trdtAction'));
            if(isset($fileName))
            {
                $detail->setTrdvPhoto($fileName);
            }
            $this->em->persist($detail);

            $this->em->flush();

            return $this->redirect()->toRoute('view-service', array('id'=>$request->getPost('teriId')));
        }
        else
        {
            $id = $this->params()->fromRoute('id', false);

            $notEmpty_obj = new NotEmpty();
            if(!$notEmpty_obj->isValid($id))
            {
                $id = false;
            }

            if(!is_numeric($id) || $id<=0)
            {
                $id = false;
            }

            if(!$id)
            {
                return $this->redirect()->toRoute('dashboard');
            }

            return new ViewModel(array('teriId'=>$id));
        }
    }

    public function editAreaAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $files_tmp = $_FILES['trdvPhoto'];

            if(!empty($files_tmp) && $files_tmp['error']!=4)
            {
                $fileName = String::text2url($files_tmp['name']);
                $fileTmp = $files_tmp['tmp_name'];

                move_uploaded_file($fileTmp, WWW_ROOT.$fileName);
            }

            $detail = $this->em->find('Application\Entity\WebsiteTbTechnicalReportDetail', $request->getPost('trdiId'));
            $detail->setTrdvArea($request->getPost('trdvArea'))
                   ->setTrdtObservation($request->getPost('trdtObservation'))
                   ->setTrdtAction($request->getPost('trdtAction'));
            if(isset($fileName))
            {
                $detail->setTrdvPhoto($fileName);
            }
            $this->em->persist($detail);

            $this->em->flush();

            return $this->redirect()->toRoute('view-service', array('id'=>$detail->getTeri()->getTeriId()));
        }
        else
        {
            $id = $this->params()->fromRoute('id', false);

            $notEmpty_obj = new NotEmpty();
            if(!$notEmpty_obj->isValid($id))
            {
                $id = false;
            }

            if(!is_numeric($id) || $id<=0)
            {
                $id = false;
            }

            if(!$id)
            {
                return $this->redirect()->toRoute('dashboard');
            }

            $detail = $this->em->find('Application\Entity\WebsiteTbTechnicalReportDetail', $id);

            return new ViewModel(array('trdiId'=>$id, 'detail'=>$detail));
        }
    }

    public function deleteAreaAction()
    {
        $id = $this->params()->fromRoute('id', false);

        $notEmpty_obj = new NotEmpty();
        if(!$notEmpty_obj->isValid($id))
        {
            $id = false;
        }

        if(!is_numeric($id) || $id<=0)
        {
            $id = false;
        }

        if(!$id)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $detail = $this->em->find('Application\Entity\WebsiteTbTechnicalReportDetail', $id);
        $id = $detail->getTeri()->getTeriId();
        $this->em->remove($detail);
        $this->em->flush();

        return $this->redirect()->toRoute('view-service', array('id'=>$id));
    }
}















