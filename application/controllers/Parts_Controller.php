<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parts
 *
 * @author Billy
 */
class Parts_Controller extends Application{
    //put your code here
    	public function index()
	{
		$this->data['pagebody'] = 'parts_view';
                echo "Just before asking for all";
                $source = $this->parts->all();
                sort($source);
                $parts_onhand = array();
                foreach ($source as $record)
		{
			$parts_onhand[] = array ('part_code' => $record['part_code'], 'image' => $record['image'],
                            'certificate' => $record['certificate'], 'ahref' => $record['ahref']);
                        //$parts_onhand[] = array ('part_code' => $record['part_code'], 'image' => $record['image'], 'href' => $record['where']);
		}
                $this->data['parts'] = $parts_onhand;
		$this->render(); 
	}
}
