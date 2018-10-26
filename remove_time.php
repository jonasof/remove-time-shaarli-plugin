<?php

function hook_remove_time_save_link ($data)
{
  $data['created'] = new Datetime($data['created']->format('Y-m-d'));

  return $data;
}
