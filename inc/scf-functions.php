<?php
/**
 * Custom functions for define Smart Custom Fields.
 *
 * @link http://2inc.org/blog/2015/03/12/4670/
 *
 * @package asknode
 *
 * @param array  $settings  SCF objects array
 * @param string $type      post type or roll
 * @param int    $id        post id  or user id
 * @param string $meta_type post | user
 * @return array
 */
function works_register_fields( $settings, $type, $id, $meta_type ) {

	// SCF::add_setting( 'unique id', 'metabox title' );
	$Setting = SCF::add_setting( 'works-meta', 'Works Meta Information' );

	// $Setting->add_group( 'unique id', repeatable, array );
	$Setting->add_group( 'works-meta-group', false, array(
		array(
			'name'  => 'scope',
			'label' => 'SCOPE',
			'type'  => 'check',
			'choices' => array(
				0 => 'design',
				1 => 'coding',
				2 => 'wordpress',
				3 => 'writing'
			),
		),
		array(
			'name'    => 'client',
			'label'   => 'CLIENT',
			'type'    => 'text',
			'default' => '',
		),
		array(
			'name'    => 'url',
			'label'   => 'URL',
			'type'    => 'text',
			'default' => '',
		),
		array(
			'name'    => 'code',
			'label'   => 'CODE',
			'type'    => 'text',
			'default' => '',
		),
	) );

	$settings[] = $Setting;
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'works_register_fields', 10, 4 );
