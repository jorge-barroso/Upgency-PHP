<?php
    function getEmail($template, $args)
    {
        $email = file_get_contents($template);
        foreach($args as $key => $value)
        {
            $email = str_replace('${'.$key.'}', $value, $email);
        }

        return $email;
    }