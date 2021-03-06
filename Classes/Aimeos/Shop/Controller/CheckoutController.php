<?php

/**
 * @license LGPLv3, http://www.gnu.org/copyleft/lgpl.html
 * @copyright Aimeos (aimeos.org), 2015-2016
 * @package flow
 * @subpackage Controller
 */


namespace Aimeos\Shop\Controller;

use TYPO3\Flow\Annotations as Flow;


/**
 * Aimeos checkout controller.
 * @package flow
 * @subpackage Controller
 */
class CheckoutController extends AbstractController
{
	/**
	 * Returns the output of the checkout confirm component
	 *
	 * @return string Rendered HTML for the body
	 */
	public function confirmComponentAction()
	{
		$this->view->assign( 'output', $this->getOutput( 'checkout/confirm' ) );
	}


	/**
	 * Returns the output of the checkout standard component
	 *
	 * @return string Rendered HTML for the body
	 */
	public function standardComponentAction()
	{
		$this->view->assign( 'output', $this->getOutput( 'checkout/standard' ) );
	}


	/**
	 * Returns the output of the checkout update component
	 *
	 * @return string Rendered HTML for the body
	 */
	public function updateComponentAction()
	{
		$this->view->assign( 'output', $this->getOutput( 'checkout/update' ) );
	}


	/**
	 * Content for checkout standard page
	 *
	 * @Flow\Session(autoStart = TRUE)
	 */
	public function indexAction()
	{
		$this->view->assignMultiple( $this->getSections( 'checkout-index' ) );
	}


	/**
	 * Content for checkout confirm page
	 *
	 * @Flow\Session(autoStart = TRUE)
	 */
	public function confirmAction()
	{
		$this->view->assignMultiple( $this->getSections( 'checkout-confirm' ) );
	}


	/**
	 * Returns the view for the order update page.
	 *
	 * @return Response Response object containing the generated output
	 */
	public function updateAction()
	{
		$this->view->assignMultiple( $this->getSections( 'checkout-update' ) );
	}
}
