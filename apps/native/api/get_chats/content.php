<?php 
# @*************************************************************************@
# @ @author Mansur Altamirov (Mansur_TL)									@
# @ @author_url 1: https://www.instagram.com/mansur_tl                      @
# @ @author_url 2: http://codecanyon.net/user/mansur_tl                     @
# @ @author_email: highexpresstore@gmail.com                                @
# @*************************************************************************@
# @ ColibriSM - The Ultimate Modern Social Media Sharing Platform           @
# @ Copyright (c) 21.03.2020 ColibriSM. All rights reserved.                @
# @*************************************************************************@

if (empty($cl['is_logged'])) {
	$data         = array(
		'code'    => 401,
		'data'    => array(),
		'message' => 'Unauthorized Access'
	);
}
else {
	require_once(cl_full_path("core/apps/chat/app_ctrl.php"));

	$chants_ls = cl_get_chats(array("user_id" => $me['id']));

	if (not_empty($chants_ls)) {
		$data["code"]    = 200;
		$data["valid"]   = true;
		$data["message"] = "Chats successfully";
		$data["data"]    = $chants_ls;
	}
	else {
		$data['code']    = 204;
        $data['message'] = "No data found";
        $data['data']    = array();
	}
}