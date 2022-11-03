<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

use App\Models\Modeluser;

use App\Models\Model_Log;
use App\Models\Model_Layanan;
use App\Models\Model_Layanan_Kategori;
use App\Models\Model_Pengumuman;

use App\Models\Model_Survey;
use App\Models\Model_Ikpp;

use App\Models\Model_Survey_Url;
use App\Models\Model_Survey_Upd;
use App\Models\Model_Survey_Pnl;
use App\Models\Model_Survey_File;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'url', 'Tgl_indo'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();

		$this->user = new Modeluser;
	
		$this->log 				= new Model_Log;
		$this->pengumuman 		= new Model_Pengumuman;
		$this->layanan 			= new Model_Layanan;
		$this->layanan_kategori = new Model_Layanan_Kategori;

		$this->survey 			= new Model_Survey;
		$this->ikpp 			= new Model_Ikpp;

		$this->url 				= new Model_Survey_Url;
		$this->upd 				= new Model_Survey_Upd;
		$this->pnl 				= new Model_Survey_Pnl;
		$this->file				= new Model_Survey_File;
	}
}
