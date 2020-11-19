<?php
use Module\shortcuts as Alodi;

if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}

import ('module/iphpmodules:Shortcuts');
