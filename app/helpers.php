<?php
    function get_settings($args)
    {
        $data = [];
        if(!is_null($args)){
            foreach($args as $value){
                $data[$value] = '';
            }
            $settings = DB::table('settings')->whereIn('slug_settings', $args)->select('slug_settings', 'name_settings', 'name')->get();
            if(!is_null($settings)){
                foreach($settings as $setting){
                    $data[$setting->slug_settings] = [
                        $setting->name_settings,
                        $setting->name
                    ];
                }
            }
        }
        return $data;
    }
?>