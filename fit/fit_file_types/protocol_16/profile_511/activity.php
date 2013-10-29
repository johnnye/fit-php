<?php
return array(
	'type'		=> \Fit\FileType::activity,
	'messages'	=> array(
		array(
			'name'				=> 'file_id',
			'architecture'		=> 0,
			'global_msg_number'	=> 0,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('type',				0,		1,		'',		\Fit\Core::ENUM		,1),
				array('manufacturer',		1,		1,		'',		\Fit\Core::UINT16	,2),
				array('product',			2,		1,		'',		\Fit\Core::UINT16	,2),
				array('serial_number',		3,		1,		'',		\Fit\Core::UINT32Z	,4),
				array('time_created',		4,		1,		'',		\Fit\Core::TIME		,4),
				array('number',				5,		1,		'',		\Fit\Core::UINT16	,2),
			),
		),
		array(
			'name'				=> 'activity',
			'architecture'		=> 0,
			'global_msg_number'	=> 34,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('num_sessions',		0,		1,		'',		\Fit\Core::UINT16	,2),
				array('type',				1,		1,		'',		\Fit\Core::ENUM		,1),
				array('event',				2,		1,		'',		\Fit\Core::ENUM		,1),
				array('event_type',			3,		1,		'',		\Fit\Core::ENUM		,1),
			),
		),
		array(
			'name'				=> 'session',
			'architecture'		=> 0,
			'global_msg_number'	=> 18,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('event',				0,		1,		'',		\Fit\Core::ENUM		,1),
				array('event_type',			1,		1,		'',		\Fit\Core::ENUM		,1),
				array('start_time',			2,		1,		'',		\Fit\Core::TIME		,4),
				array('start_position_lat',	3,		1,		'deg',	\Fit\Core::POS		,4),
				array('start_position_long',4,		1,		'deg',	\Fit\Core::POS		,4),
				array('sport',				5,		1,		'',		\Fit\Core::ENUM		,1),
				array('sub_sport',			6,		1,		'',		\Fit\Core::ENUM		,1),
				array('total_elapsed_time',	7,		0.001,	's',	\Fit\Core::UINT32	,4),
				array('total_timer_time',	8,		0.001,	's',	\Fit\Core::UINT32	,4),
				array('total_distance',		9,		0.00001,'km',	\Fit\Core::UINT32	,4),
				array('total_cycles',		10,		1,		'',		\Fit\Core::UINT32	,4),
				array('total_calories',		11,		1,		'cal',	\Fit\Core::UINT16	,2),
				array('total_fat_calories',	13,		1,		'cal',	\Fit\Core::UINT16	,2),
				array('avg_speed',			14,		0.0036,	'km/h',	\Fit\Core::UINT16	,2),
				array('max_speed',			15,		0.0036,	'km/h',	\Fit\Core::UINT16	,2),
				array('avg_heart_rate',		16,		1,		'bpm',	\Fit\Core::UINT8	,1),
				array('max_heart_rate',		17,		1,		'bpm',	\Fit\Core::UINT8	,1),
				array('avg_cadence',		18,		1,		'',		\Fit\Core::UINT8	,1),
				array('max_cadence',		19,		1,		'',		\Fit\Core::UINT8	,1),
				array('avg_power',			20,		1,		'W',	\Fit\Core::UINT16	,2),
				array('max_power',			21,		1,		'W',	\Fit\Core::UINT16	,2),
				array('total_ascent',		22,		1,		'm',	\Fit\Core::UINT16	,2),
				array('total_descent',		23,		1,		'm',	\Fit\Core::UINT16	,2),
				array('first_lap_index',	25,		1,		'',		\Fit\Core::UINT16	,2),
				array('num_laps',			26,		1,		'',		\Fit\Core::UINT16	,2),
				array('nec_lat',			29,		1,		'deg',	\Fit\Core::POS		,4),
				array('nec_long',			30,		1,		'deg',	\Fit\Core::POS		,4),
				array('swc_lat',			31,		1,		'deg',	\Fit\Core::POS		,4),
				array('swc_long',			32,		1,		'deg',	\Fit\Core::POS		,4),
				array('message_index',		254,	1,		'',		\Fit\Core::UINT16	,2),
			),
		),
		array(
			'name'				=> 'lap',
			'architecture'		=> 0,
			'global_msg_number'	=> 19,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('start_time',			2,		1,		'',		\Fit\Core::TIME		,4),
				array('start_position_lat',	3,		1,		'deg',	\Fit\Core::POS		,4),
				array('start_position_long',4,		1,		'deg',	\Fit\Core::POS		,4),
				array('end_position_lat',	5,		1,		'deg',	\Fit\Core::POS		,4),
				array('end_position_long',	6,		1,		'deg',	\Fit\Core::POS		,4),
				array('total_elapsed_time',	7,		0.001,	's',	\Fit\Core::UINT32	,4),
				array('total_timer_time',	8,		0.001,	's',	\Fit\Core::UINT32	,4),
				array('total_distance',		9,		0.00001,'km',	\Fit\Core::UINT32	,4),
				array('total_cycles',		10,		1,		'',		\Fit\Core::UINT32	,4),
				array('nec_lat',			29,		1,		'deg',	\Fit\Core::POS		,4),
				array('nec_long',			30,		1,		'deg',	\Fit\Core::POS		,4),
				array('swc_lat',			31,		1,		'deg',	\Fit\Core::POS		,4),
				array('swc_long',			32,		1,		'deg',	\Fit\Core::POS		,4),
				array('message_index',		254,	1,		'',		\Fit\Core::UINT16	,2),
				array('total_calories',		11,		1,		'cal',	\Fit\Core::UINT16	,2),
				array('total_fat_calories',	12,		1,		'cal',	\Fit\Core::UINT16	,2),
				array('avg_speed',			13,		0.0036,	'km/h',	\Fit\Core::UINT16	,2),
				array('max_speed',			14,		0.0036,	'km/h',	\Fit\Core::UINT16	,2),
				array('avg_power',			19,		1,		'W',	\Fit\Core::UINT16	,2),
				array('max_power',			20,		1,		'W',	\Fit\Core::UINT16	,2),
				array('total_ascent',		21,		1,		'm',	\Fit\Core::UINT16	,2),
				array('total_descent',		22,		1,		'm',	\Fit\Core::UINT16	,2),
				array('event',				0,		1,		'',		\Fit\Core::ENUM		,1),
				array('event_type',			1,		1,		'',		\Fit\Core::ENUM		,1),
				array('avg_heart_rate',		15,		1,		'bpm',	\Fit\Core::UINT8	,1),
				array('max_heart_rate',		16,		1,		'bpm',	\Fit\Core::UINT8	,1),
				array('avg_cadence',		17,		1,		'',		\Fit\Core::UINT8	,1),
				array('max_cadence',		18,		1,		'',		\Fit\Core::UINT8	,1),
				array('intensity',			23,		1,		'',		\Fit\Core::UINT8	,1),
				array('lap_trigger',		24,		1,		'',		\Fit\Core::ENUM		,1),
				array('sport',				25,		1,		'',		\Fit\Core::ENUM		,1),
			),
		),
		array(
			'name'				=> 'length',
			'architecture'		=> 0,
			'global_msg_number'	=> 101,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('event',				0,		1,		'',		\Fit\Core::ENUM		,1),
				array('event_type',			1,		1,		'',		\Fit\Core::ENUM		,1),
			),
		),
		array(
			'name'				=> 'record',
			'architecture'		=> 0,
			'global_msg_number'	=> 20,
			'fields'			=> array(
				//		name,	field_def_number, factor, unit,	base_type_number, size
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('position_lat',		0,		1,		'deg',	\Fit\Core::POS		,4),
				array('position_long',		1,		1,		'deg',	\Fit\Core::POS		,4),
				array('altitude',			2,		0.2,	'm',	\Fit\Core::UINT16	,2),
				array('heart_rate',			3,		1,		'bpm',	\Fit\Core::UINT8	,1),
				array('cadence',			4,		1,		'',		\Fit\Core::UINT8	,1),
				array('distance',			5,		0.00001,'km',	\Fit\Core::UINT32	,4),
				array('speed',				6,		0.0036,	'km/h',	\Fit\Core::UINT16	,2),
				array('power',				7,		1,		'W',	\Fit\Core::UINT16	,2),
				array('grade',				9,		1,		'%',	\Fit\Core::SINT16	,2),
				array('resistance',			10,		1,		'',		\Fit\Core::UINT8	,1),
				array('time_from_course',	11,		0.01,	's',	\Fit\Core::SINT32	,4),
				array('temperature',		13,		1,		'deg.C',\Fit\Core::UINT8	,1),
			),
		),
		array(
			'name'				=> 'event',
			'architecture'		=> 0,
			'global_msg_number'	=> 21,
			'fields'		=> array(
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('event',				0,		1,		'',		\Fit\Core::ENUM		,1),
				array('event_type',			1,		1,		'',		\Fit\Core::ENUM		,1),
				array('timer_trigger',		3,		1,		'',		\Fit\Core::UINT32	,4),
				array('event_group',		4,		1,		'',		\Fit\Core::ENUM		,1),
			),
		),
		array(
			'name'				=> 'device_info',
			'architecture'		=> 0,
			'global_msg_number'	=> 23,
			'fields'		=> array(
				array('timestamp',			253,	1,		'',		\Fit\Core::TIME		,4),
				array('device_index',		0,		1,		'',		\Fit\Core::UINT8	,1),
				array('device_type',		1,		1,		'',		\Fit\Core::UINT8	,1),
				array('manufacturer',		2,		1,		'',		\Fit\Core::UINT16	,2),
				array('serial_number',		3,		1,		'',		\Fit\Core::UINT32	,4),
				array('product',			4,		1,		'',		\Fit\Core::UINT16	,2),
				array('software_version',	5,		0.01,	'',		\Fit\Core::UINT16	,2),
				array('hardware_version',	6,		1,		'',		\Fit\Core::UINT8	,1),
				array('xxx7',				7,		1,		'',		\Fit\Core::UINT32	,4),
				array('xxx8',				8,		1,		'',		\Fit\Core::UINT32	,4),
				array('battery_voltage',	10,		1,		'',		\Fit\Core::UINT16	,2),
				array('battery_status',		11,		1,		'',		\Fit\Core::UINT8	,1),
			),
		),
	),
);
