<?php
class Event_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /**
     * Function to return event informtion
     */
<<<<<<< HEAD
    function getEvents()
    {
        $result = $this->db->select('*')->from('events')->order_by('date')->get();
        return $result->result();
    }
=======
    /*function getEvents()
    {
        $result = $this->db->select('*')->from('events')->order_by('date')->get();
        return $result->result();
    }*/

    function getEvents() {
        $response = http_get(constant("API_URL") . "/api/events");
        $body = http_parse_message($response)->body;
        $body = json_decode($body);
        return $body;
    }

>>>>>>> 550b510db1043461989ad293a1f567c94694e9dd
    
    function saveEvent($event)
    {
        $this->db->insert('events',$event);
        $this->db->insert_id()?'yes':'no';
    }
    
    function deleteEvent($id)
    {
        $this->db->delete('events', array('Id' => $id)); 
    }
    
    function updateEvent($id, $event) {
        $this->db->where('Id', $id);
        $this->db->update('events', $event);
    }
}