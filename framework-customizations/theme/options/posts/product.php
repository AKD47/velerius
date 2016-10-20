<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'main'    => array(
        'type'    => 'box',
        'title'   => __( 'Дополнительне поля', '{domain}' ),
        'options' => array(
	        'gender'          => array(
		        'type'  => 'checkboxes',
		        'value' => array(
			        'male' => true,
			        'female' => true,
		        ),
		        'label' => __('Для кого', '{domain}'),
		        'desc'  => __('пол', '{domain}'),
		        'help'  => __('Для женщин, мужчин или унисекс', '{domain}'),
		        'choices' => array(
			        'female' => __('Для женщин', '{domain}'),
			        'male' => __('Для мужчин', '{domain}'),
		        ),
		        'inline' => false,
		        'save-in-separate-meta' => true,
	        ),
        ),
    ),
);