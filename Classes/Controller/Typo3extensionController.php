<?php

declare(strict_types=1);

namespace Typo3\Typo3extension\Controller;


/**
 * This file is part of the "Typo3 Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 Malhar Rathod <rathodm1996@gmail.com>
 */

/**
 * Typo3extensionController
 */
class Typo3extensionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * typo3extensionRepository
     *
     * @var \Typo3\Typo3extension\Domain\Repository\Typo3extensionRepository
     */
    protected $typo3extensionRepository;
    public function __construct()
    {
    }

    /**
     * @param \Typo3\Typo3extension\Domain\Repository\Typo3extensionRepository $typo3extensionRepository
     */
    public function injectTypo3extensionRepository(\Typo3\Typo3extension\Domain\Repository\Typo3extensionRepository $typo3extensionRepository)
    {
        $this->typo3extensionRepository = $typo3extensionRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $typo3extensions = $this->typo3extensionRepository->findAll();
        $this->view->assign('typo3extensions', $typo3extensions);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('typo3extension', $typo3extension);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Typo3\Typo3extension\Domain\Model\Typo3extension $newTypo3extension
     */
    public function createAction(\Typo3\Typo3extension\Domain\Model\Typo3extension $newTypo3extension): \Psr\Http\Message\ResponseInterface
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->typo3extensionRepository->add($newTypo3extension);
        return $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("typo3extension")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('typo3extension', $typo3extension);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension
     */
    public function updateAction(\Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension): \Psr\Http\Message\ResponseInterface
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->typo3extensionRepository->update($typo3extension);
        return $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension
     */
    public function deleteAction(\Typo3\Typo3extension\Domain\Model\Typo3extension $typo3extension): \Psr\Http\Message\ResponseInterface
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->typo3extensionRepository->remove($typo3extension);
        return $this->redirect('list');
    }
}
