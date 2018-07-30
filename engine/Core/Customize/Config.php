<?php
namespace Engine\Core\Customize;

/**
 * Class Config
 * @package Flexi\Customize
 */
class Config
{
    /**
     * @var array
     */
    protected $config = [
        'dashboardMenu' => [
            'home' => [
                'classIcon' => 'ico-home',
                'urlPath'   => '/admin/',
                'title'     => 'Home'
            ],
            'pages' => [
                'classIcon' => 'ico-page',
                'urlPath'   => '/admin/pages/',
                'title'     => 'Pages',
                'parents'   => []
            ],
            'posts' => [
                'classIcon' => 'ico-posts',
                'urlPath'   => '/admin/posts/',
                'title'     => 'Plugins'
            ],
            'settings' => [
                'classIcon' => 'ico-setting',
                'urlPath'   => '/admin/settings/general/',
                'title'     => 'Settings'
            ]
        ],
        'settingMenu' => [
            'general' => [
                'urlPath'   => '/admin/settings/general/',
                'title'     => 'general'
            ],

			'themes' => [
				'urlPath'   => '/admin/settings/themes/',
				'title'     => 'themes'
			],

            'menus' => [
                'urlPath'   => '/admin/settings/appearance/menus/',
                'title'     => 'menus'
            ],
            'users' => [
                'urlPath'   => '/admin/user/',
                'title'     => 'users'
            ]
        ]
    ];

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->config[$key]);
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->has($key) ? $this->config[$key] : null;
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->config[$key] = $value;
    }
}
