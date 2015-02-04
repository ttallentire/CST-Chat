<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RoomList extends Application {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'roomlist';
        
        // retrieve all of the rooms available
        $source = $this->roomlists->all();
        
        $rooms = array();
        
        // populate the rooms array
        foreach ($source as $record)
        {
            $rooms[] = array('name' => $record['name'], 'capacity' => $record['capacity'], 'link' => $record['link']);
        }
        
        // render the page with the newly added data
        $this->data['rooms'] = $rooms;
		$this->render();
	}
}

/* End of file roomlist.php */
/* Location: ./application/controllers/RoomList.php */