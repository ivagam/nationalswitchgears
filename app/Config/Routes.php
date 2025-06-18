<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::aboutUs');
$routes->get('contact-us', 'Home::contactUs');
$routes->get('gallery', 'Home::gallery');
$routes->get('certificates', 'Home::certificates');
$routes->get('reports', 'Home::reports');
$routes->get('infrastructure', 'Home::infrastructure');
$routes->get('overseas', 'Home::overseas');
$routes->get('blog', 'Home::blog');


$routes->get('product/neutral-grounding-resistor', 'Products::neutralGroundingResistor');
$routes->get('product/load-bank', 'Products::loadBank');
$routes->get('product/harmonic-filter-resistor', 'Products::harmonicFilterResistor');
$routes->get('product/switch-disconnector', 'Products::switchDisconnector');
$routes->get('product/dynamic-breaking-resistor', 'Products::dynamicBreakingResistor');
$routes->get('product/products', 'Products::products');
$routes->get('clients', 'Products::clients');
$routes->get('product/compact-substation', 'Products::compactSubstation');

$routes->get('blog/neutral-grounding-resistor', 'Blog::neutral_grounding_resistor');
$routes->get('blog/load-bank', 'Blog::load_bank');
$routes->get('blog/harmonic-filter-resistor', 'Blog::harmonic_filter_resistor');
$routes->get('blog/switch-disconnector', 'Blog::switch_disconnector');
$routes->get('blog/dynamic-breaking-resistor', 'Blog::dynamic_breaking_resistor');

