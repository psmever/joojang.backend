<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Authentication Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used during authentication for various
	| messages that we need to display to the user. You are free to modify
	| these language lines according to your application's requirements.
	|
	*/
	'failed'   => '일치하는 회원이 존재 하지 않습니다.',
	'client_failed'   => '클라이언트 정보가 존재 하지 않습니다.',
    'throttle' => '너무 많은 로그인을 시도하였습니다. :seconds 초 후에 다시 시도하십시요.',
    'need_login' => '로그인이 필요한 서비스 입니다.',
    'need_admin_level' => '관리자 권한이 필요한 서비스 입니다.',
	'login' => [
		'failed' => '정확한 로그인 정보가 아닙니다.',
		'success' => '로그인이 완료 되었습니다.',
		'not_active_user' => '중지된 사용자 입니다.',
		'wait_user' => '인증 대기 중인 사용자 입니다.',
	],
	'email_auth' => [
		'failed_auth_email_code' => '존재 하지 않은 인증 코드 입니다.',
		'already_verified' => '이미 인증 완료된 인증코드 입니다.',
		'user_not_active' => '정상적인 사용자가 아닙니다.',
		'verified_false' => '처리중 문제가 생겼습니다.',
		'verified_true' => '인증 처리가 완료 되었습니다.',
	],

];
