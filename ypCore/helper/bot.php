<?php 

function checkBot()
{
	require ();
	foreach ($bots as $name => $values)
	{
		$is_bot = false;

		if ($values['agent'] and preg_match('#' . str_replace('\*', '.*?', nv_preg_quote($values['agent'], '#')) . '#i', $client_info['agent']))
			$is_bot = true;

		if (!empty($values['ips']) and ($is_bot or !$values['agent']))
		{
			$is_bot = false;
			$ips = implode("|", array_map("nv_preg_quote", explode("|", $values['ips'])));
			if (preg_match("/^" . $ips . "/", $client_info['ip']))
				$is_bot = true;
		}

		if ($is_bot)
			return array('name' => $name, 'agent' => $values['agent'], 'ip' => $client_info['ip'], 'allowed' => $values['allowed']);
	}
}