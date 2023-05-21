<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller LearningPath
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class LearningPath extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
		$data['sidebar'] = $this->load->view('admin/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('admin/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('admin/layouts/components/footer', '', TRUE);
		$data['content_view'] = "admin/master/learning_path/index";

		$this->load->view('admin/layouts', $data);
  }

}


/* End of file LearningPath.php */
/* Location: ./application/controllers/LearningPath.php */
