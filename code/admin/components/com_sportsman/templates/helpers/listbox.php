<?php

class ComSportsmanTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
    public function sports( $config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'model'    => 'sports',
            'name'     => 'sportsman_sport_id',
            'value'    => 'id',
            'text'     => 'title',
            'prompt'   => '- Select Sport -',
            'attribs'  => array('id' => $config->name)
        ));
        return parent::_listbox($config);
    }
    
    public function divisions( $config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'model'    => 'divisions',
            'name'     => 'sportsman_division_id',
            'value'    => 'id',
            'text'     => 'title',
            'prompt'   => '- Select Division -',
            'attribs'  => array('id' => $config->name)
        ));
        return parent::_listbox($config);
    }
}