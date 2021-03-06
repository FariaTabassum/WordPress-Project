<?php

if ( ! defined( 'ABSPATH' ) || function_exists('Besa_Elementor_Instagram') ) {
    exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;

/**
 * Elementor tabs widget.
 *
 * Elementor widget that displays vertical or horizontal tabs with different
 * pieces of content.
 *
 * @since 1.0.0
 */
class Besa_Elementor_Instagram extends  Besa_Elementor_Carousel_Base{
    /**
     * Get widget name.
     *
     * Retrieve tabs widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'besa-instagram';
    }

    /**
     * Get widget title.
     *
     * Retrieve tabs widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Besa Instagram', 'besa' );
    }

    public function get_script_depends() {
        return [ 'besa-custom-slick', 'slick', 'jquery-instagramfeed', 'jquery-timeago' ];
    } 
 
    /**
     * Get widget icon.
     *
     * Retrieve tabs widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-gallery-justified';
    }

    /**
     * Register tabs widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {
        $this->register_controls_heading();

        $this->start_controls_section(
            'section_general',
            [
                'label' => esc_html__( 'General', 'besa' ),
            ]
        );
 
        $this->add_control(
            'username',
            [
                'label' => esc_html__('Username', 'besa'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'instagram', 'besa' ),
                'label_block' => true,
            ]
        );  

        $this->add_control(
            'limit',
            [
                'label' => esc_html__('Number of photos', 'besa'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
                'min'  => 1,
                'max'  => 12
            ]
        );

        $this->add_control(
            'layout_type',
            [
                'label'     => esc_html__('Layout Type', 'besa'),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => 'grid',
                'options'   => [
                    'grid'      => esc_html__('Grid', 'besa'), 
                    'carousel'  => esc_html__('Carousel', 'besa'), 
                ],
            ]
        );

        $this->add_control(
            'photo_size',
            [
                'label' => esc_html__('Photo Size', 'besa'),
                'type' => Controls_Manager::SELECT,
                'default' => 'small',
                'options' => [
                    'small' => esc_html__('Small', 'besa'),
                    'thumnail' => esc_html__('Thumnail', 'besa'),
                    'large' => esc_html__('Large', 'besa'),
                    'original' => esc_html__('Original', 'besa'),
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'target',
            [
                'label' => esc_html__('Open link in', 'besa'),
                'type' => Controls_Manager::SELECT,
                'default' => '_blank',
                'options' => [
                    '_self' => esc_html__('Current window (_self)', 'besa'),
                    '_blank' => esc_html__('New window (_blank)', 'besa'),
                ],
            ]
        );

        $this->add_control(
            'heading_settings',
            [
                'label' => esc_html__( 'Settings', 'besa' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'show_time',
            [
                'label' => esc_html__( 'Show Time', 'besa' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'besa' ),
                'label_off' => esc_html__( 'Hide', 'besa' ),
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_like',
            [
                'label' => esc_html__( 'Show Likes', 'besa' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'besa' ),
                'label_off' => esc_html__( 'Hide', 'besa' ),
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_comment',
            [
                'label' => esc_html__( 'Show Comments', 'besa' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'besa' ),
                'label_off' => esc_html__( 'Hide', 'besa' ),
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_button',
            [
                'label' => esc_html__( 'Show Button Follow', 'besa' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'besa' ),
                'label_off' => esc_html__( 'Hide', 'besa' ),
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'button_icon',
            [
                'label'       => esc_html__('Icon Button', 'besa'),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'separator' => 'before',
                'default' => [
                    'value' => 'icon-social-instagram',
                    'library' => 'simple-line-icons',
                ],
                'condition'   => [
                    'show_button' => 'yes',
                ]
            ]
        );

        $this->end_controls_section();

        $this->register_controls_item_style();

        $this->add_control_responsive();
        $this->add_control_carousel(['layout_type' => 'carousel']);

    }

    protected function register_controls_item_style(){
        $this->start_controls_section(
            'section_item_style',
            [
                'label' => esc_html__( 'Item', 'besa' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'item_spacing',
            [
                'label'     => esc_html__( 'Space Between', 'besa' ),
                'type'      => Controls_Manager::SLIDER,
                'default'   => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 100, 
                    ],
                ],   
                'selectors' => [
                    '{{WRAPPER}} .instagram-item-inner'   => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .instagram'         => 'margin-left: -{{SIZE}}{{UNIT}}; margin-right: -{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render_item( $item ) {
        $settings = $this->get_settings_for_display();

        extract( $settings );
        extract( $item );

        ?>
        <div class="instagram-item-inner">
            <a href="<?php echo esc_url( $link); ?>">

                <span class="group-items"> 
                <?php if ($show_like === 'yes') { ?>
                    <span class="likes"><i class="tb-icon tb-icon-heart"></i><?php echo esc_html($likes);?></span>
                <?php } ?>
                <?php if ($show_comment === 'yes') { ?>
                    <span class="comments"><i class="tb-icon tb-icon-bubbles"></i><?php echo esc_html($comments);?></span>
                <?php } ?>
                </span>
                <?php if ($show_time === 'yes') { ?>
                    <?php if( isset($time) && $time ) : ?>
                        <span class="time elapsed-time"><?php  echo tbay_elementor_time_ago($time,1); ?></span>
                    <?php endif; ?>
                <?php } ?>  

                <?php 

                ?>
                <img src="<?php echo esc_attr($item[$photo_size]); ?>" alt="<?php echo esc_attr( $description); ?>">
            </a>
        </div>
        <?php
    }

    protected function render_button() {
        $settings = $this->get_settings_for_display();
        extract( $settings );

        if ($show_button === 'yes') {
            ?>
            <?php
                $username   = trim( strtolower( $username) );
                $url        = 'https://instagram.com/' . str_replace( '@', '', $username );
            ?>

            <a class="btn-follow" href="<?php echo esc_url($url); ?>">
                <?php esc_html_e('Follow ', 'besa'); ?><span>@<?php echo trim($username); ?></span>
                <?php

                if( empty( $button_icon['value'] ) ) return;
       
                $this->add_render_attribute( 'icon', 'class', $button_icon['value'] );

                echo '<i '. trim($this->get_render_attribute_string( 'icon' )) .'></i>'; 

                ?>
            </a>
            <?php
        }
    }

}
$widgets_manager->register_widget_type(new Besa_Elementor_Instagram());
