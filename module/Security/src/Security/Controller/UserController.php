<?php
namespace Security\Controller;

use Common\Controller\MainController;
use Zend\View\Model\ViewModel;
use Common\Classes\Encrypt;
use Zend\Validator\NotEmpty;
use Application\Entity\WebsiteTbSecurityEntity;
use Application\Entity\WebsiteTbSecurityUser;
use Application\Entity\WebsiteTbSecurityUserDescription;
use Zend\Validator\EmailAddress;

class UserController extends MainController
{
    public function listAction()
    {
        if($this->userId != 1)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $users = $this->em->getRepository('Application\Entity\WebsiteTbSecurityUserDescription')->findAll();

        $array = array(
            'users' => $users
        );

        return new ViewModel($array);
    }

    public function createAction()
    {
        if($this->userId != 1)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $request = $this->getRequest();
        if($request->isPost())
        {
            $susvLogin = md5(trim($request->getPost('susvLoginname')));
            $susvLoginname = trim($request->getPost('susvLoginname'));

            $user = $this->em->getRepository('Application\Entity\WebsiteTbSecurityUser')->findBy(array('susvLogin'=>$susvLogin));

            $notEmpty_obj = new NotEmpty();

            $email_obj = new EmailAddress();
            if(!$email_obj->isValid($susvLoginname))
            {
                return $this->redirect()->toRoute('user-list');
            }

            if($notEmpty_obj->isValid($user))
            {
                return $this->redirect()->toRoute('user-list');
            }

            if(md5($request->getPost('susvPassword')) != md5($request->getPost('rePassword')))
            {
                return $this->redirect()->toRoute('user-list');
            }

            $susvPassword = Encrypt::encrypt(trim($request->getPost('susvPassword')), trim($request->getPost('susvLoginname')));

            $entityType = $this->em->find('Application\Entity\WebsiteTbSecurityEntityType', 1);

            $entity_obj = new WebsiteTbSecurityEntity();
            $entity_obj->setSeti($entityType)
                       ->setSenyStatus(1)
                       ->setSeniCreatedBy(1)
                       ->setSendCreatedDate(new \DateTime("now"))
                       ->setSenvCreatedIp($_SERVER['REMOTE_ADDR']);
            $this->em->persist($entity_obj);

            $user_obj = new WebsiteTbSecurityUser();
            $user_obj->setSeni($entity_obj)
                     ->setSusvLogin($susvLogin)
                     ->setSusvLoginname($susvLoginname)
                     ->setSusvPassword($susvPassword)
                     ->setSusyStatus(1)
                     ->setSusiCreatedBy(1)
                     ->setSusdCreatedDate(new \DateTime("now"))
                     ->setSusvCreatedIp($_SERVER['REMOTE_ADDR']);
            $this->em->persist($user_obj);

            $userDescription_obj = new WebsiteTbSecurityUserDescription();
            $userDescription_obj->setSusi($user_obj)
                                ->setSudvName(trim($request->getPost('sudvName')))
                                ->setSudvLastname(trim($request->getPost('sudvLastname')))
                                ->setSudiCreatedBy(1)
                                ->setSuddCreatedDate(new \DateTime("now"))
                                ->setSudvCreatedIp($_SERVER['REMOTE_ADDR']);
            $this->em->persist($userDescription_obj);

            $this->em->flush();

            return $this->redirect()->toRoute('user-list');
        }
        else
        {
            return $this->redirect()->toRoute('dashboard');
        }
    }

    public function editAction()
    {
        if($this->userId != 1)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $request = $this->getRequest();
        if($request->isPost())
        {
            $notEmpty_obj = new NotEmpty();
            if($notEmpty_obj->isValid($request->getPost('susvPassword')))
            {
                if(md5($request->getPost('susvPassword')) == md5($request->getPost('rePassword')))
                {
                    $user = $this->em->find('Application\Entity\WebsiteTbSecurityUser', $request->getPost('susiId'));
                    $susvPassword = Encrypt::encrypt(trim($request->getPost('susvPassword')), $user->getSusvLoginname());
                    $user->setSusvPassword($susvPassword);
                    $this->em->persist($user);
                    $this->em->flush();
                }
            }

            $userDescription = $this->em->getRepository('Application\Entity\WebsiteTbSecurityUserDescription')->findOneBySusi($request->getPost('susiId'));
            $userDescription->setSudvName(trim($request->getPost('sudvName')))
                            ->setSudvLastname(trim($request->getPost('sudvLastname')));

            $this->em->persist($userDescription);
            $this->em->flush();

            return $this->redirect()->toRoute('user-list');
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

            if($id === false)
            {
                return $this->redirect()->toRoute('dashboard');
            }

            $user = $this->em->getRepository('Application\Entity\WebsiteTbSecurityUserDescription')->findOneBySusi($id);

            $array = array(
                'user' => $user
            );

            return new ViewModel($array);
        }
    }

    public function deleteAction()
    {
        if($this->userId != 1)
        {
            return $this->redirect()->toRoute('dashboard');
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

        if($id === false)
        {
            return $this->redirect()->toRoute('dashboard');
        }

        $userDescription = $this->em->getRepository('Application\Entity\WebsiteTbSecurityUserDescription')->findOneBySusi($id);
        $user = $this->em->find('Application\Entity\WebsiteTbSecurityUser', $userDescription->getSusi()->getSusiId());
        $entity = $this->em->find('Application\Entity\WebsiteTbSecurityEntity', $user->getSeni()->getSeniId());

        $this->em->remove($userDescription);
        $this->em->remove($user);
        $this->em->remove($entity);
        $this->em->flush();

        return $this->redirect()->toRoute('user-list');
    }
}

?>