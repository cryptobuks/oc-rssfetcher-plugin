<?php

declare(strict_types=1);

namespace Vdlp\RssFetcher\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Classes\NavigationManager;
use Backend\Classes\Controller;

/**
 * Class Feeds
 *
 * @package Vdlp\RssFetcher\Controllers
 * @mixin FormController
 * @mixin ListController
 */
class Feeds extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';

    /**
     * {@inheritdoc}
     */
    protected $requiredPermissions = ['vdlp.rssfetcher.access_feeds'];

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        NavigationManager::instance()->setContext('Vdlp.RssFetcher', 'rssfetcher', 'feeds');
    }
}
